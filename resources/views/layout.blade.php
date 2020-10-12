<html>
    <head>
        <title>FynTune Test-protal</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"  crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"  crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></script>
    </head>
    <body>
        <header>
            <!-- Navigation -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
                <div class="container">
                <a class="navbar-brand" href="#">Test Portal</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home
                            <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Admin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Participants</a>
                        </li>
                    </ul>
                </div>
                </div>
            </nav>
        </header>
        @yield('content')
        <footer>
           
        </footer>
    </body>
</html>