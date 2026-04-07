<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::orderBy('sort_order')->orderBy('created_at', 'desc')->get();
        return view('admin.pages.website.blog.index', compact('blogs'));
    }

    public function create()
    {
        return view('admin.pages.website.blog.create');
    }

    public function store(Request $request)
    {
        $data = $request->except('_token');
        $data['slug'] = Str::slug($request->title) . '-' . time();
        $data['tags'] = array_values(array_filter($request->input('tags', [])));

        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $filename = $file->getClientOriginalName();
            $file->move(public_path('uploads/blog'), $filename);
            $data['thumbnail'] = 'uploads/blog/' . $filename;
        }

        Blog::create($data);
        return redirect()->route('admin.blog.index')->with('success', 'Blog post created successfully.');
    }

    public function edit(Blog $blog)
    {
        return view('admin.pages.website.blog.edit', compact('blog'));
    }

    public function update(Request $request, Blog $blog)
    {
        $data = $request->except(['_token', '_method']);
        $data['tags'] = array_values(array_filter($request->input('tags', [])));

        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $filename = $file->getClientOriginalName();
            $file->move(public_path('uploads/blog'), $filename);
            $data['thumbnail'] = 'uploads/blog/' . $filename;
        } else {
            unset($data['thumbnail']);
        }

        $blog->update($data);
        return redirect()->route('admin.blog.index')->with('success', 'Blog post updated successfully.');
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('admin.blog.index')->with('success', 'Blog post deleted successfully.');
    }
}
