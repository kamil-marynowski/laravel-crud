@extends('layout')

@section('content')
    <a class="btn btn-success btn-lg" href="{{ url('/user/create') }}">{{ __('user.list.add_user') }}</a>
    <table class="table">
        <tr>
            <th>{{ __('user.list.id') }}</th>
            <th>{{ __('user.list.username') }}</th>
            <th>{{ __('user.list.email') }}</th>
            <th>{{ __('user.list.firstname') }}</th>
            <th>{{ __('user.list.lastname') }}</th>
            <th>{{ __('user.list.role') }}</th>
            <th>{{ __('user.list.active') }}</th>
            <th></th>
        </tr>
        @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->username }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->firstname }}</td>
            <td>{{ $user->lastname }}</td>
            <td>{{ $user->role }}</td>
            <td>{{ $user->active }}</td>
            <td>
                <a class="btn btn-small btn-success" href="{{ url('user/' . $user->id) }}">{{ __('user.list.show') }}</a>

                <!-- edit this shark (uses the edit method found at GET /sharks/{id}/edit -->
                <a class="btn btn-small btn-info" href="{{ url('user/' . $user->id . '/edit') }}">{{ __('user.list.edit') }}</a>
            </td>
        </tr>
        @endforeach
    </table>
@endsection
