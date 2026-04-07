<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(){
        $portfolios = Portfolio::orderBy('sort_order')->orderBy('created_at', 'desc')->get();
        return view('website.pages.portfolio.portfolio', compact('portfolios'));
    }

    public function detail(Portfolio $portfolio){
        return view('website.pages.portfolio.detail', compact('portfolio'));
    }
}
