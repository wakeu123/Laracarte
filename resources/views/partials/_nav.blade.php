<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ route('root_path') }}">{{config('app.name')}}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample07">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item {{set_active_route('root_path')}}">
                    <a class="nav-link" href="{{ route('root_path') }}">Home </a>
                </li>
            <li class="nav-item {{set_active_route('about_path')}}">
                <a class="nav-link" href="{{ route('about_path') }}">About</a>
                </li>
            <li class="nav-item {{ set_active_route('contact_path') }}">
                <a class="nav-link" href="{{ route('contact_path') }}" >Contact</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="nav-item">
                    <a class="nav-link" href="#">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Register</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
