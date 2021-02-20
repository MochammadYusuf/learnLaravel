<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="/image/logo_smk.png">

        <title>Login</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">

        <!-- Styles -->
        <style>

            html, body {
                background-color: #072540;
                color: #fff;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 50px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
              <div class="title mb-3">
                   Sign In
              </div>
              <form method="post" action="{{ route('postLogin') }}">
                @csrf
                <div class="form-group">
                  <label for="inputEmail" class="sr-only">Email</label>
                  <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Masukkan Email" required autofocus style="width: 500px; color: #000">  
                </div>
                <div class="form-group">
                  <label for="inputPassword" class="sr-only">Password</label>
                  <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required style="width: 500px; color: #000">
                </div>

                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign In</button>
                <p class="mt-3 mb-3 text-muted">&copy; 2021 Oleh Mochammad Yusuf Pratama</p>

              </form>
            </div>
        </div>
    </body>
</html>
