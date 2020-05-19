<nav class="navbar navbar-expand-lg navbar-dark bg-warning mb-4">
    <div class="container">
        <a class="navbar-brand" href="{{route('home')}}">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            @if(Auth::check())
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <form method="GET" action="{{route('search.results')}}" class="form-inline my-2 my-lg-0 ml-3">
                    <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </ul>
                @endif
            <ul class="navbar-nav ml-auto">
                @if(Auth::check())
                    <li class="nav-item"><a href="{{route('profile.index', ['username' => Auth::user()->username])}}" class="nav-link">{{Auth::user() -> getNameOrUserName()}}</a></li>
                    <li class="nav-item"><a href="" class="nav-link">Update Profile</a></li>
                    <li class="nav-item"><a href="{{route('auth.signout')}}" class="nav-link">Exit</a></li>
                @else
                    <li class="nav-item"><a href="{{route('auth.signup')}}" class="nav-link">Sign Up</a></li>
                    <li class="nav-item"><a href="{{route('auth.signin')}}" class="nav-link">Sign in</a></li>
                    @endif
            </ul>
        </div>
    </div>
</nav>
