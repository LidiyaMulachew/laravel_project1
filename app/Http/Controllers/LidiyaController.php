<?php

namespace App\Http\Controllers;

use App\Models\Lidiya;
use Illuminate\Http\Request;

class LidiyaController extends Controller
{
    public function index(){
        $lidiyas= Lidiya::all();

        return view("welcome", compact(["lidiyas"]));
    }
}
