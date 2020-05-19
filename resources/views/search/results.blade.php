@extends('temaplates.default')


@section('content')
    <div class="row">
        <div class="col-lg-6">
            <h2>Search Results: {{Request::input('search')}}</h2>

            @if(!$users->count())
                <p>No Users</p>
            @endif
            <div class="row">
                <div class="col-lg-6">
                    @foreach($users as $user)
                        @include('user.partials.userblock')
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
