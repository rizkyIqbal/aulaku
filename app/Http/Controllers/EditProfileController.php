<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EditProfileController extends Controller
{
    public function index()
    {
        // $titles = DB::table('alamat')->pluck('alamat');
        // return view('home/profile');
    }

    // public function edit(Request $request)
    // {
    //     return view('home.profile', [
    //         'user' => $request->user()
    //     ]);
    // }

    public function update(Request $request, $id)
    {
        // $user = Auth::user();
        // $user->name = Request::input('nama');
        // $user->email = Request::input('email');
        // $user->nohandphone = Request::input('nohandphone');
        // $user->save();
        // return view('AccountSettings/index');
        // $model = Auth::find($id);
        $model = Auth::user();
        $model->name = $request->nama;
        $model->email = $request->email;
        $model->nohandphone = $request->nohandphone;
        $model->save();

        return redirect('/')->with('success', "Data berhasil diperbaharui");
    }

    public function show($id)
    {
        $model = Auth::user();
        return view('home.profile', compact(
            'model'
        ));
    }
}
