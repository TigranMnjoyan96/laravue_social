@extends('temaplates.default')


@section('content')
    <div class="row">
        <div class="col-lg-4 mx-auto">
            <h2>Registration</h2>

            <form method="POST" action="{{route('auth.signup')}}" novalidate>
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" autofocus name="email" value="{{Request::old('email' ?: '')}}" class="form-control {{$errors->has('email') ? 'is-invalid' : ''}}" id="exampleInputEmail1" aria-describedby="emailHelp">
                    @if($errors->has('email'))
                        <span class="hel-block text-danger">{{$errors->first('email')}}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="login">Login</label>
                    <input type="text" name="username" value="{{Request::old('username' ? 'vssll': '')}}" class="form-control {{$errors->has('username') ? 'is-invalid' : ''}}" id="login">
                    @if($errors->has('username'))
                        <span class="hel-block text-danger">{{$errors->first('username')}}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control {{$errors->has('password') ? 'is-invalid' : ''}}" id="exampleInputPassword1">
                    @if($errors->has('password'))
                        <span class="hel-block text-danger">{{$errors->first('password')}}</span>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary">Create Account</button>
            </form>
        </div>
    </div>

@endsection
