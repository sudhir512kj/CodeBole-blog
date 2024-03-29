
{% comment %}<div class="blog-masthead">
    <div class="container">
    <nav class="nav blog-nav">
        <a class="nav-link active" href="/">Home</a>
        <a class="nav-link" href="#">New features</a>
        <a class="nav-link" href="#">Press</a>
        @if (Auth::check())
            <a class="nav-link navbar-left" href="/logout">Log Out</a>
        @endif
        
            <a class="nav-link ml-auto" href="#"></a>
    </nav>
    </div>
</div>

    <div class="container">
        <nav class="nav navbar navbar-toggleable-md navbar-inverse bg-inverse fixed-top blog-nav">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="/"><img src="/images/favicon2.png" height="55px" width="40px">CodeBole</a>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            @if (Auth::check())
                <li class="nav-item">
                    <a class="nav-link" href="/posts/create">New Post</a>
                </li>
            @endif
            <li class="nav-item">
                <a class="nav-link" href="/subscribersignup">Subscribe</a>
            </li>
            @if (Auth::check())
                @if (Auth::user()->role_id === "1")
                <li class="nav-item">
                    <a class="nav-link" href="/admin/compose">Compose</a>
                </li>
                @endif
            @endif
        </ul>
        <ul class="navbar-nav ml-auto">
            @if (Auth::check())
                <!-- <li class="nav-item navbar-left">
                </li> -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="/images/{{ Auth::user()->avatar }}" style="width:32px; height:32px; position:absolute; top:15px; left:-25px; border-radius:50%">{{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="{{ url('/profile') }}">Profile</a>
                        <a class="dropdown-item" href="/logout">Log Out</a>
                    </div>
                </li>
            @else
                <li class="nav-item active">
                    <a class="nav-link" href="/register">Register <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item active">
                    <a class="nav-link" href="/login">Log In <span class="sr-only">(current)</span></a>
                </li>

            @endif
        </ul>
        </div>
    </nav>
    </div>