<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tambah;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $model = Auth::user();
        $titles = DB::table('alamat')->pluck('alamat');
        $hari = DB::table('hari')->pluck('hari');
        $jam = DB::table('jam')->pluck('jam');
        return view('home/home', ['tambah' => $titles, 'model' => $model, 'hari' => $hari, 'jam' => $jam]);
    }

    public function handleIndex(Request $request)
    {
        // match any one of the values
        // $model = new Tambah;
        $kota = $request->kota;
        $hari = $request->hari;
        $jam = $request->jam;
        $model = Auth::user();

        if (!$kota && !$hari && !$jam) {
            $hasil = Tambah::all();
        } else {
            $hasil = DB::table('tempat')->where('kota', $kota)
                ->where('hari_mulai', $hari)
                ->where('jam_mulai', $jam)
                ->get();
        }

        $hari = DB::table('hari')->pluck('hari');
        $jam = DB::table('jam')->pluck('jam');
        $tambah = DB::table('alamat')->pluck('alamat');
        return view('/home/pencarian', compact('hasil', 'model', 'tambah', 'jam', 'hari'));

        //Handle each query from index form submissions
        // $Game = Tempat::query();

        // if (Input::has('Industry_Type')) {
        //     $Game->where('Industry_Type', Input::get('Industry_Type'));
        // }
        // if (Input::has('Office_State')) {
        //     $Game->where('Office_State', Input::get('Office_State'));
        // }
        // if (Input::has('Local_Name')) {
        //     $Game->where('Local_Name', Input::get('Local_Name'));
        // }

        // return View::make('results');
    }

    // public function results(Games $game)
    // {
    //     //show search results from index form

    //     return View::make('results', compact('game'));
    // }
}
