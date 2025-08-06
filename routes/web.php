<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SendEmailController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// HOME
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', function () {
    return redirect()->route('home') . '#about';
})->name('home.about');

Route::get('/contact', function () {
    return redirect()->route('home') . '#contact';
})->name('home.contact');

Route::get('/services-fixed-asset-management-system', function () {
    return view('services.fams');
})->name('services.fams');

Route::get('/services-smart-linen-rfid-tracking', function () {
    return view('services.slft');
})->name('services.slft');

Route::get('/services-approval-process-tracking', function () {
    return view('services.apt');
})->name('services.apt');

// SEND EMAIL
Route::post('/send', [HomeController::class, 'send'])->name('send');

// PRODUCTS
Route::get('/product-rfid-card', [ProductController::class, 'card'])->name('product.card');
Route::get('/product-rfid-wristband', [ProductController::class, 'wristband'])->name('product.wristband');

// BLOGS
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{slug}', [BlogController::class, 'detail'])->name('blog.detail');


// AUTH
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'authenticate']);
});

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {

    Route::get('/admin', [AdminController::class, 'admin'])->name('admin');

    // ADMIN CARD
    Route::get('/admin/rfid-card', [ProductController::class, 'adminCard'])->name('admin.card');
    Route::get('/admin/rfid-card/create', [ProductController::class, 'createCard'])->name('admin.card.create');
    Route::post('/admin/rfid-card/store', [ProductController::class, 'storeCard'])->name('admin.card.store');
    Route::get('/admin/rfid-card/{id}/edit', [ProductController::class, 'editCard'])->name('admin.card.edit');
    Route::put('/admin/rfid-card/{id}/update', [ProductController::class, 'updateCard'])->name('admin.card.update');
    Route::delete('/admin/rfid-card/{id}', [ProductController::class, 'destroyCard'])->name('admin.card.destroy');

    // ADMIN WRISTBAND
    Route::get('/admin/rfid-wristband', [ProductController::class, 'adminWristband'])->name('admin.wristband');
    Route::get('/admin/rfid-wristband/create', [ProductController::class, 'createWristband'])->name('admin.wristband.create');
    Route::post('/admin/rfid-wristband/store', [ProductController::class, 'storeWristband'])->name('admin.wristband.store');
    Route::get('/admin/rfid-wristband/{id}/edit', [ProductController::class, 'editWristband'])->name('admin.wristband.edit');
    Route::put('/admin/rfid-wristband/{id}/update', [ProductController::class, 'updateWristband'])->name('admin.wristband.update');
    Route::delete('/admin/rfid-wristband/{id}', [ProductController::class, 'destroyWristband'])->name('admin.wristband.destroy');
    
    // ADMIN BANNER
    Route::get('/admin/banner', [BannerController::class, 'adminBanner'])->name('admin.banner');
    Route::get('/admin/banner/create', [BannerController::class, 'createBanner'])->name('admin.banner.create');
    Route::post('/admin/banner/store', [BannerController::class, 'storeBanner'])->name('admin.banner.store');
    Route::get('/admin/banner/{id}/edit', [BannerController::class, 'editBanner'])->name('admin.banner.edit');
    Route::put('/admin/banner/{id}/update', [BannerController::class, 'updateBanner'])->name('admin.banner.update');
    Route::delete('/admin/banner/{id}', [BannerController::class, 'destroyBanner'])->name('admin.banner.destroy');

    // ADMIN BLOG
    Route::get('/admin/blog', [BlogController::class, 'adminBlog'])->name('admin.blog');
    Route::get('/admin/blog/create', [BlogController::class, 'createBlog'])->name('admin.blog.create');
    Route::post('/admin/blog/store', [BlogController::class, 'storeBlog'])->name('admin.blog.store');
    Route::get('/admin/blog/{id}/edit', [BlogController::class, 'editBlog'])->name('admin.blog.edit');
    Route::put('/admin/blog/{id}/update', [BlogController::class, 'updateBlog'])->name('admin.blog.update');
    Route::delete('/admin/blog/{id}', [BlogController::class, 'destroyBlog'])->name('admin.blog.destroy');
});