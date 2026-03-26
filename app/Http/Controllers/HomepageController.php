<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $sat = date("H");



        $trenutnoVrijeme = date("h:i:s");
        return view ("welcome" , compact("trenutnoVrijeme" , "sat"));
    }
}
