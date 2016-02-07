<!DOCTYPE html>
<html>
   <head>
      <title>Live polling with smartphone</title>
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="css/custom.css">
   </head>
   <body>
      <div class="wrapper">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 ">
                  <h1 class="heading">Live polling with smartphone during presentation</h1>
                  <h3 class="small-heading">Create interactive web-based presentation</h3>
                  <input type="button" value="Let's start !!" id="start" class="start_button">
               </div>
               <div class="col-lg-4  signup_login_panel hidden">
                  <form id="signup_login_form" class="form-inline">
                     <div class="row">
                     </div>
                     <div class="row">
                        <div class="input-group input-design">
                           <span class="input-group-addon radius-fixing"><i class="fa fa-envelope-o fa-fw fa-lg"></i></span>
                           <input class="form-control input-style" type="E-mail" name="user_email" placeholder="Enter E-mail" required />
                        </div>
                        <div class="input-group input-design">
                           <span class="input-group-addon radius-fixing"><i class="fa fa-key fa-fw fa-lg"></i></span>
                           <input class="form-control input-style" type="password" name="user_password" placeholder="Enter password" required />
                        </div>
                        <div class="input-group input-design">
                           <span class="input-group-addon radius-fixing"><i class="fa fa-user fa-fw fa-lg"></i></span>
                           <input class="form-control input-style" type="text" name="user_name" placeholder="First and Last name" required />
                        </div>
                        <input type="button" value="Sign up" id="sign_up" class="signup_button"><br/>
                        <p class="input-design agreement">By signing up you accept our terms of use</p>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/jquery.validate.js"></script>
      <script type="text/javascript" src="js/custom.js"></script>
   </body>
</html>