<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PricingPlan;
use Illuminate\Http\Request;

class PricingPlanController extends Controller
{
    public function index()
    {
        $plans = PricingPlan::orderBy('sort_order')->orderBy('created_at', 'desc')->get();
        return view('admin.pages.website.pricing.index', compact('plans'));
    }

    public function create()
    {
        return view('admin.pages.website.pricing.create');
    }

    public function store(Request $request)
    {
        $data = $request->except('_token');
        $data['features'] = array_values(array_filter($request->input('features', [])));
        $data['is_featured'] = $request->has('is_featured');
        PricingPlan::create($data);
        return redirect()->route('admin.pricing.index')->with('success', 'Pricing plan created successfully.');
    }

    public function edit(PricingPlan $pricing)
    {
        return view('admin.pages.website.pricing.edit', compact('pricing'));
    }

    public function update(Request $request, PricingPlan $pricing)
    {
        $data = $request->except(['_token', '_method']);
        $data['features'] = array_values(array_filter($request->input('features', [])));
        $data['is_featured'] = $request->has('is_featured');
        $pricing->update($data);
        return redirect()->route('admin.pricing.index')->with('success', 'Pricing plan updated successfully.');
    }

    public function destroy(PricingPlan $pricing)
    {
        $pricing->delete();
        return redirect()->route('admin.pricing.index')->with('success', 'Pricing plan deleted successfully.');
    }
}
