<?php

use Illuminate\Support\Facades\Route;

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
    return view('home', [
        "title" => "Beranda",
        "name" => "Tsania Ursila Razani",
        "email" => "tsaniashella@it.student.pens.ac.id"
    ]);
});

Route::get('/data', function () {
    return view('data', [
        "title" => "Data Pengumuman",
        "name" => "Tsania Ursila Razani",
        "email" => "tsaniashella@it.student.pens.ac.id"
    ]);
});

Route::get('/pengumuman', function () {
    return view('announcement', [
        "title" => "Pengumuman",
        "name" => "Tsania Ursila Razani",
        "email" => "tsaniashella@it.student.pens.ac.id"
    ]);
});