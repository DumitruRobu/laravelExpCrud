<?php

namespace App\Http\Controllers;

use App\Models\ModelSubiecte;
use App\Models\ModelUtilizatori;
use App\Models\ModelUtilizatoriSubiecte;
use Illuminate\Http\Request;

class EditUtilizatorController extends Controller
{
    public function __invoke(ModelUtilizatori $id)
    {
        $subiecte = ModelSubiecte::all();

        $idurileSubiectelorUtilizatorului = ModelUtilizatoriSubiecte::where("utilizator_id", $id->id)->pluck("subiecte_id");
        $subiecteUtilizator = ModelSubiecte::whereIn("id", $idurileSubiectelorUtilizatorului )->pluck("titlu");

        return view("/edit", compact("id", "subiecteUtilizator", "subiecte"));
    }
}











