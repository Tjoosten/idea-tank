@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div style="margin-top: -10px;" class="page-header">
                    <h2>Update your account</h2>
                </div>

                @if(Session::has('message'))
                    {{-- TODO: Add dissmiss button --}}
                    <div class="alert alert-success">
                        {{ Session::get('message') }}
                    </div>
                @endif

                <form action="{{ route('profile.update') }}" method="POST" class="form-horizontal">
                    {{-- CSRF token --}}
                    {{ csrf_field() }}

                    {{-- Name group --}}
                    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                        <label for="name" class="col-md-2 control-label">
                            <div class="pull-left">
                                Name: <span class="text-danger">*</span>
                            </div>
                        </label>

                        <div class="col-md-4">
                            <input type="text" id="name" value="{{ $user->name }}" name="name" class="form-control" />

                            @if ($errors->has('name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    {{-- Email form-group --}}
                    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                        <label for="email" class="col-md-2 control-label">
                            <div class="pull-left">
                                Email: <span class="text-danger">*</span>
                            </div>
                        </label>

                        <div class="col-md-4">
                            <input type="email" id="email" value="{{ $user->email }}" name="email" class="form-control" />

                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>


                    {{-- Password form-group --}}
                    <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                        <label for="password" class="col-md-2 control-label">
                            <div class="pull-left">
                                New password: <span class="text-danger">*</span>
                            </div>
                        </label>

                        <div class="col-md-4">
                            <input type="password" id="password" placeholder="New password" name="password" class="form-control" />

                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>


                    {{-- Password confirmation form-group --}}
                    <div class="form-group {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
                        <label for="password_conf" class="col-sm-2 control-label">
                            <div class="pull-left">
                                Password confirmation <span class="text-danger">*</span>

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </label>

                        <div class="col-md-4">
                            <input type="password" id="password_conf" placeholder="Password confirmation" name="password_confirmation" class="form-control" />
                        </div>
                    </div>

                    {{-- Button SUBMIT & RESET --}}
                    <div class="col-md-offset-2">
                        <button type="submit" class="btn btn-success">Submit</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection