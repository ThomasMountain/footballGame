@extends('admin')

@section('content')
    <h1>Update User: {!! $user->first_name ,' ',$user->surname !!}</h1>
    <hr/>

    <div class="col-sm-6 col-md-6">

        {!! Form::model($user, ['method' => 'PATCH', 'action' => ['UserManagerController@update', $user->id]]) !!}

        @include('admin.userManager.partials.form', ['submitButtonText' => 'Update User'])

        {!! Form::close() !!}

        @include('errors.list')


    </div>

@stop