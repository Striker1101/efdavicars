<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\Admin\PaymentMethodController;

/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------
*/
Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::get('/products', [PagesController::class, 'product'])->name('products');
Route::get('/products/{id}', [PagesController::class, 'product_detail'])->name('product_detail');
Route::get('/checkout', [PagesController::class, 'checkout'])->name('checkout');
Route::get('/wishlist', [PagesController::class, 'wishlist'])->name('wishlist');
Route::get('/cart', [PagesController::class, 'cart'])->name('cart');
Route::get('/vote', [PagesController::class, 'vote'])->name('vote');

Route::get('/service/change', [PagesController::class, 'service'])->name('service.change');
Route::get('/service/serve', [PagesController::class, 'service'])->name('service.serve');
Route::get('/service/price', [PagesController::class, 'service'])->name('service.price');
Route::get('/service/nature', [PagesController::class, 'service'])->name('service.nature');

Route::post('/contact', [PagesController::class, 'submitContact'])->name('contact.submit');
Route::post('/review', [PagesController::class, 'submitReview'])->name('review.submit');
Route::post('/vote', [PagesController::class, 'submitVote'])->name('vote.submit');

/*
|--------------------------------------------------------------------------
| Admin Password Lock
|--------------------------------------------------------------------------
*/
Route::get('/admin/lock', fn () => view('admin.lock'))->name('admin.lock');

Route::post('/admin/unlock', function (Request $request) {
    if ($request->password === config('custom.password')) {
        session(['admin_passed' => true]);
        return redirect('/admin');
    }

    return back()->withErrors([
        'password' => 'Wrong password',
    ]);
})->name('admin.unlock');

/*
|--------------------------------------------------------------------------
| Admin Entry Point
|--------------------------------------------------------------------------
*/
Route::get('/admin', fn () =>
    redirect()->route('admin.payment-methods.index')
);

/*
|--------------------------------------------------------------------------
| Admin Protected Routes
|--------------------------------------------------------------------------
*/
Route::prefix('admin')
    ->middleware('admin.lock')
    ->name('admin.')
    ->group(function () {
        Route::resource('payment-methods', PaymentMethodController::class);
    });

/*
|--------------------------------------------------------------------------
| Admin Logout
|--------------------------------------------------------------------------
*/
Route::post('/admin/logout', function () {
    session()->forget('admin_passed');
    return redirect('/');
})->name('admin.logout');
