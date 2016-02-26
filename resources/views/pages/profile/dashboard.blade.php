@extends('app')
@section('content')

    <h3 class="page-header">My Profile</h3>

    <div class="col-sm-3">
        <div class="panel panel-default">
            <div class="panel-heading text-center"><h4>Profile Image</h4></div>
            <div class="panel-body">
                <img class="img-responsive" src="http://placehold.it/350x450">
            </div>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="panel panel-default">
            <div class="panel-heading text-center"><h4>Basic Info</h4></div>
            <div class="panel-body">
                @include('partials.userProfile')
            </div>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="panel panel-default">
            <div class="panel-heading text-center"><h4>Property Info</h4></div>
            <div class="panel-body">
                <img class="img-responsive" src="http://placehold.it/350x450">
            </div>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="panel panel-default">
            <div class="panel-heading text-center"><h4>Club Info</h4></div>
            <div class="panel-body">
                <img class="img-responsive" src="http://placehold.it/350x450">
            </div>
        </div>
    </div>


@endsection