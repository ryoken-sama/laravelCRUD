<?php

namespace App\Http\Controllers;

use App\Models\Preparation;
use Illuminate\Http\Request;

class PreparationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $preparations = PreparationController::all();
        return view('preparation.index', compact('preparations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:225',
            'content' => 'required|string',
        ]);

        Preparation::create($validated);
        return redirect()->route('preparation.index')->with('success', 'Preparation created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('preparations.show', compact('preparation'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('preparations.edit', compact('preparation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Preparation $preparation)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:225',
            'content' => 'required|string',
        ]);

        $preparation->update($validated);
        return redirect()->route('preparation.index')->with('success', 'Preparation updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Preparation $preparation)
    {
        $preparation->delete();

        return redirect()->route('preparation.index')->with('success', 'Preparation deleted successfully');
    }
}
