<!DOCTYPE html>
<html>
   <head>
      <title>Live polling with smartphone</title>
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="css/custom.css">
   </head>
   <body>
      <div class="home">
         <div class="wrapper">
            <div class="container">
               <div class="nav navbar navbar-default fixed_nav">
                  <div class="navbar-header">
                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                     <span class="sr-only">Toggle navigation</span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     </button>
                     <a class="navbar-brand" href="#">SurveyObi</span></a>
                  </div>
                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                     <ul class="nav navbar-nav navbar-right">
                        <li ><a href="./" >  Home</a></li>
                        <li ><a href="./pricing" >   Pricing</a></li>
                        <li ><a href="#" >   login</a></li>
                        <li ><a href="#" >  Sign up</a></li>
                     </ul>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-8 ">
                     <h1 class="heading">Live polling with smartphone during presentation</h1>
                     <h3 class="small-heading">Create interactive web-based presentation</h3>
                     <input type="button" value="Let's start !!" id="start" class="start_button hidden-xs hidden-sm hidden-md">
                  </div>
                  <div class="col-lg-4  signup_login_panel hidden-lg visible-xs visible-sm visible-md">
                     <form id="signup_login_form" class="form-inline">
                        <div class="row">
                        	 <input type="button" value="Facebook" id="facebook_login_signup" class="facebook_button"><br/>
                        	 <div class="or">or</div>
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
      </div>
      <div class="use">
      	<div class="wrapper">
      		<div class="container">
      			<div class="col-lg-8 ">
      				<h1 class="heading">Real-time voting<br/><span style="color:#00a5bd;">to engage your participants.</span></h1>
      			</div>
      		</div>
      	</div>
      </div>
      <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/bootstrap.min.js"></script>
      <script type="text/javascript" src="js/jquery.validate.js"></script>
      <script type="text/javascript" src="js/custom.js"></script>
   </body>
</html>