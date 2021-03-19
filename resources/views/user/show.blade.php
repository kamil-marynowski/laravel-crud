@extends('layout')

@section('content')
    <h1>{{ $user->name }}</h1>
    <a href="{{ url('user') }}" class="btn btn-info menu-btn">{{ __('user.all.users_list') }}</a>
    <a href="{{ url('user/' . $user->id . '/edit') }}" class="btn btn-warning menu-btn">{{ __('user.all.edit') }}</a>
    <table class="table table-bordered table-striped">
        <tr>
            <th>{{ __('user.all.email') }}</th>
            <td>{{ $user->email }}</td>
        </tr>
        <tr>
            <th>{{ __('user.all.username') }}</th>
            <td>{{ $user->name }}</td>
        </tr>
        <tr>
            <th>{{ __('user.all.firstname') }}</th>
            <td>{{ $user->firstname }}</td>
        </tr>
        <tr>
            <th>{{ __('user.all.lastname') }}</th>
            <td>{{ $user->lastname }}</td>
        </tr>
        <tr>
            <th>{{ __('user.all.role') }}</th>
            <td>{{ $user->role }}</td>
        </tr>
        <tr>
            <th>{{ __('user.all.active') }}</th>
            <td>
                @if($user->active)
                    <span class="active-txt">{{ __('user.all.yes') }}</span>
                @endif
            </td>
        </tr>
    </table>
@endsection
