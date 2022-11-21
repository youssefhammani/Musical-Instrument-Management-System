<?php

  include('verification.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/design.css">

    <!-- BEGIN parsley css-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/guillaumepotier/Parsley.js@2.9.2/doc/assets/docs.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/guillaumepotier/Parsley.js@2.9.2/src/parsley.css">
    <!-- END parsley css-->

    <title>Log in</title>
</head>
<body>
  <section id="bkgr-logo" class="h-100 gradient-form">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-10">
          <div class="card rounded-3 text-black">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="card-body p-md-5 mx-md-4">
  
                  <div class="text-center">
                    <img src="images/logo.png"
                    style="width: 185px;" alt="logo">
                    <h4 class="mt-1 mb-5 pb-1">Music is the voice of the soul</h4>
                  </div>
                  
                  <?php
                      if(isset($_GET["User-input-is-wrong"]))
                      {
                        echo '<div class="text-center alert alert-danger">'.$_GET["User-input-is-wrong"].'</div>';
                      }
                      else if (isset($_GET["Create-an-account"]))
                      {
                        echo '<div class="text-center alert alert-success">'.$_GET["Create-an-account"].'</div>';
                      }
                  ?>

                  <form action="verification.php" method="POST" data-parsley-validate>
                    <p>Please login to your account</p>
  
                    <div class="form-outline mb-4">
                      <!-- <label class="form-label" for="form2Example11">Username</label> -->
                      <input type="email" id="form2Example11" class="form-control" name="login-via-email"
                      placeholder="Username" aria-describedby="emailHelp" required />
                    </div>
  
                    <div class="form-outline mb-4">
                      <!-- <label class="form-label" for="form2Example22">Password</label> -->
                      <input type="password" id="form2Example22" class="form-control" name="login-with-passowrd" placeholder="passowrd" required />
                      <input type="checkbox" onclick="showPassword()"> Show Password
                    </div>
  
                    <div class="text-center pt-1 mb-5 pb-1">
                      <button id="log-in" class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" name="login" style="width: 100%;"  type="submit">Log in</button> <br>
                      <a class="text-muted" href="#!">Forgot password?</a>
                    </div>
  
                    <div class="d-flex align-items-center justify-content-center pb-4">
                      <p class="mb-0 me-2">Don't have an account?</p>
                      <a type="button" class="btn btn-outline-primary" href="signup.php">Create new</a>
                    </div>
  
                  </form>
  
                </div>
              </div>
              <div id="bg-img" class="col-lg-6 d-flex align-items-center gradient-custom-2">
                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                  <h4 class="mb-4">The music is the best</h4>
                  <p class="small mb-0">Music creates magical moments and also has the power 
                    to bring us back to those memorable times that should never be forgotten. 
                    The music is that make the world a better place.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- BEGIN jquery js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- END jquery js-->

    <!-- BEGIN parsley js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- END parsley js-->

    <script src="js/scripts.js"></script>
</body>
</html>