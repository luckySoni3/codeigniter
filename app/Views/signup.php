<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/css/style.css">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">
          <div class="card-img-left d-none d-md-flex">
            <!-- Background image for card set in CSS! -->
          </div>
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-light fs-5">Register</h5>
            <form action="/signup" method="post">

              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInputUsername" placeholder="myusername" value="<?=set_value('name') ?>" name="name">
                <label for="floatingInputUsername">Username</label>
              </div>
              <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInputEmail" placeholder="name@example.com" value="<?=set_value('email') ?>" name="email">
                <label for="floatingInputEmail">Email address</label>
              </div>

              <div class="form-floating mb-3">
                <input type="mobile" class="form-control" id="floatingPasswordConfirm" placeholder="Number" value="<?=set_value('numbder') ?>" name="number">
                <label for="floatingPasswordConfirm">Number</label>
              </div> 

              <hr>

              <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" value="<?=set_value('password') ?>" name="password">
                <label for="floatingPassword">Create Password</label>
              </div>
              <div class="d-grid mb-2">
                  <label for="cars">Choose a Usertype:</label>
                  <select name="utype" value="<?=set_value('utype') ?>" id="cars">
                  <option  value="" disabled selected hidden>Choose Option</option>  
                  <option  value="admin">Admin</option>
                  <option  value="user">User</option>
              </select>
              </div>
              <div class="d-grid mb-2">
                <button class="btn btn-lg btn-primary btn-login fw-bold text-uppercase" name="submit" type="submit">Register</button>
              </div>

              <a class="d-block text-center mt-2 small" href="<?php echo base_url() ?>/login">Have an account? Sign In</a>

              <hr class="my-4">

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
