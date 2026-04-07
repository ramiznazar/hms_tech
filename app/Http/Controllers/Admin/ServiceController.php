<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::orderBy('sort_order')->orderBy('created_at', 'desc')->get();
        return view('admin.pages.website.service.index', compact('services'));
    }

    public function create()
    {
        return view('admin.pages.website.service.create');
    }

    public function store(Request $request)
    {
        $data = $request->except('_token');
        $data['technologies'] = array_filter($request->input('technologies', []));
        Service::create($data);
        return redirect()->route('admin.service.index')->with('success', 'Service created successfully.');
    }

    public function edit(Service $service)
    {
        return view('admin.pages.website.service.edit', compact('service'));
    }

    public function update(Request $request, Service $service)
    {
        $data = $request->except(['_token', '_method']);
        $data['technologies'] = array_filter($request->input('technologies', []));
        $service->update($data);
        return redirect()->route('admin.service.index')->with('success', 'Service updated successfully.');
    }

    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('admin.service.index')->with('success', 'Service deleted successfully.');
    }
}
