<?php

namespace App\Http\Controllers;

use App\Models\ModelUtilizatori;
use Illuminate\Http\Request;

class DeleteUtilizatorController extends Controller
{
    public function __invoke($id)
    {

        $utilizator = ModelUtilizatori::where("id", $id)->first();
        $utilizator->delete();


        return redirect()->route("ShowAllUtilizatori");
//        $elem = Modelul::findOrFail($post);
//        $elem->delete();
//        return redirect()->route("controller1.posts");
    }
}
