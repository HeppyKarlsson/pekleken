<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{route('home.index')}}">Pekleken.se</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="{{route('home.index')}}">Hem</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">YouTube <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('youtube.nellie')}}">Toy Dolls - Nellie the elephant</a></li>
                        <li><a href="{{route('youtube.police')}}">The Police - Roxanne</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                {{--
                <li><a href="../navbar/">Default</a></li>
                <li><a href="../navbar-static-top/">Static top</a></li>
                <li><a href="./">Fixed top <span class="sr-only">(current)</span></a></li>
                --}}
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>