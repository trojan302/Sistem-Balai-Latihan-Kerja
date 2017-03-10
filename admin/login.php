<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= $url ?>node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="<?= $icon ?>">

    <!-- Custom styles for this template -->
    <link href="<?= $url ?>admin/libs/signin.css" rel="stylesheet">

  </head>

  <body>

    <div class="container">

      <?php if (isset($_GET['err'])) { ?>
            
        <div class="alert alert-danger alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true" onclick="window.location.href='<?= $url ?>admin/login'">&times;</span></button>
          <?= $_GET['err'] ?>
        </div>

      <?php } ?>

      <form class="form-signin" action="<?= $url ?>admin/prosesLogin.php" method="POST">
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