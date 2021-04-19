<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
    <div class="container">
        <a class="navbar-brand" href="/laravelpracticeapp/public/">{{config('app.name', 'Laravel Practice App')}}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                @auth
                <li class="nav-item">
                    <a class="nav-link" href="{{route('dashboard')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/laravelpracticeapp/public/posts">Blog</a>
                </li>
                @endauth
                <li class="nav-item">
                    {{-- <a class="nav-link" href="/laravelpracticeapp/public/services">Services</a> --}}
                    <a class="nav-link" href="{{route('services')}}">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('about')}}">About</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                @auth
                {{-- @if (Auth::check()) --}}
                <li class="nav-item">
                    <a class="nav-link" href="/laravelpracticeapp/public/posts/create">Create Post</a>
                </li>
                <li class="nav-item">
                    {{-- <a class="nav-link" href="javascript:void(0)">{{auth()->user()->name}}</a> --}}
                    <a class="nav-link" href="javascript:void(0)">{{Auth::user()->name}}</a>
                </li>
                <li class="nav-item">
                    <form action="/laravelpracticeapp/public/logout" method="POST">
                        @csrf
                        <button type='submit' class="btn" style="color: #9a9da0;">Logout</button>
                    </form>
                </li>
                @endauth
                @guest
                {{-- @else --}}
                <li class="nav-item">
                    <a class="nav-link" href="/laravelpracticeapp/public/register">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href={{route('login')}}>Login</a>
                </li>
                {{-- @endif --}}
                @endguest
            </ul>
        </div>
    </div>
</nav>