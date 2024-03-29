<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.home');
});


Route::get('gioi_thieu',function(){
    return view('pages.gioi_thieu');
})->name('gioi_thieu');

Route::get('tuyen_dung', function () {
    return view('pages.tuyen_dung');
})->name('tuyen_dung');


Route::get('lien_he',function(){
    return view('pages.lien_he');
})->name('lien_he');

Route::get('khach_hang',function(){
    return view('pages.khach_hang');
})->name('khach_hang');


Route::get('tin_tuc',function(){
    return view('pages.tin_tuc');
})->name('tin_tuc');


Route::get('san_pham',function(){
    return view('pages.san_pham');
})->name('san_pham');

Route::get('dich_vu',function(){
    return view('pages.dich_vu');
})->name('dich_vu');

Route::get('chuyen_de',function(){
    return view('pages.chuyen_de');
})->name('chuyen_de');
    
Route::get('download',function(){
    return view('pages.download');
})->name('download');
    