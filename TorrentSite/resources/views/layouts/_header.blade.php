<header class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('home')}}">{{config('app.name')}}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li>
                    <div class="btn-group">
                        <a type="button" class="btn btn-success" href="{{route('download')}}">{{__(('Download'))}}</a>
                        <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu">
                            @foreach($categories as $category)
                                <li><a class="dropdown-item" href="{{route('category.show', $category)}}">{{$category->title}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </li>
                @auth
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('torrent.create')}}">Upload</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link disabled">Upload</a>
                    </li>
                @endauth
            </ul>
            @auth
                <div class="btn-group dropstart">
                    <button type="button" class="btn btn-outline-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <img class="rounded-circle me-2" width="24px" src="{{Auth::user()->avatar}}" alt="{{Auth::user()->name}}">
                        {{ Auth::user()->name }}
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">{{ __('Profile') }}</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button class="dropdown-item" type="submit">
                                    {{ __('Sign out') }}
                                </button>
                            </form>
                        </li>
                    </ul>
                    </div>
            @else
                <div>
                    <a class="btn btn-outline-success" href="{{route('login')}}">{{__(('Sign in'))}}</a>
                    <a class="btn btn-outline-success" href="{{route('register')}}">{{__(('Sign up'))}}</a>
                </div>
            @endauth
        </div>
    </div>
</header>
