@extends('app')

@section('content')
    <h3 class="page-header">Audit By User</h3>


    <ul>
        <li>Link to user audit page which will pull data from all reports where haa = 'user_id'</li>
        <li></li>
    </ul>

    @if($userList->count() > 0)
        <table class="table table-striped datatable">
            <thead>
            <tr>
                <th>User Id</th>
                <th>First Name</th>
                <th>Surname</th>
                <th>Region</th>
                <th>Records</th>
                <th>View</th>
            </tr>
            </thead>
            <tbody>
            @foreach($userList as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->first_name }}</td>
                    <td>{{ $user->surname }}</td>
                    <td>{{ $user->region }}</td>
                    <td>[ Num ]</td>
                    <td>
                        <a href="/audit/user/{{ $user->user_id }}" class="btn btn-primary btn-sm">View</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        {!! Html::bootstrapAlert('No Users Found','info') !!}
    @endif
@stop