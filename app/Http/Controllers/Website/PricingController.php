<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\PricingPlan;
use Illuminate\Http\Request;

class PricingController extends Controller
{
    public function index(){
        $plans = PricingPlan::orderBy('sort_order')->orderBy('created_at', 'desc')->get();
        return view('website.pages.pricing', compact('plans'));
    }
}
