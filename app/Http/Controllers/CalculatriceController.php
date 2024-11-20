<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatriceController extends Controller
{
    public function afficherSite()
    {
        return view('calculatrice');
    }

    public function calculer(Request $request)
    {
        $nombre1 = (float)$request->input('nombre1');
        $nombre2 = (float)$request->input('nombre2');
        $operation = $request->input('operation');
        $resultat = null;

        switch ($operation) {
            case 'addition':
                $resultat = $nombre1 + $nombre2;
                break;
            case 'soustraction':
                $resultat = $nombre1 - $nombre2;
                break;
            case 'multiplication':
                $resultat = $nombre1 * $nombre2;
                break;
            case 'division':
                $resultat =($nombre2 != 0) ? $nombre1 / $nombre2 : 'Erreur : Division par zéro';
                break;
                break;
            default:
                $resultat = 'Opération invalide';
        }

        return view('calculatrice', compact('resultat'));
    }
}

