<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">
          <!-- Tabs Titles -->

          <!-- Icon -->
          <div class="fadeIn first">
            <img src="{{ asset('img/icon.jpg') }}" width="100px" height="100px" class="rounded-circle" id="icon" alt="User Icon" />
          </div>

          <!-- Login Form -->
          <form action="/auth" method="POST">
            @csrf
            <input type="text" id="login" class="fadeIn second" name="email" placeholder="Email">
            <input type="text" id="password" class="fadeIn third" name="password" placeholder="Password">
            <input type="submit" class="fadeIn fourth" value="Log In">
          </form>

          <!-- Remind Passowrd -->
          <div id="formFooter">
            <a class="underlineHover" href="#">Register</a>
          </div>

        </div>
    </div>
</body>
</html>
