<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Portfolio;
use App\Models\PricingPlan;

class HomeController extends Controller
{
    public function home(){
        $portfolios = Portfolio::latest()->take(4)->get();
        $plans = PricingPlan::orderBy('sort_order')->get();
        return view('website.index', compact('portfolios', 'plans'));
    }
}
