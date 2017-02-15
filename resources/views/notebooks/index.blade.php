
@extends('layouts.base')
            <!-- /navbar -->
            <!-- Main component for call to action -->
    @section('content')
            <div class="container text-center">
                <!-- heading -->
                <h1 class="pull-xs-left">
                    Your Notebooks
                </h1>
                <div class="pull-xs-right">
                    <a class="btn btn-primary" href="#" role="button">
                        New NoteBook +
                    </a>
                </div>

                <div class="clearfix">
                </div>
                <br>
                
                <!-- ================ Notebooks==================== -->
                <!-- notebook1 -->
                //Looping through the notebooks from database.
                @foreach($notebooks as $notebook)
                <div class="col-sm-6 col-md-3">
                    <div class="card">
                        <div class="card-block">
                            <a href="#">
                                <h4 class="card-title">
                                    {{$notebook -> name}}
                                </h4>
                            </a>
                        </div>
                        <a href="#">
                            <img alt="Responsive image" class="img-fluid" src="dist/img/notebook.jpg"/>
                        </a>
                        <div class="card-block">
                            <a class="card-link" href="#">
                                Edit Notebook
                            </a>
                            <form action="#" class="pull-xs-right5 card-link" method="POST" style="display:inline">
                                <input class="btn btn-sm btn-danger" type="submit" value="Delete">
                                </input>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
               
            </div>
            <!-- /container -->
            
@endsection