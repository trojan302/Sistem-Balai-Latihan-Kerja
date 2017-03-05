<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./libs/signin.css" rel="stylesheet">

  </head>

  <body>

    <div class="container">

      <form class="form-signin" action="prosesLogin.php" method="POST">
        <h2 class="form-signin-heading">Login As Admin</h2>
        <label class="sr-only">Email address</label>
        <input type="email" class="form-control" name="email" placeholder="Email address" required autofocus>
        <label class="sr-only">Password</label>
        <input type="password" class="form-control" name="password" placeholder="Password" required>
        <input class="btn btn-lg btn-primary btn-block" name="login" type="submit" value="Sign In.">
      </form>

    </div>
    
  </body>
</html>