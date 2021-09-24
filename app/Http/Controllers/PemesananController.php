<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tambah;
use App\Models\User;
use App\Models\Pesanan;
use Illuminate\Support\Facades\Auth;

class PemesananController extends Controller
{
    public function index($id)
    {
        // $titles = DB::table('alamat')->pluck('alamat');
        // $model = Auth::find($id);
        // return view('home/pemesanan', compact(
        //     'model'
        // ));
    }

    public function edit($id)
    {
        $model = Auth::user();
        return view('home.pemesanan', compact(
            'model'
        ));
    }

    public function show($id)
    {
        $hall =  Tambah::find($id);
        $model = Auth::user();
        return view('home.pemesanan', compact(
            'model',
            'hall'
        ));
    }

    public function store(Request $request)
    {
        $model = new Pesanan();
        $model->nama_pesanan = $request->nama_pesanan;
        $model->nama_pemesan = $request->nama_pemesan;
        $model->nama_hall = $request->nama_hall;
        $model->email = $request->email;
        $model->nohandphone = $request->nohandphone;
        $model->totalharga = $request->totalharga;
        $model->save();

        return redirect('/')->with('success', "Data berhasil disimpan");
    }
}
