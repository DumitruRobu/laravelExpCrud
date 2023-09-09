<?php

namespace App\Http\Controllers;

use App\Models\ModelImputerniciri;
use App\Models\ModelSubiecte;
use App\Models\ModelUtilizatori;
use Illuminate\Http\Request;

class CreateUtilizatoriController extends Controller
{
    public function __invoke()
    {
        $subiecte = ModelSubiecte::all();
        $imputerniciri = ModelImputerniciri::all();
        return view("create", compact("subiecte", "imputerniciri"));
    }
}
