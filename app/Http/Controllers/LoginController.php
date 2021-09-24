<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Models\Pengguna;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function loginpost(Request $request)
    {
        // dd($request->all());
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('home');
        }
        echo ('gagalll');
    }

    // protected function _registerOrLoginUser($data)
    // {
    //     $user = Pengguna::where('email', '=', $data->email)->first();
    //     if (!$user) {
    //         $user = new Pengguna();
    //         $user->name = $data->name;
    //         $user->email = $data->email;
    //         $user->password = $data->password;
    //         $user->save();
    //     }

    //     Auth::login($user);
    // }

    // public function index()
    // {
    //     return view('auth/login');
    // }

    // public function create()
    // {
    //     $model = new pengguna;
    //     return view('auth.login', compact(
    //         'model'
    //     ));
    // }

    // public function store(UserRequest $request)
    // {
    //     $model = new Pengguna;
    //     $model->name = $request->name;
    //     $model->email = $request->email;
    //     $model->password = $request->password;
    //     $model->save();

    //     return redirect('home')->with('success', "Data berhasil disimpan");
    // }
}
