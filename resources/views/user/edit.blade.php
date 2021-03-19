@extends('layout')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            {{ Html::ul($errors->all()) }}
        </div>
    @endif
    {!! Form::model($user, ['route' => [ 'user.update', $user->id ], 'method' => 'PUT' ]) !!}
        <div class="row">
            <div class="col">
                {!! Form::label('name', __('user.all.username'), ['class' => 'form-label h4']) !!}
                {!! Form::text('name', $user->name, ['class' => 'form-control']) !!}
            </div>
            <div class="col">
                {!! Form::label('email', __('user.all.email'), ['class' => 'form-label h4']) !!}
                {!! Form::email('email', $user->email, ['class' => 'form-control']) !!}
            </div>
            <div class="col">
                {!! Form::label('firstname', __('user.all.firstname'), ['class' => 'form-label h4']) !!}
                {!! Form::text('firstname', $user->firstname, ['class' => 'form-control']) !!}
            </div>
            <div class="col">
                {!! Form::label('lastname', __('user.all.lastname'), ['class' => 'form-label h4']) !!}
                {!! Form::text('lastname', $user->lastname, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="row">
            <div class="col">
                {!! Form::label('password', __('user.create.password'), ['class' => 'form-label h4']) !!}
                {!! Form::password('password', ['class' => 'form-control']) !!}
            </div>
            <div class="col">
                {!! Form::label('password-confirmation', __('user.create.repeat_password'), ['class' => 'form-label h4']) !!}
                {!! Form::password('password-confirmation', ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="row">
            <div class="col">
                {!! Form::label('role', __('user.all.role'), ['class' => 'form-label h4']) !!}
                {!! Form::select('role', [
                    'ROLE_ADMIN' => 'Admin',
                    'ROLE_USER' => 'User',
                ], $user->role, [ 'id' => 'role', 'class' => 'form-control']) !!}
            </div>
        </div>
        {!! Form::submit(__('user.edit.save'), [ 'class' => 'btn btn-success form-submit-btn']) !!}
        <a class="btn btn-info form-submit-btn" href="{{ url('user') }}">{{ __('user.all.users_list') }}</a>
    {!! Form::close() !!}
@endsection


