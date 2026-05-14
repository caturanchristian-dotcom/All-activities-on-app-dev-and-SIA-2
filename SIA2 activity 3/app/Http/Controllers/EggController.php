<?php
namespace App\Http\Controllers;

use App\Models\Egg;
use Illuminate\Http\Request;

class EggController extends Controller
{
    public function index(Request $request)
    {
        $eggs = Egg::latest()->paginate(10);

        if ($request->search) {
            $eggs = Egg::where('egg_type', 'like', '%' . $request->search . '%')
                      ->orWhere('farm_name', 'like', '%' . $request->search . '%')
                      ->latest()
                      ->paginate(10);
        }

        return view('eggs.index', compact('eggs'));
    }

    public function create()
    {
        return view('eggs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'egg_type' => 'required|string|max:100',
            'farm_name' => 'required|string|max:100',
            'price_per_dozen' => 'required|numeric|min:0',
            'stock_quantity' => 'required|integer|min:0',
            'description' => 'nullable|string|max:500'
        ]);

        Egg::create($request->all());

        return redirect()->route('eggs.index')
                        ->with('success', 'Egg added successfully!');
    }

    public function show(Egg $egg)
    {
        return view('eggs.show', compact('egg'));
    }

    public function edit(Egg $egg)
    {
        return view('eggs.edit', compact('egg'));
    }

    public function update(Request $request, Egg $egg)
    {
        $request->validate([
            'egg_type' => 'required|string|max:100',
            'farm_name' => 'required|string|max:100',
            'price_per_dozen' => 'required|numeric|min:0',
            'stock_quantity' => 'required|integer|min:0',
            'description' => 'nullable|string|max:500'
        ]);

        $egg->update($request->all());

        return redirect()->route('eggs.index')
                        ->with('success', 'Egg updated successfully!');
    }

    public function destroy(Egg $egg)
    {
        $egg->delete();

        return redirect()->route('eggs.index')
                        ->with('success', 'Egg deleted successfully!');
    }
}