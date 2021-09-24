<?php

namespace App\Http\Controllers;

use App\Models\Tambah;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PencarianController extends Controller
{
    public function index(Request $request)
    {
        $model = Auth::user();
        $hasil = DB::table('tempat')->get();
        // $hasil = Tambah::all();
        return view('home/pencarian', ['hasil' => $hasil, 'model' => $model]);
    }
}
