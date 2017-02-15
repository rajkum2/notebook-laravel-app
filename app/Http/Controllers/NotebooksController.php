<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notebook;

class NotebooksController extends Controller
{
	//function passing data to the index.blade.php
    public function index()
    {
    //Fetching all data from database
     $notebooks = Notebook::all();
    //Passing data to the view "notebooks.index"
     return view('notebooks.index',compact('notebooks'));
    }

    //Calling the create.blade.php page
    public function create()
    {
         return view('notebooks.create');
 
     }

     //Fetching all the data that is submitted in the form create.blade.php
     public function store(Request $request){
       //Getting data from the form into the variable
       $dataInput = $request->all();
       //Pushing the data to the Notebook model
       Notebook::create($dataInput);
       //Redirecting to notebooks page
       return redirect('/notebooks');
     
     }
   
     public function edit($id)
     {
      //Fetching the notebook as per the id
      $notebook = Notebook::where('id',$id)->first();
      return $notebook;
     }
}
