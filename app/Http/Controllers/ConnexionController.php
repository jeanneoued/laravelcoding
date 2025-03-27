<?php

namespace App\Http\Controllers;

use App\Models\Inscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ConnexionController extends Controller
{
    public function index()
    {
        return view('connexion');
    }

    public function store(Request $request)
    
    {
       $request->validate([
        'email'=>'required',
        'password'=>'required'
    ]);

   $user = Inscription::where('email', $request->email)->first();

   if($user && Hash::check($request->password, $user->password)){
    return redirect()->route('dashboard');
   }else{
    return back()->with('error', 'Email ou mot de passe incorrect');
   }
}
}
