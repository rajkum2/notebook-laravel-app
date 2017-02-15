@extends('layouts.base')
	

	@section('content')
<div class="container">
   <h2>Edit Create</h2>
<!--Form action to POST data to the store method-->
<form action="/notebooks/{{$notebook->id}}" method="POST">
	<!--Cross reference code -->
	{{csrf_field()}}
	<!--Defining the Edit method with PUT-->
	{{method_field('PUT')}}
	<div class="form-group">
	  <label for="name">Notebook Name</label>
	   <input class="form-control" type="text" name="name"> 

	</div>	
	<input class="btn btn-primary" type="submit" value="Update">
</form>
</div>

@endsection