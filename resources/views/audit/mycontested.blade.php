@extends('app')

@section('content')
    <h3 class="page-header">My Contested Records</h3>

    @foreach($reportList as $report)
        <?php $model = 'App\\' . $report->model; ?>

        @if($model::contested()->count() > 0)

            <h5 class="page-header">{{ $report->description }}</h5>
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Client</th>
                    <th>Contested Date</th>
                    <th>View Record</th>
                </tr>
                </thead>
                <tbody>
                @foreach($model::contested()->get() as $data)
                    <tr>
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->client }}</td>
                        <td>{{ $data->contested_date->toFormattedDateString() }}</td>
                        <td><a href="/audit/record/{{ $report->model }}/{{ $data->id  }}"><i class="fa fa-external-link"></i></a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <br>
        @endif
    @endforeach
@stop