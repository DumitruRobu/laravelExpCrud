<?php

namespace App\Http\Controllers;

use App\Models\ModelUtilizatori;
use Illuminate\Http\Request;

class ShowAllUtilizatoriController extends Controller
{
    public function __invoke()
    {
        $totiUtilizatorii = ModelUtilizatori::all();
        return view("/utilizatori", compact("totiUtilizatorii"));
    }
}
