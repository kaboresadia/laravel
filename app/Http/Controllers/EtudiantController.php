<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;


class EtudiantController extends Controller
{

    public function afficherListe()
    {
        $etudiants = Etudiant::all(); 
        return view('liste', compact('etudiants'));
    }

    public function modifier($id)
    {
        $etudiant = Etudiant::find($id); 
        return view('modifier',  compact('etudiant'));
    }
    
    public function update(Request $request ,$id)
    {
        $etudiants = Etudiant::find($id); 
       
        $etudiants->nom = $request->input('nom');
        $etudiants->prenom = $request->input('prenom');
        $etudiants->email = $request->input('email');
        $etudiants->telephone = $request->input('telephone');
        $etudiants->save();

        return redirect('liste')->with('status', 'Votre compte a bien été créé.');
    }



    public function supprimerListe()
    {
        $etudiants = Etudiant::all(); 
        return view('supprimer/{id}', compact('etudiants'));
    }


    public function detailListe()
    {
        $etudiants = Etudiant::all(); 
        return view('detail/{id}', compact('etudiants'));
    }


    public function registerForm()
    {
        return view('welcome');
    }

    public function enregistrement(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'telephone' => 'required',
            'email' => 'email|required|unique:etudiants',
        ]);

        $etudiant = new Etudiant();
        $etudiant->nom = $request->input('nom');
        $etudiant->prenom = $request->input('prenom');
        $etudiant->email = $request->input('email');
        $etudiant->telephone = $request->input('telephone');
        $etudiant->save();

        return redirect('/welcome')->with('status', 'Votre compte a bien été créé.');
    }
}
