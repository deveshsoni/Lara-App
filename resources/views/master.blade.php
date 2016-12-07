<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('favicon.ico')}}">

    <title>Sample Project</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="{{asset('css/ie10-viewport-bug-workaround.css')}}" rel="stylesheet">

    <link href="{{asset('css/blog.css')}}" rel="stylesheet">
    <link href="{{asset('css/blog.css')}}" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="{{asset('js/ie-emulation-modes-warning.js')}}"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation" ><a href="{{ url('/') }}">Home</a></li>
            <li role="presentation" ><a href="profile">Profile</a></li>
            <!--li role="presentation"><a href="#">About</a></li-->
          </ul>
        </nav>
        <h3 class="text-muted">Devesh { Laravel + Bootstrap } Project</h3>
      </div>

      <div class="jumbotron">
        @yield('header')
      </div>

      <div class="row">
              <div class="col-sm-12 blog-main">
                <div class="blog-post">
                  <h2 class="blog-post-title">@yield('title')</h2>
                  @yield('description')
                </div>
              </div>

              <div class="col-sm-12 blog-main">
                <div class="blog-post">
                  <h2 class="blog-post-title">@yield('title2')</h2>
                  @yield('description2')
                </div>
              </div>

              <div class="col-sm-12 blog-main">
                <div class="blog-post">
                  <h2 class="blog-post-title">@yield('title3')</h2>
                  @yield('description3')
                </div>
              </div>
      </div>


      <footer class="footer">
        @yield('footer')
      </footer>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="{{asset('js/ie10-viewport-bug-workaround.js')}}"></script>
  </body>
</html>
