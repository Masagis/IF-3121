<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?=base_url()?>assets/bootstrap-4.0.0-alpha.6-dist/css/bootstrap-grid.min.css">
  <!--  Make sure your always using the latest version of Bootstrap here-->
  <link rel="stylesheet" href="<?=base_url()?>assets/bootstrap-4.0.0-alpha.6-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/css/login_3.css">
</head>

<body class="sigin-body">
  <div class="container signin-container">
    <div class="row">
      <div class="col"></div>
      <div class="col-sm-12 col-md-8">
        <div class="card signin-card">
          <div class="card-block">
            <img src="<?=base_url()?>assets/img/iteraLogo.png" class="img-fluid signin-img">
            <img src="<?=base_url()?>assets/img/blank.png" class="img-fluid signin-img">
            <form class="sigin-form" action="<?=base_url()?>index.php/login/procLogin" method="post">
              <div class="form-group">
                <input type="text" name="username" class="form-control" id="emailInput" placeholder="Username">
              </div>
              <div class="form-group">
                <input type="password" name="password" class="form-control" id="passwordInput" placeholder="Password">
              </div>
              <button type="submit" name="submit" class="btn signin-btn btn-lg">Sign In</button>
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox"> Remember me<a href="#"> Need Help?</a></label>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col"></div>
    </div>

  </div>



  <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
  <script src="<?=base_url()?>assets/bootstrap-4.0.0-alpha.6-dist/js/bootstrap.min.js"></script>
</body>

</html>