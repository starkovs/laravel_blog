<header class="py-3 border-bottom">
    <div class="container">
        <div class="d-flex justify-content-between">
            <div>
                <a href="{{route('home')}}">
                    {{ config('app.name') }}
                </a>
            </div>

            <div>
                <ul class="list-unstyled d-flex">
                    <li class="ms-3">
                        <a href="{{route('blog')}}">
                            Blog
                        </a>
                    </li>
                    <li class="ms-3">
                        <a href="{{route('register')}}">
                            Sign up
                        </a>
                    </li>
                    <li class="ms-3">
                        <a href="{{route('login')}}">
                            Sign in
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</header>
