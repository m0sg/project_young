<nav class="navbar">
    <div class="container">
        <div class="navbar-header">

            <!-- Mobile Toggle -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- / Mobile Toggle -->

            <!-- Logo  -->
            <h1 class="logo">
                <a href="#">Программа "Молодняк"</a>
            </h1>
            <!-- / Logo  -->
        </div>

    @if (isset($menu))
        <!-- Navbar -->
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    @foreach($menu as $item)
                        <li><a href="/#{{ $item['alias'] }}">{{ $item['title'] }}</a></li>
                    @endforeach
                </ul>
            </div>
            <!-- / Navbar -->

        @endif

    </div>
</nav>