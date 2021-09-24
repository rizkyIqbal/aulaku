<?php

namespace App\Http\Controllers;

use App\Models\Tambah;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TambahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $model = Auth::user();
        // Ambil semua row dari table pegawai.
        $kota = DB::table('alamat')->pluck('alamat');
        $hari = DB::table('hari')->pluck('hari');
        $jam = DB::table('jam')->pluck('jam');
        $tambah = Tambah::all();
        return view('home/tambah', ['kota' => $kota, 'hari' => $hari, 'jam' => $jam, 'model' => $model]);
        // $keyword = $request->keyword;
        // // $datas = Pegawai::all();
        // $datas = Tambah::where('nama', 'LIKE', '%'.$keyword.'%')
        //     ->orWhere('gelar', 'LIKE', '%'.$keyword.'%')
        //     ->orWhere('nip', 'LIKE', '%'.$keyword.'%')
        //     ->paginate();
        // $datas->withPath('pegawai');
        // $datas->appends($request->all());
        // return view('pegawai.index', compact(
        //     'datas', 'keyword'
        // ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('pegawai.create', compact(
            'model'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nama =  Auth::user()->name;
        $email =  Auth::user()->email;
        $model = new Tambah;
        $model->nama_user = $nama;
        $model->email = $email;
        $model->foto = $nama;
        $model->nama_tempat = $request->nama_tempat;
        $model->kota = $request->kota;
        $model->alamat = $request->alamat;
        $model->hari_mulai = $request->hari_mulai;
        $model->hari_selesai = $request->hari_selesai;
        $model->jam_mulai = $request->jam_mulai;
        $model->jam_selesai = $request->jam_selesai;
        $model->kapasitas = $request->kapasitas;
        $model->luas = $request->luas;
        $model->deskripsi = $request->deskripsi;
        $model->harga = $request->harga;
        // $model->foto_profile = $request->foto_profile;
        //kita akan membuat code untuk upload file
        // if($request->file('foto_profile')){
        //     $file = $request->file('foto_profile');
        //     $nama_file = time().str_replace(" ", "", $file->getClientOriginalName());
        //     $file->move('foto', $nama_file);
        //     $model->foto_profile = $nama_file;
        // }
        $model->save();

        return redirect('/pencarian')->with('success', "Data berhasil disimpan");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tambah  $tambah
     * @return \Illuminate\Http\Response
     */
    public function show(Tambah $tambah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tambah  $tambah
     * @return \Illuminate\Http\Response
     */
    public function edit(Tambah $tambah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tambah  $tambah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tambah $tambah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tambah  $tambah
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tambah $tambah)
    {
        //
    }
}
