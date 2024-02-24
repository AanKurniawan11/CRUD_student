<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class SignController extends Controller
{
    public function index()
    {
         return view('Register.index',[
            "title" => "Sign",
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/dash');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }


    public function store(Request $request)
{
  $validatedData = $request->validate([
    'email' => 'required|email|unique:users,email',
    'name' => 'required|max:225',
    'password' => 'required|min:5|max:225',
]);

$validatedData['password'] = Hash::make($validatedData['password']);

User::create($validatedData);
$request->session()->flash('success', "Register Berhasil, silahkan login!");

return redirect('/login');

}

    
}
