<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::orderBy('sort_order')->orderBy('created_at', 'desc')->get();
        return view('admin.pages.website.porfolio.index', compact('portfolios'));
    }

    public function create()
    {
        $categories = Category::orderBy('name')->get();
        return view('admin.pages.website.porfolio.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $data = $request->except(['_token', 'thumbnail', 'gallery_images']);

        if ($request->hasFile('thumbnail')) {
            $thumb = $request->file('thumbnail');
            $thumbName = time() . '_thumb.' . $thumb->getClientOriginalExtension();
            $thumb->move(public_path('uploads/portfolio'), $thumbName);
            $data['thumbnail'] = 'uploads/portfolio/' . $thumbName;
        }

        if ($request->hasFile('gallery_images')) {
            $galleryPaths = [];
            foreach ($request->file('gallery_images') as $index => $file) {
                $fileName = time() . '_gallery_' . $index . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('uploads/portfolio'), $fileName);
                $galleryPaths[] = 'uploads/portfolio/' . $fileName;
            }
            $data['gallery_images'] = $galleryPaths;
        }

        Portfolio::create($data);

        return redirect()->route('admin.portfolio.index')->with('success', 'Portfolio item created successfully.');
    }

    public function edit(Portfolio $portfolio)
    {
        $categories = Category::orderBy('name')->get();
        return view('admin.pages.website.porfolio.edit', compact('portfolio', 'categories'));
    }

    public function update(Request $request, Portfolio $portfolio)
    {
        $data = $request->except(['_token', '_method', 'thumbnail', 'gallery_images']);

        if ($request->hasFile('thumbnail')) {
            if ($portfolio->thumbnail && file_exists(public_path($portfolio->thumbnail))) {
                unlink(public_path($portfolio->thumbnail));
            }
            $thumb = $request->file('thumbnail');
            $thumbName = time() . '_thumb.' . $thumb->getClientOriginalExtension();
            $thumb->move(public_path('uploads/portfolio'), $thumbName);
            $data['thumbnail'] = 'uploads/portfolio/' . $thumbName;
        }

        if ($request->hasFile('gallery_images')) {
            $galleryPaths = [];
            foreach ($request->file('gallery_images') as $index => $file) {
                $fileName = time() . '_gallery_' . $index . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('uploads/portfolio'), $fileName);
                $galleryPaths[] = 'uploads/portfolio/' . $fileName;
            }
            $data['gallery_images'] = $galleryPaths;
        }

        $portfolio->update($data);

        return redirect()->route('admin.portfolio.index')->with('success', 'Portfolio item updated successfully.');
    }

    public function destroy(Portfolio $portfolio)
    {
        if ($portfolio->thumbnail && file_exists(public_path($portfolio->thumbnail))) {
            unlink(public_path($portfolio->thumbnail));
        }

        if ($portfolio->gallery_images) {
            foreach ($portfolio->gallery_images as $img) {
                if (file_exists(public_path($img))) {
                    unlink(public_path($img));
                }
            }
        }

        $portfolio->delete();

        return redirect()->route('admin.portfolio.index')->with('success', 'Portfolio item deleted successfully.');
    }
}
