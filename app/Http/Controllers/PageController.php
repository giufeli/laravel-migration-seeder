<?php

namespace App\Http\Controllers;

use App\Trains;
use Illuminate\Http\Request;



class PageController extends Controller
{

    public function home() {

         $trains = Trains::all();

        return view('home', compact('trains'));
    }
}
