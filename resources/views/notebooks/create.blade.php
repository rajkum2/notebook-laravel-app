@extends('layouts.base')
	

	@section('content')
<div class="container">
   <h2>Notebook Create</h2>
<!--Form action to POST data to the store method-->
<form action="/notebooks" method="POST">
	<!--Cross reference code -->
	{{csrf_field()}}
	<div class="form-group">
	  <label for="name">Notebook Name</label>
	   <input class="form-control" type="text" name="name"> 

	</div>	
	<input class="btn btn-primary" type="submit" value="Done">
</form>
</div>

@endsection