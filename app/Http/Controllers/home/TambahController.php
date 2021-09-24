<?php

namespace App\Http\Controllers;

use App\Models\TambahController;
use Illuminate\Http\Request;

class TambahController extends Controller
{
    public function create()
    {
        return view('/');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
        ]);

        $user = Tambah::create([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return redirect('/');
    }
}
