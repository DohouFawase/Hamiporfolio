<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function Register (Request $request) {
            $validatedData = $request->validate([
                'name' => 'required|string| ',
                'email'=> 'required|string|email|unique:users', 
                'numero'=> 'required|numeric', 
                'password' => 'required|min:4|max:12|confirmed',
                'localisation' => 'required|string|',

            ]);

           $user =  User::create([
            'name' => $request->name,
            'email' => $request->email,
            'numero' => $request->numero,
            'localisation' => $request->localisation,
            'password'=> Hash::make($request->email)
           ]);
         
           Auth::login($user);

           return to_route('login')->with([
                'success' => 'Votre inscription à été une reussite'
           ]);

    }

    public function login(Request $request) 
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            # code...
            $request->session()->regenerate();
            return redirect()->intended('dashboard')->with([
                'success' => 'Bienveu dans Votre Dashborad'
            ]);
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request) 
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
     
        return redirect('/')->with([
            'success' => 'Au revoire'
        ]);
    }
}
