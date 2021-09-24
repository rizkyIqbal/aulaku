<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tambah;
use Illuminate\Support\Facades\Auth;

class DetailController extends Controller
{
    public function index($id)
    {
        // $model = Tambah::find($id);
        // return view('home.detail', compact(
        //     'model'
        // ));
        // // $titles = DB::table('alamat')->pluck('alamat');
        // // return view('home/detail');
    }

    public function show($id)
    {
        $idku = Auth::user()->id;
        $model = Tambah::find($id);
        // var_dump($idku);
        // var_dump($model);
        return view('home.detail', compact(
            'model',
            'idku'
        ));
    }
}
