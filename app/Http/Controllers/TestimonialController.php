<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('testimonials.index', compact('testimonials'));
    }

    public function create()
    {
        return view('testimonials.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:225',
            'message' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('testimonials', 'public');
        }

        Testimonial::create($validated);

        return redirect()->route('testimonials.index')->with('success', 'Testimonials created successfully');
    }

    public function destroy($id)
    {
        $testimonial = Testimonial::findOrFail($id);

        // Optionally delete the image from storage
        if ($testimonial->image && \Storage::disk('public')->exists($testimonial->image)) {
            \Storage::disk('public')->delete($testimonial->image);
        }

        $testimonial->delete();

        return redirect()->route('testimonials.index')->with('success', 'testimonial deleted successfully');
    }
    public function show($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        return view('testimonials.show', compact('testimonial'));
    }

    public function edit($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        return view('testimonials.edit', compact('testimonial'));
    }

    public function update(Request $request, testimonial $testimonial)
    {
        // dd($testimonial->toArray());
        $validated = $request->validate([
            'name' => 'nullable|string|max:255',
            'message' => 'nullable|string',
            'image' => 'nullable|image',
        ]);

        // If image is uploaded
        if ($request->hasFile('image')) {
        // Delete old image if exists
            if ($testimonial->image && \Storage::disk('public')->exists($testimonial->image)) {
                \Storage::disk('public')->delete($testimonial->image);
            }
            $imagePath = $request->file('image')->store('testimonials', 'public');
            $validated['image'] = $imagePath;
        }

        $testimonial->update($validated);

        return redirect()->route('testimonials.index')->with('success', 'testimonial updated successfully');
    }

}

