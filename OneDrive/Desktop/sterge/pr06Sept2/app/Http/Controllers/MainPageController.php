<?php

namespace App\Http\Controllers;

use App\Models\ModelUtilizatori;
use Illuminate\Http\Request;

class MainPageController extends Controller
{
    public function __invoke()
    {
        return view("/main");
    }
}
