<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Whyus;
class HomeController extends Controller
{
    public function homepage()
    {
        $about = About::all();
        $whyus = Whyus::all();
        $data =['about'=>$about,'whyus'=>$whyus];
        return view('user.homepage',$data);
    }
}
