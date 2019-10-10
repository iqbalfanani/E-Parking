<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Sign In | E-Parking</title>
    <link href="<?php echo base_url('assets/login/css/bootstrap.min.css');?>" rel="stylesheet">
  </head>
  <body>

      <div class="container">
       <div class="col-md-4 col-md-offset-4">
         <form class="form-signin" action="<?php echo site_url('Login/authentication');?>" method="post">
           <h2 class="form-signin-heading">Please sign in</h2>
           <?php echo $this->session->flashdata('msg');?>
           <label for="username" class="sr-only">Username</label>
           <input type="username" name="username" class="form-control" placeholder="Username" required autofocus>
           <label for="password" class="sr-only">Password</label>
           <input type="password" name="password" class="form-control" placeholder="Password" required>
           <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
         </form>
       </div>
       </div> <!-- /container -->

    <script src="<?php echo base_url('assets/login/js/bootstrap.min.js');?>"></script>
  </body>
</html>
