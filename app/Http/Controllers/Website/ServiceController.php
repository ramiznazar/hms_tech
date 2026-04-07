<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){
        $services = Service::orderBy('sort_order')->orderBy('created_at', 'desc')->get();
        return view('website.pages.service.service', compact('services'));
    }

    public function detail(Service $service){
        return view('website.pages.service.service-detail', compact('service'));
    }
}
