<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FrontFileController;


require __DIR__.'/auth.php';


// front end pages

Route::name('front.')->group(function () {
    Route::get('/', [FrontEndController::class,'index'])->name('index');
    Route::get('/portfolios', [FrontEndController::class,'portfolios'])->name('portfolios');
    Route::get('/clients', [FrontEndController::class,'clients'])->name('clients');
    Route::get('/articles', [FrontEndController::class,'articles'])->name('articles');
    Route::get('/donate', [FrontEndController::class,'donate'])->name('donate');
    Route::get('/contact', [FrontEndController::class,'contact'])->name('contact');
    Route::get('/hire', [FrontEndController::class,'hire'])->name('hire');
});





// files
Route::get('/manifest.json', [FrontFileController::class,'manifest_json'])->name('manifest_json');
Route::get('/robots.txt', [FrontFileController::class,'robots_txt'])->name('robots_txt');



// admin dashboard
Route::get('/admin', function () { return view('admin.index'); })->name('admin');


