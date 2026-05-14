<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Integration App') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">

            {{-- User Profile Card --}}
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-blue-500 text-block">
                    <h3 class="text-2xl font-bold mb-4">Welcome, {{ $currentUser->name }}!</h3>
                    <p class="text-blue-100">Role: <span class="font-semibold">{{ ucfirst($currentUser->role) }}</span></p>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

                {{-- Local API: Users List --}}
                <div>
                    <h3 class="text-xl font-bold mb-4">Local Users (Your API)</h3>
                    <div class="bg-white shadow-sm rounded-lg overflow-hidden">
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Role</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach($localUsers as $user)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $user->name }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $user->role === 'admin' ? 'bg-red-100 text-red-800' : 'bg-green-100 text-green-800' }}">
                                                {{ ucfirst($user->role) }}
                                            </span>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                {{-- External API Section --}}
                <div>
                    <h3 class="text-xl font-bold mb-4">Recent Posts (External API)</h3>
                    @if(count($recentPosts) > 0)
                        <div class="space-y-4">
                            @foreach($recentPosts as $post)
                                <div class="bg-white p-6 shadow-sm rounded-lg border">
                                    @if(isset($post['title']))
                                        <h4 class="font-semibold text-lg mb-2">{{ $post['title'] }}</h4>
                                        <p class="text-gray-600 text-sm">{{ Str::limit($post['body'] ?? '', 80) }}</p>
                                    @else
                                        <h4 class="font-semibold text-lg mb-2">{{ $post['first_name'] ?? 'N/A' }} {{ $post['last_name'] ?? '' }}</h4>
                                        <p class="text-gray-600 text-sm">{{ $post['email'] ?? 'No data' }}</p>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    @else
                        <div class="bg-yellow-50 border border-yellow-200 p-6 rounded-lg">
                            <p class="text-yellow-800">External API temporarily unavailable. Local data working fine!</p>
                        </div>
                    @endif
                </div>

            </div>
        </div>
    </div>
</x-app-layout>