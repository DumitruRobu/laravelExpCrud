<?php

namespace App\Http\Controllers;

use App\Models\ModelSubiecte;
use App\Models\ModelUtilizatori;
use App\Models\ModelUtilizatoriSubiecte;
use Illuminate\Http\Request;

class ViewUtilizatorController extends Controller
{
    public function __invoke($id)
    {
        $utilizator = ModelUtilizatori::where("id", $id)->first();

        $subiecte = ModelUtilizatoriSubiecte::where("utilizator_id", $id)->pluck("subiecte_id");
        $subiecteleUtilizatorului = ModelSubiecte::whereIn("id", $subiecte)->pluck("titlu");

        return view("/utilizator", compact("utilizator", "subiecteleUtilizatorului"));
    }
}
