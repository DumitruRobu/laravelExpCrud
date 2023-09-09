<?php

namespace App\Http\Controllers;

use App\Models\ModelUtilizatori;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke($id)
    {
        $utilizator=ModelUtilizatori::findOrFail($id);

        $data = request()->validate([
            "nume"=>"required|string",
            "gen"=>"required|string",
            "imagine"=>"required|string",
            "imputerniciri_id"=>"required|numeric",
            "subiecte"=>"required"
        ]);


        if($data['imputerniciri_id'] === "moderator"){
            $data['imputerniciri_id']=2;
        }elseif($data['imputerniciri_id'] === "administrator") {
            $data['imputerniciri_id'] = 3;
        }elseif($data['imputerniciri_id'] === "admin"){
            $data['imputerniciri_id']=3;
        }elseif($data['imputerniciri_id'] === "owner"){
            $data['imputerniciri_id']=4;
        } else $data['imputerniciri_id']=1;

        $subiecte = $data["subiecte"];


        unset($data["subiecte"]);
        $utilizator->update($data);

        $utilizator->subiecte()->sync($subiecte);
        return redirect()->route("ViewUtilizator", ["id"=>$id]);
    }
}
