<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnasayfaController extends Controller
{
    //
    public function index(){
        $ismim = "Hamit Seyrek";
        return view("deneme", compact("ismim"));
    }
}
