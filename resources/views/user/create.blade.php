@extends('layout')

@section('content')
    <div class="card">
        <div class="card-header text-center font-weight-bold">
            <h1>{{ __('user.create.new_user') }}</h1>
        </div>
        <div class="card-body">
            <form id="add-user-form" method="post" action="{{url('user')}}">
                @csrf
                <div class="row">
                    <div class="col">
                        <label for="name" class="form-label h4">{{ __('user.create.username') }}</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="col">
                        <label for="email" class="form-label h4">{{ __('user.create.email') }}</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="col">
                        <label for="firstname" class="form-label h4">{{ __('user.create.firstname') }}</label>
                        <input type="text" class="form-control" name="firstname">
                    </div>
                    <div class="col">
                        <label for="lastname" class="form-label h4">{{ __('user.create.lastname') }}</label>
                        <input type="text" class="form-control" name="lastname">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label class="form-label h4">{{ __('user.create.password') }}</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="col">
                        <label class="form-label h4">{{ __('user.create.repeat_password') }}</label>
                        <input type="password" class="form-control" name="password_confirmation">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="role" class="form-label h4">{{ __('user.create.role') }}</label>
                        <select class="form-control" name="role">
                            <option value="ROLE_ADMIN">Admin</option>
                            <option value="ROLE_USER">User</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>


@endsection
