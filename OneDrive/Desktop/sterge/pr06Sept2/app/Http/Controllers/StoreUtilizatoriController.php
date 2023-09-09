<?php

namespace App\Http\Controllers;

use App\Models\ModelUtilizatori;
use App\Models\ModelUtilizatoriSubiecte;
use Illuminate\Http\Request;

class StoreUtilizatoriController extends Controller
{
    public function __invoke()
    {
        // Validate the incoming request data
        $data = request()->validate([
            'nume' => 'required|string',
            'imagine' => 'required|string',
            'gen' => 'required|string',
            'imputerniciri_id' => 'required|numeric',
            'subiecte'=>'required'
        ]);

        $subiecte = $data["subiecte"];
        unset($data["subiecte"]);
        $newUser = ModelUtilizatori::create($data);

        //v1 de storeing cu datele incluse:
//        foreach($subiecte as $s){
//            ModelUtilizatoriSubiecte::create([
//                "utilizator_id"=>$newUser->id,
//                "subiecte_id"=>$s
//            ]);
//        }
        //v2 de storeing fara datele incluse:
        $newUser->subiecte()->attach($subiecte);



        return view("/main");
    }
}
