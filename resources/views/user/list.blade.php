@extends('layout')

@section('content')
    @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
    @endif
    <a href="{{ url('/user/create') }}" class="btn btn-success btn-lg menu-btn">{{ __('user.list.add_user') }}</a>
    <table class="table table-borederd table-striped">
        <tr>
            <th>{{ __('user.all.id') }}</th>
            <th>{{ __('user.all.username') }}</th>
            <th>{{ __('user.all.email') }}</th>
            <th>{{ __('user.all.firstname') }}</th>
            <th>{{ __('user.all.lastname') }}</th>
            <th>{{ __('user.all.role') }}</th>
            <th>{{ __('user.all.active') }}</th>
            <th></th>
        </tr>
        @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->firstname }}</td>
            <td>{{ $user->lastname }}</td>
            <td>{{ $user->role }}</td>
            <td>
                @if($user->active)
                    <span class="active-txt">{{ __('user.all.yes') }}</span>
                @endif
            </td>
            <td>
                <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                    <a class="btn btn-small btn-info" href="{{ url('user/' . $user->id) }}">{{ __('user.list.show') }}</a>
                    <a class="btn btn-small btn-warning" href="{{ url('user/' . $user->id . '/edit') }}">{{ __('user.all.edit') }}</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-small btn-danger">{{ __('user.all.delete') }}</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection
