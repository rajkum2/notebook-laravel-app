<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notebook;


class NotebooksController extends Controller
{
    public function index()
    {
    //Fetching all data from database
     $notebooks = Notebook::all();
    //Passing data to the view "notebooks.index"
     return view('notebooks.index',compact('notebooks'));
    }

}
