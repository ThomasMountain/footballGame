@extends('app')

@section('content')
    <div class="col-sm-10 col-sm-offset-1">

        <h3 class="page-header">{{ $reportInfo->description }}</h3>

        @if($reportData->count() > 0)
            {{$reportData}}
        @else
            {!! Html::bootstrapAlert('No report records found','info') !!}
        @endif

    </div>
@stop