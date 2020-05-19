@extends('temaplates.default')


@section('content')
    <div class="row">
        <div class="col-lg-4 mx-auto">
            <h2>Sign in</h2>

            <form method="POST" action="{{route('auth.signin')}}" novalidate>
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" autofocus name="email" value="{{Request::old('email' ?: '')}}" class="form-control {{$errors->has('email') ? 'is-invalid' : ''}}" id="exampleInputEmail1" aria-describedby="emailHelp">
                    @if($errors->has('email'))
                        <span class="hel-block text-danger">{{$errors->first('email')}}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control {{$errors->has('password') ? 'is-invalid' : ''}}" id="exampleInputPassword1">
                    @if($errors->has('password'))
                        <span class="hel-block text-danger">{{$errors->first('password')}}</span>
                    @endif
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" name="remember" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Sign In</button>
            </form>
        </div>
    </div>

@endsection
