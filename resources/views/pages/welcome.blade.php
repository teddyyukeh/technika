<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="School Project">
    <meta name="author" content="Timothy Werunga">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Spectral" rel="stylesheet">

    <title>handy People | Landing Page</title>

    <style>
        /*Globals Links */
        a,
        a:focus,
        a:hover {
          color: #fff;
        }

        /* Custom default button */
        .btn-secondary,
        .btn-secondary:hover,
        .btn-secondary:focus {
          color: #333;
          text-shadow: none; /* Prevent inheritance from `body` */
          background-color: #fff;
          border: .05rem solid #fff;
        }


        /*
        * Base structure
        */

        html,
        body {
          height: 100%;
          background-color: #333;
          font-family: 'Spectral', serif;
        }

        body {
          background-image: url("http://limashandyman.com/wp-content/uploads/sites/1394/2015/06/slide-2.jpg");
          background-size: 100%;
          background-position: center;
          color: white;
          display: -ms-flexbox;
          display: flex;
          color: #fff;
          text-shadow: 0 .05rem .1rem rgba(0, 0, 0, .5);
          box-shadow: inset 0 0 5rem rgba(0, 0, 0, .5);
        }

        .cover-container {
          max-width: 42em;
        
        }


        /*
        * Header
        */
        .masthead {
          margin-bottom: 2rem;
        }

        .masthead-brand {
          margin-bottom: 0;
        }

        .nav-masthead .nav-link {
          padding: .25rem 0;
          font-weight: 700;
          color: rgba(255, 255, 255, .5);
          background-color: transparent;
          border-bottom: .25rem solid transparent;
        }

        .nav-masthead .nav-link:hover,
        .nav-masthead .nav-link:focus {
          border-bottom-color: rgba(255, 255, 255, .25);
        }

        .nav-masthead .nav-link + .nav-link {
          margin-left: 1rem;
        }

        .nav-masthead .active {
          color: #fff;
          border-bottom-color: #fff;
        }

        @media (min-width: 48em) {
          .masthead-brand {
            float: left;
          }
          .nav-masthead {
            float: right;
          }
        }


        /*
        * Cover
        */
        .cover {
          padding: 0 1.5rem;
        }
        .cover .btn-lg {
          padding: .75rem 1.25rem;
          font-weight: 700;
        }


        /*
        * Footer
        */
        .mastfoot {
          color: rgba(255, 255, 255, .5);
        }

    </style>

  </head>

  <body class="text-center">

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
        <div class="inner">
          <h3 class="masthead-brand">Handy People</h3>
          <nav class="nav nav-masthead justify-content-center">
            <a class="nav-link" href="/featured">Featured</a>
            <a class="nav-link" href="/about">About Us</a>
            <a class="nav-link" href="/contact">Contact</a>
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
          </nav>
        </div>
      </header>

      <main role="main" class="inner cover">
        <h1 class="cover-heading">Handy People Online.</h1>
        <p class="lead">Handy People is a web app that create a community where users can login to find and connect to handy men offering different expertise.</p>
        <p class="lead">
          <a href="/featured" class="btn btn-lg btn-secondary">Learn more</a>
        </p>
      </main>

      <footer class="mastfoot mt-auto">
        <div class="inner">
          <p>Handy People Online, by <a href="https://twitter.com/TedYukeh">@Timothy Werunga</a>.</p>
        </div>
      </footer>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
