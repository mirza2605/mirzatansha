<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mahasiswaController extends Controller
{
    //Halaman Home Mahasiswa
    function Index()
    {
        return view('mahasiswa');
    }
}
