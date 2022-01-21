<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\FrontFileController;

require __DIR__.'/auth.php';

// front end pages
Route::name('front.')->group(function () {
    Route::get('/', [FrontEndController::class,'index'])->name('index');
    Route::get('/portfolios', [FrontEndController::class,'portfolios'])->name('portfolios');
    Route::get('/portfolio/{portfolio}', [FrontEndController::class,'portfolio_show'])->name('portfolio.show');
    Route::get('/clients', [FrontEndController::class,'clients'])->name('clients');
    Route::get('/client/{client}', [FrontEndController::class,'client_show'])->name('client.show');
    Route::get('/articles', [FrontEndController::class,'articles'])->name('articles');
    Route::get('/article/{article}', [FrontEndController::class,'article_show'])->name('article.show');
    Route::get('/donate', [FrontEndController::class,'donate'])->name('donate');
    Route::get('/contact', [FrontEndController::class,'contact'])->name('contact');
    Route::post('/contact', [FrontEndController::class,'contact_post'])->name('contact.store')->middleware('throttle:2,1');
    Route::get('/hire', [FrontEndController::class,'hire'])->name('hire');
});

Route::get('/manifest.json', [FrontFileController::class,'manifest_json'])->name('manifest_json');
Route::get('/robots.txt', [FrontFileController::class,'robots_txt'])->name('robots_txt');

Route::name('admin.')->prefix('admin')->middleware(['auth'])->group(function () {
    Route::post('upload-image',[AdminController::class,'upload_image'])->name('upload-image');
    Route::get('/', function () { return view('admin.index'); })->name('dashboard');
    Route::resource('portfolios', PortfolioController::class);
    Route::post('portfolios/image-store',[PortfolioController::class,'image_store'])->name('portfolio.image-store');
    Route::post('portfolios/image-delete',[PortfolioController::class,'image_delete'])->name('portfolio.image-delete');
    Route::resource('faqs', FaqController::class);
    Route::resource('clients', ClientController::class);
    Route::resource('articles', ArticleController::class);
    Route::resource('contact', ContactController::class);
    Route::get('settings', [AdminController::class,'settings'])->name('settings');
    Route::post('settings', [AdminController::class,'settings_update'])->name('settings.update');
    Route::post('notifications/seen',[AdminController::class,'seen_notifications'])->name('notifications.seen');
});