<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ticket extends Controller
{
    public function index(){
        return view('menu');
    }
}
