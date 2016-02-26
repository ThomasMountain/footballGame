@extends('app')
@section('content')

    <h3 class="page-header">Achievements</h3>

    <p>This page will contain information about achievements you have earned in the game</p>

    @if(Auth::User()->achievements->count() > 0)
        <div class="table-responsive">
            <table class="table table-striped">
                <tbody>
                <tr>
                    <th>Achievement Name</th>
                    <th>Earned On</th>
                </tr>
                </tbody>
                <tbody>
                @foreach(Auth::User()->achievements as $achievement)
                    <tr>
                        <td>{{ $achievement->name }}</td>
                        <td>{{ $achievement->created_at->toDayDateTimeString() }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    @else
        You have not yet earned any achievements
    @endif
@stop