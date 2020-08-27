@extends('layout')
@section('title','profile')
@section('content')
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <img src="../images/image.jpg" alt="" class="img-rounded img-responsive" />
                    </div>
                    <div class="col-sm-6 col-md-8">
                        
                        <h1>{{ Auth::user()->name }}</h1>
                 
                        <p>
                            <i class="glyphicon glyphicon-envelope"></i>{{ Auth::user()->email }}
                        </p>
                        <p>DOB: 24-mar-1998</p>
                       
                        <!-- Split button -->
                        <div class="btn-group">
                            <a href="" class="btn btn-primary">change</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection