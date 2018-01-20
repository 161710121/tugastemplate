<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\data;

class testController extends Controller
{
    public function asiswa(){
    $c=data::all();        
    return view('data',compact('c')); 
}
}
