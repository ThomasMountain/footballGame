@extends('admin')

@section('content')
    <h1>New User</h1>
    <hr/>

    <div class="col-sm-6 col-md-6">

{{--        {!! Form::open(['url' => 'admin/userManager']) !!}--}}

        {!! Form::open(array('url' => URL::to('/admin/userManager', array(), true) )) !!}

        @include('admin.userManager.partials.form', ['submitButtonText' => 'Add New User'])

        {!! Form::close() !!}


    </div>

@stop