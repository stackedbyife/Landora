<!DOCTYPE HTML>
<html lang="en" >
<html>
<head>
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="{{ asset("login_style.css") }}">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
</head>

<body class="body">



<div class="login-page">
<div class="form" style="margin-top: -20px">
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <lottie-player
            src="https://assets4.lottiefiles.com/datafiles/XRVoUu3IX4sGWtiC3MPpFnJvZNq7lVWDCa8LSqgS/profile.json" background="transparent" speed="1" style="width: 150px; height: 150px; display: flex; justify-content: center; margin-left: 70px; margin-bottom:15px;" loop autoplay>
        </lottie-player>

        <input
            type="email" name="email" placeholder="&#xf0e0;  Email" style="font-family: 'Font Awesome 5 Free', Arial; font-weight: 900;" required
        />

        <input
            type="password" name="password" id="password" placeholder="&#xf023;  Password" style="font-family: 'Font Awesome 5 Free', Arial; font-weight: 900;"required
        />

        <i class="fas fa-eye" onclick="show()" style="cursor: pointer;"></i>
        <br><br>

        <button type="submit">LOGIN</button>
        <p class="message"></p>
    </form>

    <form class="login-form">
        <button type="button" onclick="window.location.href='{{ route('register') }}'">SIGN UP</button>
    </form>
</div>
</div>

  <script>
    function show(){
      var password = document.getElementById("password");
      var icon = document.querySelector(".fas")

      // ========== Checking type of password ===========
      if(password.type === "password"){
        password.type = "text";
      }
      else {
        password.type = "password";
      }
    };
  </script>
</body>
</html>

