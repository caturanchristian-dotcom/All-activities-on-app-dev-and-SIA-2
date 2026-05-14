<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class DashboardController extends Controller
{
    public function index()
    {
        $localUsers = User::select('id', 'name', 'email', 'role')->latest()->take(5)->get();
        $currentUser = auth()->user();

        // Cached external API (15 min)
        $recentPosts = Cache::remember('dashboard_posts', 15*60, function () {
            $apis = [
                'https://dummyjson.com/posts?limit=5',
                'https://reqres.in/api/users?page=1',
                'https://jsonplaceholder.typicode.com/posts'
            ];

            foreach ($apis as $url) {
                try {
                    $response = Http::timeout(3)->get($url);
                    if ($response->successful()) {
                        $data = $response->json();
                        return collect($data['posts'] ?? $data['data'] ?? $data)->take(5)->toArray();
                    }
                } catch (\Exception $e) {
                    Log::warning("API {$url} failed: " . $e->getMessage());
                }
            }

            return [['title' => 'API Offline', 'body' => 'Using fallback data']];
        });

        return view('dashboard', compact('currentUser', 'localUsers', 'recentPosts'));
    }
}