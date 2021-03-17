@extends('layout')

@section('content')
    <h1>Showing {{ $user->username }}</h1>
    <tr>
        <th>email</th>
        <td>{{ $user->email }}</td>
    </tr>
@endsection
