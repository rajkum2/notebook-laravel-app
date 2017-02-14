<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function Test($name,$location){

    	    return $name."office location is".$location;

    }
}
