@extends('layout')

@section('content')
    <h1>{{ __('user.create.new_user') }}</h1>

    {{ HTML::ul($errors->all()) }}
@endsection
