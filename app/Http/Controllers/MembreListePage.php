<?php

namespace App\Http\Controllers;

use App\Models\Membre;
use Illuminate\Http\Request;
use DateTime;
use Carbon\Carbon; // Import de Carbon

class MembreListePage extends Controller
{
    public function membre(){
        $membres = Membre::all();
        return view('liste', [
            'title' => 'Liste des membres',
            'datetime' => new DateTime(),
            //'date' => Carbon::now()->locale('fr_FR')->translatedFormat('l d F Y'), // Date formatée en français
            'membres' => $membres // On passe les données à la vue
            
        ]);

    }

    
    
    # function update
    public function edit($id)
    {
        $membre = Membre::findOrFail($id);
        return view('membres.edit', compact('membre'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email',
            'ville' => 'nullable|string|max:255',
            'pays' => 'nullable|string|max:255',
            'date' => 'nullable|date',
        ]);

        $membre = Membre::findOrFail($id);
        $membre->update($request->only(['nom', 'prenom', 'email', 'ville', 'pays', 'date']));

        return redirect()->route('membres.index')->with('success', 'Membre mis à jour avec succès.');
    }

        public function index(){
        $membres = Membre::all();
        return view('membres.index', compact('membres'));
    }
   
}
