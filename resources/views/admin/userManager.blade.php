@extends('admin')

@section('content')

    <h1 class="page-header">User Management</h1>

    <a href="/admin/userManager/create" class="btn btn-primary btn-lg">Create A New User</a>
    <hr>

    @if($users->count() > 0)
        <div class="table-responsive">
            <table class="table table-striped" id="allUsersTable">
                <thead>
                <tr>
                    <th>First Name</th>
                    <th>Surname</th>
                    <th>Email</th>
                    <th>Region</th>
                    <th>Admin?</th>
                    <th>Start Date</th>
                    <th>Last Login</th>
                    <th>Edit</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->first_name }}</td>
                        <td>{{ $user->surname }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->region }}</td>
                        <td>{{ $user->admin_flag }}</td>
                        <td>{{ $user->start_date->toFormattedDateString() }}</td>
                        <td>
                            @if(isset($user->last_login))
                                {{ $user->last_login->toFormattedDateString() }}
                            @else
                                Never
                            @endif
                        </td>
                        <td><a href="userManager/{{ $user->id }}/edit" class="btn btn-primary btn-sm">Edit</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    @else

        {!!  Html::bootstrapAlert('No users found', 'danger') !!}

    @endif

    <script>
        $('#allUsersTable').dataTable();
    </script>

@endsection