@extends('app')
@section('content')
    <h3 class="page-header">Audit By Report</h3>
    TODO:
    <ul>
        <li>Add relationship haa-record (one -> many)</li>
        <li>Add relationship store-record (one->many)</li>
        <li><s>Set count value</s></li>
        <li>Finish overdue banking - add action buttons</li>
    </ul>

    <ul class="list-group">
        @foreach($reportList as $report)
            <a href="/audit/report/{{$report->id}}" class="list-group-item">{{ $report->description }}
                <span class="badge">
                        <?php $value = '\App\\' . $report->model ?>
                    {!! $value::count() !!}
                    </span>
            </a>
        @endforeach
    </ul>
@stop