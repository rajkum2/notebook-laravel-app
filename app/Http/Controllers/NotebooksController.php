<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notebook;


class NotebooksController extends Controller
{
    public function index()
    {
     $notebooks = Notebook::all();

     return $notebooks;
    }

}
