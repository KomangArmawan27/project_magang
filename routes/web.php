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


// Admin Siswa
Route::prefix('admin')->group(function () {
    Route::get('/', function () { return redirect('/admin/siswa'); });

    Route::get('/siswa', function () {
        return view('tables.siswa');
    });
    
    Route::get('/add-siswa', function () {
        return view('forms.siswa');
    });
    
    Route::get('/update-siswa/{nis}', function () {
        return view('forms.siswa');
    });
});

// Siswa
Route::get('/', function () {
    return view('index');
});
