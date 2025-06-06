<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::orderBy('display_order')->get();
        return view('blogs.index', compact('blogs'));
    }

    public function create()
    {
        return view('blogs.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,webp',
            'banner' => 'nullable|image|mimes:jpeg,png,jpg,webp',
            'subtitle1' => 'nullable|string',
            'description1' => 'nullable|string',
            'subtitle2' => 'nullable|string',
            'description2' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp',
            'button_text' => 'required|string',
            'button_url' => 'nullable|string',
            'display_order' => 'nullable|integer',
            'is_published' => 'nullable|boolean',
        ]);
        if ($request->hasFile('thumbnail')) {
            $validated['thumbnail'] = $request->file('thumbnail')->store('blogs/thumbnails', 'public');
        }

        if ($request->hasFile('banner')) {
            $validated['banner'] = $request->file('banner')->store('blogs/banners', 'public');
        }

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('blogs/images', 'public');
        }

        $validated['is_published'] = $request->has('is_published'); // checkbox handling

        Blog::create($validated);

        return redirect()->route('blogs.index')->with('success', 'Blog created successfully');
    }


    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        return view('blogs.show', compact('blog'));
    }

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('blogs.edit', compact('blog'));
    }

    public function update(Request $request, Blog $blog)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,webp',
            'banner' => 'nullable|image|mimes:jpeg,png,jpg,webp',
            'subtitle1' => 'nullable|string',
            'description1' => 'nullable|string',
            'subtitle2' => 'nullable|string',
            'description2' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp',
            'button_text' => 'required|string',
            'button_url' => 'nullable|string',
            'display_order' => 'nullable|integer',
            'is_published' => 'nullable|boolean',
        ]);

        if ($request->hasFile('thumbnail')) {
            if ($blog->thumbnail && Storage::disk('public')->exists($blog->thumbnail)) {
                Storage::disk('public')->delete($blog->thumbnail);
            }
            $validated['thumbnail'] = $request->file('thumbnail')->store('blogs/thumbnails', 'public');
        }

        // Handle banner file
        if ($request->hasFile('banner')) {
            if ($blog->banner && Storage::disk('public')->exists($blog->banner)) {
                Storage::disk('public')->delete($blog->banner);
            }
            $validated['banner'] = $request->file('banner')->store('blogs/banners', 'public');
        }

        // Handle image file
        if ($request->hasFile('image')) {
            if ($blog->image && Storage::disk('public')->exists($blog->image)) {
                Storage::disk('public')->delete($blog->image);
            }
            $validated['image'] = $request->file('image')->store('blogs/images', 'public');
        }

        $validated['is_published'] = $request->has('is_published'); // checkbox handling

        $blog->update($validated);

        return redirect()->route('blogs.index')->with('success', 'Blog updated successfully');
    }

    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        if ($blog->image && Storage::disk('public')->exists($blog->image)) {
            Storage::disk('public')->delete($blog->image);
        }
        $blog->delete();
        return redirect()->route('blogs.index')->with('success', 'Blog deleted successfully');
    }

    public function togglePublish(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);
        $blog->is_published = $request->input('is_published'); // input, not has()
        $blog->save();

        return response()->json(['success' => true, 'message' => 'Publish status updated.']);
    }

    public function updateOrder(Request $request)
    {
        foreach ($request->order as $item) {
            Blog::where('id', $item['id'])->update(['display_order' => $item['display_order']]);
        }

        return response()->json(['status' => 'success']);
    }

}
