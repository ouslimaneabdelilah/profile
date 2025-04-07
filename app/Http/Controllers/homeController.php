<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(Request $request){
        $users = [
            [
                "id" => 1,
                "nom" => "Ahmed",
                "metier" => "Développeur Web"
            ],
            [
                "id" => 2,
                "nom" => "Fatima",
                "metier" => "Designer UX/UI"
            ],
            [
                "id" => 3,
                "nom" => "Yassine",
                "metier" => "Administrateur Système"
            ]
        ];
        return view("home",compact(["users"]));
    }
}
