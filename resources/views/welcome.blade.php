<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Zi_zoo</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    </head>
    <body>
        <div class="container">

            <br><br><br>
            <!-- Jumbotron -->
      <div class="jumbotron">
            <h1>Landing Page</h1>
            {{-- <p class="lead">
                    @if (Auth::guard('web')->check()||Auth::guard('responsible')->check()||Auth::guard('student')->check())
                    <h1>You're already logged in As:</h1>
                    <ul class="nav nav-pills">
                        @if (Auth::guard('web')->check())
                        <li role="presentation"><a href=""><strong>Admin</strong></a></li>
                        @endif
                        @if (Auth::guard('responsible')->check())
                        <li role="presentation"><a href=""><strong>Responsible</strong></a></li>
                        @endif
                        @if (Auth::guard('student')->check())
                        <li role="presentation"><a href=""><strong>Student</strong></a></li>
                        @endif
                    </ul>
                    @else
                    <h4>Chose user type in order to login!</h4>
                    @endif
            </p> --}}
          </div>

          <!-- Example row of columns -->
          <div class="row">
            <div class="col-lg-6">
              <h2>Admin</h2>
              <p>This is the place for admins. </p>
              <p><a class="btn btn-primary" href="{{ route('login') }}" role="button">Login as Admin &raquo;</a></p>
            </div>


            <div class="col-lg-4">
              <h2>User</h2>
              <p>This is the place for User.</p>
            <p><a class="btn btn-primary" href="{{ url('/article')}}" role="button">Login as user &raquo;</a></p>
            </div>
          </div>


        </div>
    </body>
</html>
