<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Tipstricks extends Controller
{
    public function index(){
        return view('tips-trick.main-page');
    }
}
