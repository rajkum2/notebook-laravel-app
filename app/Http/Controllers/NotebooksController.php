<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotebooksController extends Controller
{
    public function index(){
   
       return view('notebooks.index');

    }

}
