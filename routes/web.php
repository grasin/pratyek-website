<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/product', [PageController::class, 'product'])->name('product');
Route::redirect('/why-pratyek', '/about', 301);
Route::get('/features', [PageController::class, 'features'])->name('features');
Route::get('/trust', [PageController::class, 'trust'])->name('trust');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/faq', [PageController::class, 'faq'])->name('faq');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/use-cases/{slug}', [PageController::class, 'useCase'])
    ->whereIn('slug', [
        'bill-reminder-app-india',
        'warranty-tracker-india',
        'maid-salary-tracker',
        'family-organizer-india',
        'whatsapp-household-assistant',
    ])
    ->name('use-case');

Route::get('/legal/privacy-policy', [PageController::class, 'privacyPolicy'])->name('legal.privacy-policy');
Route::get('/legal/terms', [PageController::class, 'terms'])->name('legal.terms');
Route::get('/legal/dpdp', [PageController::class, 'dpdp'])->name('legal.dpdp');
