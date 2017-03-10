      <div class="starter-template">
        <h1>Login Peserta Balai Latihan Kerja</h1>
        <hr>

        <?php if (isset($_GET['err'])) { ?>
        <div class="alert alert-danger alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <?php echo $_GET['err']; ?>
        </div>
        <?php } ?>
        
        <form action="http://localhost/project_blk/config/prosesLogin.php" method="POST">
            <form>
              <div class="input-group input-group-md">
                <span class="input-group-addon" id="sizing-addon">
                  <i class="glyphicon glyphicon-envelope"></i>
                </span>
                <input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon" name="username" required>
              </div>
              <br>
              <div class="input-group input-group-md">
                <span class="input-group-addon" id="sizing-addon">
                  <i class="glyphicon glyphicon-lock"></i>
                </span>
                <input type="password" class="form-control" placeholder="Password" aria-describedby="sizing-addon" name="password" required>
              </div>
              <br>
              <input type="submit" name="login" value="Login" class="btn btn-default">
            </form>
        </form>
      </div>