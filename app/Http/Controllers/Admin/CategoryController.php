<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('name')->get();
        return view('admin.pages.website.category.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.pages.website.category.create');
    }

    public function store(Request $request)
    {
        Category::create(['name' => $request->name]);
        return redirect()->route('admin.category.index')->with('success', 'Category created successfully.');
    }

    public function edit(Category $category)
    {
        return view('admin.pages.website.category.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $category->update(['name' => $request->name]);
        return redirect()->route('admin.category.index')->with('success', 'Category updated successfully.');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('admin.category.index')->with('success', 'Category deleted successfully.');
    }
}
