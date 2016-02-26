@extends('app')
@section('content')

    <h3 class="page-header">Estate Agents</h3>

    Current House Details:


    {{ Auth::User()->playerDetails->accommodationDetails }}


@stop