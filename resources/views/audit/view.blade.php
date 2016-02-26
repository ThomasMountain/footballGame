@extends('app')

@section('content')

    <h2 class="page-header"> {{ $auditHaa->first_name . ' ' . $auditHaa->surname }}'s Audit Details: </h2>

    <div class="col-sm-9">
        <h3 class="page-header">Current Quarter</h3>

        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Quarter {{ $quarter }}</th>
                    <th>{{ Carbon\Carbon::create()->month($months[0])->format('M') }}</th>
                    <th>{{ Carbon\Carbon::create()->month($months[1])->format('M') }}</th>
                    <th>{{ Carbon\Carbon::create()->month($months[2])->format('M') }}</th>
                </tr>
                </thead>
                <tbody>
                @foreach($reportList as $report)
                    <tr class="{{ $report->class }}">
                        <td>{{ $report->description }}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                @endforeach

                <tr>
                    <td>Total Occurences</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                </tbody>
            </table>
        </div>
    </div>
    <div class="col-sm-3">
        <h3 class="page-header">Contest</h3>
    </div>
@stop