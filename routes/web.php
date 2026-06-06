<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
Route::get('/', [UserController::class, 'home'])->name('user.home');
Route::view('/dich-vu', 'user.dich-vu')->name('user.dich-vu');
Route::view('/news-concept', 'user.news-concept')->name('user.news-concept');
Route::view('/trang-phuc', 'user.trang-phuc')->name('user.trang-phuc');
Route::view('/khach-hang', 'user.khach-hang')->name('user.khach-hang');
Route::view('/blog-cuoi', 'user.blog-cuoi')->name('user.blog-cuoi');
Route::get('/dat-lich', [UserController::class, 'showDatLichForm'])->name('user.dat-lich');
Route::post('/dat-lich', [UserController::class, 'storeDatLich'])->name('user.dat-lich.store');
Route::view('/sora_bridal_ugc_policy.html', 'user.sora_bridal_ugc_policy')->name('user.sora_bridal_ugc_policy');
Route::view('/slider', 'user.slider')->name('user.slider');
Route::get('/about', function () {
    return view('user.about');
});
Route::get('/information', function () {
    return view('user.information');
});