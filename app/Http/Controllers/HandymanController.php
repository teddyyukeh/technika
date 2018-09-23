<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Expert;
class HandymanController extends Controller
{
    public function getSingle($slug) {
        //fetch from db
        $expert = Expert::where('slug', '=', $slug)->first();
        //return view
        return view('handyman.single')->withExpert($expert);

    } 
}
