@extends('app')

@section('content')
        <h2 class="page-header">My Account</h2>

        <h4>Account Details</h4>

        {!! Html::bootstrapAlert('The information shown below is taken from the Sound Database. If this data is incorrect please contact a system administrator','info') !!}

        {!! Form::model(Auth::User(), ['method' => 'PATCH', 'action' => ['UserManagerController@update', Auth::User()->id], 'class'=>'form form-horizontal']) !!}
        <div class="form-group">
            {!! Form::label('first_name', 'First Name:', ['class'=>'control-label col-sm-4']) !!}
            <div class="col-sm-6">
                {!! Form::text('first_name', null, ['class' => 'form-control disabled', 'disabled']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('surname', 'Surname:', ['class'=>'control-label col-sm-4']) !!}
            <div class="col-sm-6">
                {!! Form::text('surname', null, ['class' => 'form-control disabled', 'disabled']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('username', 'Username:', ['class'=>'control-label col-sm-4']) !!}
            <div class="col-sm-6">
                {!! Form::text('username', null, ['class' => 'form-control disabled', 'disabled']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('email', 'Email Address:', ['class'=>'control-label col-sm-4']) !!}
            <div class="col-sm-6">
                {!! Form::email('email', null, ['class' => 'form-control disabled', 'disabled']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('start_date', 'Start Date:', ['class'=>'control-label col-sm-4']) !!}
            <div class="col-sm-6">
                {!! Form::text('start_date', null, ['class' => 'form-control disabled', 'disabled']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('region', 'Region:', ['class'=>'control-label col-sm-4']) !!}
            <div class="col-sm-6">
                {!! Form::text('region', null, ['class' => 'form-control disabled', 'disabled']) !!}
            </div>
        </div>
        {!! Form::close() !!}
@stop