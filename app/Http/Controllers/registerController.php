<?php

namespace App\Http\Controllers;

use App\Models\User;
use \Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;


class registerController extends Controller
{
    //afficher le formulaire d inscription
    public function form_register(){
        return view('register');
    }

    // traitement inscrption
    public function form_register_post(Request $request){
        $request->validate([
            'email' => 'required | email | unique:users',
            'nom'=> 'required',
            'prenom' => 'required',
            'password' => 'required',
        ]);

        $user = new User();
        $user->email = $request->email;
        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('register')->with('status', 'Votre inscription a bien ete prise en compte');
    }
}
