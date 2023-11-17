<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    // return view('welcome');
        return view('home');
});

// Route::get("/profile",function () {
//     $nama = ' Mirza';
//     $Tgl_Lahir = ' 2003 05 26';
//     return "profile Mirza" .$nama." Lahir Pada Tanggal" .$Tgl_Lahir ;
// }) ;

// Pertemuan kedua

Route:: get('/profile', function (){
    return view('Profile');
});

Route:: get('/mahasiswa', function (){
    return view('Mahasiswa');
});

Route:: get('/home', function (){
    return view('Home');
});

Route:: get('/about', function (){
    return view('About');
});

Route:: get('/tugas', function (){
    return view('Tugas');
});

Route:: get('/tugas7', function (){
    return view('Tugas7');
});


