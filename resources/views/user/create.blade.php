@extends('layout')

@section('content')
    <div class="card">
        <div class="card-header text-center font-weight-bold">
            <h1>{{ __('user.create.new_user') }}</h1>
        </div>
        <div class="card-body">
            <form id="add-user-form" method="post" action="{{ url('user') }}">
                @csrf
                <div class="row">
                    <div class="col">
                        <label for="name" class="form-label h4">{{ __('user.all.username') }}</label>
                        <input type="text" id="name" class="form-control" name="name">
                    </div>
                    <div class="col">
                        <label for="email" class="form-label h4">{{ __('user.all.email') }}</label>
                        <input type="email" id="email" class="form-control" name="email">
                    </div>
                    <div class="col">
                        <label for="firstname" class="form-label h4">{{ __('user.all.firstname') }}</label>
                        <input type="text" id="firstname" class="form-control" name="firstname">
                    </div>
                    <div class="col">
                        <label for="lastname" class="form-label h4">{{ __('user.all.lastname') }}</label>
                        <input type="text" id="lastname" class="form-control" name="lastname">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="password" class="form-label h4">{{ __('user.create.password') }}</label>
                        <input type="password" id="password" class="form-control" name="password">
                    </div>
                    <div class="col">
                        <label for="password-confirmation" class="form-label h4">{{ __('user.create.repeat_password') }}</label>
                        <input type="password" id="password-confirmation" class="form-control" name="password_confirmation">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="role" class="form-label h4">{{ __('user.all.role') }}</label>
                        <select id="role" class="form-control" name="role">
                            <option value="ROLE_ADMIN">Admin</option>
                            <option value="ROLE_USER">User</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-success form-submit-btn">{{ __('user.create.add') }}</button>
                <a class="btn btn-info form-submit-btn" href="{{ url('user') }}">{{ __('user.all.users_list') }}</a>
            </form>
        </div>
    </div>
@endsection
