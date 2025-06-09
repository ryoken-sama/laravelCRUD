<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    // Show all blocks
    public function index()
    {
        $abouts = About::orderBy('display_order')->get();
        return view('abouts.index', compact('abouts'));
    }

    // Show form to create new block
    public function create()
    {
        return view('abouts.create');
    }

  public function show($id)
{
    $about = About::findOrFail($id);
    return view('abouts.show', compact('about'));
}


    // Store new block to DB
    public function store(Request $request)
    {
        $data = $this->validateData($request);

        About::create($data);

        return redirect()->route('abouts.index')->with('success', 'Block created successfully.');
    }

    // Show form to edit a block
    public function edit($id)
    {
        $about = About::findOrFail($id);
        return view('abouts.edit', compact('about'));
    }

    // Update existing block
    public function update(Request $request, $id)
    {
        $about = About::findOrFail($id);

        $data = $this->validateData($request);

        $about->update($data);

        return redirect()->route('abouts.index')->with('success', 'Block updated successfully.');
    }

    // Delete a block
    public function destroy($id)
    {
        $about = About::findOrFail($id);
        $about->delete();

        return redirect()->route('abouts.index')->with('success', 'Block deleted successfully.');
    }

    // Validation rules
    protected function validateData(Request $request)
    {
        return $request->validate([
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'icon_class' => 'nullable|string|max:255',
            'button_text' => 'nullable|string|max:100',
            'button_url' => 'nullable|string|max:255',
            'image' => 'nullable|image|max:2048', // max 2MB image upload
            'display_order' => 'nullable|integer',
            'extra_classes' => 'nullable|string|max:255',
        ]);
    }
}
