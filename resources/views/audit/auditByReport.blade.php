@extends('app')
@section('content')

        <h3 class="page-header">{{ $reportInfo->description }}</h3>


        @include("audit.partials.byReport.$reportInfo->model")

@stop