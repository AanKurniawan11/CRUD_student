<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SignController extends Controller
{
    public function index()
    {
         return view('Login.vortex',[
            "title" => "Sign",
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:255',
    
          
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);
    
        User::crete($validatedData);
        $request->session()->flash('succes','Register Berhasil, Silahkan Login !');

        return redirect('/student/all');
    }
}
