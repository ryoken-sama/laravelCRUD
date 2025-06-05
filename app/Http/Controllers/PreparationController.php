<?php

namespace App\Http\Controllers;

use App\Models\Preparation;
use Illuminate\Http\Request;

class PreparationController extends Controller
{
    public function index()
    {
        $preparations = Preparation::all();
        return view('preparations.index', compact('preparations'));
    }

    public function create()
    {
        return view('preparations.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:225',
            'content' => 'required|string',
        ]);

        Preparation::create($validated);
        return redirect()->route('preparations.index')->with('success', 'Preparation created successfully');
    }

    public function show(Preparation $preparation)
    {
        return view('preparations.show', compact('preparation'));
    }

    public function edit(Preparation $preparation)
    {
        return view('preparations.edit', compact('preparation'));
    }

    public function update(Request $request, Preparation $preparation)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:225',
            'content' => 'required|string',
        ]);

        $preparation->update($validated);
        return redirect()->route('preparations.index')->with('success', 'Preparation updated successfully');
    }

    public function destroy(Preparation $preparation)
    {
        $preparation->delete();

        return redirect()->route('preparations.index')->with('success', 'Preparation deleted successfully');
    }
}
