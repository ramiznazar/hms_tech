<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\Website\HomeController;
use App\Http\Controllers\Website\AboutController;
use App\Http\Controllers\Website\BlogController;
use App\Http\Controllers\Website\ContactController;
use App\Http\Controllers\Website\PortfolioController;
use App\Http\Controllers\Website\ServiceController;
use App\Http\Controllers\Website\PricingController;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\PortfolioController as AdminPortfolioController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\FeedbackController as AdminFeedbackController;
use App\Http\Controllers\Admin\ServiceController as AdminServiceController;
use App\Http\Controllers\Admin\PricingPlanController as AdminPricingPlanController;
use App\Http\Controllers\Admin\BlogController as AdminBlogController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Website Routes
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{blog}', [BlogController::class, 'detail'])->name('blog.detail');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');
Route::get('/portfolio/{portfolio}', [PortfolioController::class, 'detail'])->name('portfolio.detail');
Route::get('/service', [ServiceController::class, 'index'])->name('service');
Route::get('/service/{service}', [ServiceController::class, 'detail'])->name('service.detail');
Route::get('/pricing', [PricingController::class, 'index'])->name('pricing');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');

//Admin Routes
Route::get('/admin',[AdminController::class,'index'])->name('admin');
Route::get('/admin/form',function(){
    return view('admin.pages.form');
});
Route::get('/admin/table',function(){
    return view('admin.pages.table');
});
Route::resource('admin/portfolio', AdminPortfolioController::class)->names('admin.portfolio');
Route::resource('admin/category', AdminCategoryController::class)->names('admin.category');
Route::resource('admin/feedback', AdminFeedbackController::class)->names('admin.feedback');
Route::resource('admin/service', AdminServiceController::class)->names('admin.service');
Route::resource('admin/pricing', AdminPricingPlanController::class)->names('admin.pricing');
Route::resource('admin/blog', AdminBlogController::class)->names('admin.blog');

Route::get('/optimize-app', function () {
    Artisan::call('optimize:clear');
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    Artisan::call('config:cache');
    Artisan::call('route:cache');
    Artisan::call('view:cache');
    Artisan::call('optimize');

    return "Application optimized and caches cleared successfully!";
});
Route::get('/migrate', function () {
    Artisan::call('migrate');
    return response()->json(['message' => 'Migration successful'], 200);
});
Route::get('/migrate/rollback', function () {
    Artisan::call('migrate:rollback');
    return response()->json(['message' => 'Migration rollback successfully'], 200);
});