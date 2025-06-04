<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        return view('sliders.index', compact('sliders'));
    }

    public function create()
    {
        return view('sliders.create');
    }

    public function store(Request $request)
    {
        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('logos', 'public');
            $validatedData['logo'] = $logoPath;
        }
        // $imagePath = $request->file('image')->store('sliders', 'public');
        $slider = Slider::create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'description' => $request->description,
            // 'image' => hasFile('image'),
            'button_text' => $request->button_text,
            'button_url' => $request->button_url,
        ]);
        return redirect()->route('sliders.index')->with('success', 'Slider created successfully');
    }

    public function destroy($id)
    {
        $slider = Slider::findOrFail($id);

        // Optionally delete the image from storage
        if ($slider->image && \Storage::disk('public')->exists($slider->image)) {
            \Storage::disk('public')->delete($slider->image);
        }

        $slider->delete();

        return redirect()->route('sliders.index')->with('success', 'Slider deleted successfully');
    }
    public function show($id)
    {
        $slider = Slider::findOrFail($id);
        return view('sliders.show', compact('slider'));
    }

    public function edit($id)
    {
        $slider = Slider::findOrFail($id);
        return view('sliders.edit', compact('slider'));
    }

    public function update(Request $request, Slider $slider)
    {
        // dd($slider->toArray());
        $validated = $request->validate([
            'title' => 'nullable|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'button_text' => 'nullable|string|max:255',
            'button_url' => 'nullable|string|max:255',
            'image' => 'nullable|image',
        ]);

        // If image is uploaded
        if ($request->hasFile('image')) {
        // Delete old image if exists
            if ($slider->image && \Storage::disk('public')->exists($slider->image)) {
                \Storage::disk('public')->delete($slider->image);
            }
            $imagePath = $request->file('image')->store('sliders', 'public');
            $validated['image'] = $imagePath;
        }

        $slider->update($validated);

        return redirect()->route('sliders.index')->with('success', 'Slider updated successfully');
    }

}

