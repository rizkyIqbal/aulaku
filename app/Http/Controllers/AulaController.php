<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AulaController extends Controller
{
    public function index()
    {
        return view('home/home');
    }
    public function tambah()
    {
        return view('home/tambah');
    }
}
