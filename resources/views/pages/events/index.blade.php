@extends('app');
@section('content')

    <h3 class="page-header">Events</h3>

    <div class="alert alert-info">
        TODO:
        <p>Add hide button -> ajax call to update DB</p>

        <p>Remove table-row from page</p>

        <p>If it is last one - update page to say: 'No Events Found'</p>

    </div>

    @if($eventList->count() > 0)
        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>Date</th>
                <th>Name</th>
                <th>Desc</th>
            </tr>
            </thead>
            <tbody>
            @foreach($eventList as $event)
                <tr>
                    <td>{{ $event->created_at }}</td>
                    <td>{{ $event->name }}</td>
                    <td>{{ $event->description }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        {{--TODO Add html--}}
        No New Events
    @endif

@stop