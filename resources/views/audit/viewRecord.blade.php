@extends('app')
@section('content')

    <h3 class="page-header">View Record</h3>


    <h4>Report: {{ $reportInfo->description }}</h4>

    <p>if contested -> show contested details</p>

    <p>Include partial file for report template</p>

    @include("audit.partials.record.$reportInfo->model")

@stop