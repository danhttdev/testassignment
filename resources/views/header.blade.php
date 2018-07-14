<nav class="navbar navbar-default  navbar-fixed-top" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">FilmsPage</a>
    </div>

    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
            <li class="active"><a href="/">Home</a></li>
            <li><a href="/films">Films</a></li>
            <li><a href="/film/create">Add a film</a></li>
        </ul>
       
        <ul class="nav navbar-nav navbar-right ">
            @auth
                <li><a href="{{ url('/logout') }}">Logout ({{Auth::user()->name}})</a></li>
            @else
                <li><a href="/login">Login</a></li>
                <li><a href="/register">Register</a></li>
            @endauth
        </ul>
    </div>
</nav>