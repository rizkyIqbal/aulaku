<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HistoryController extends Controller
{
    public function index(Request $request)
    {
        $model = Auth::user();
        $nama = Auth::user()->name;
        $email = Auth::user()->email;
        $titles = DB::table('alamat')->pluck('alamat');
        // $nama = $request->nam;
        // $email = $request->email;
        // $hasil = DB::table('tempat')->get();
        $hasil = DB::table('pesanan')->where('nama_pemesan', $nama)
            ->where('email', $email)
            ->get();
        // $hari = DB::table('hari')->pluck('hari');
        // $jam = DB::table('jam')->pluck('jam');
        return view('home/history', ['tambah' => $titles, 'model' => $model, 'hasil' => $hasil]);
    }
}
