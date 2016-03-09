<?php
   include 'init.php';
   include('./header.php'); 
   if(!empty($_SESSION['user_type']) && $_SESSION['user_type'] =='custom'){
      header('location: ./Event.php', true, 302);ob_end_flush();exit;
      //echo  '<META http-equiv="refresh" content="0;URL=./Event.php">';
   }else if(!empty($_SESSION['user_type']) && $_SESSION['user_type'] =='facbook'){
      header('location: ./Events.php', true, 302);ob_end_flush();exit;
     //echo  '<META http-equiv="refresh" content="0;URL=./Events.php">';
   }else{
   ?>
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
                     <li ><a href="#" id="web_login">   Login</a></li>
                     <li ><a href="#" id="head_start">  Sign up</a></li>
                  </ul>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-8 ">
                  <h1 class="heading">Live Voting with smartphone during presentation</h1>
                  <h3 class="small-heading">Create interactive web-based presentation</h3>
                  <input type="button" value="Let's start !!" id="start" class="start_button hidden-xs hidden-sm hidden-md">
               </div>
               <!-- signup code starts here -->
               <div class="col-lg-4  signup_login_panel hidden-lg visible-xs visible-sm visible-md">
                  <form id="signup_login_form" class="form-inline">
                     <div class="row">
                        <input type="button" value="Facebook" id="facebook_login_signup" class="facebook_button" onClick="login();"><br/>
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
               <!-- signup code ends here -->
               <!-- login code starts here -->
               <div class="col-lg-4  login_panel hidden-lg hidden-xs hidden-sm hidden-md">
                  <form id="login_form" class="form-inline">
                     <div class="row">
                        <input type="button" value="Facebook" id="facebook_login" class="facebook_button"><br/>
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
                        <input type="button" value="Login" id="custom_web_login" class="signup_button"><br/>
                     </div>
                  </form>
               </div>
               <!-- login code ends here -->
            </div>
            <div class="row">
               <input type="button" value="Go Vote!!" id="vote" class="vote_button ">
            </div>
         </div>
      </div>
   </div>
   <div class="use">
      <div class="wrapper2">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 pull-left">
                  <h1 class="heading2">Real-time voting<br/><span style="color:#00a5bd;">to engage your participants.</span></h1>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4 col-sm-4  col-xs-9 pull-left">
                  <img title="Ask a question" src="https://d1rp2jn8dkvrz.cloudfront.net/assets/how-it-works-1-8ea71b3a390eefa0e97de9f290fe157b.png" class="img-responsive margin-img" alt="Type in the question you want to ask">
                  <h3 class="header3">
                     <span class="border-circle">
                     1
                     </span>
                     Ask a question
                  </h3>
                  <p class="color-p">Sign up on the web and write the question you want to ask. You can start from scratch or use one of our best practice examples.</p>
               </div>
               <div class="col-md-4 col-sm-4 col-xs-9 pull-left">
                  <img title="The voting view" src="https://d1rp2jn8dkvrz.cloudfront.net/assets/how-it-works-2-dfa362b86b8b1af0c9c35adad0b3b8c2.png" class="illu img-responsive center-block" alt="The audience votes on your question">
                  <h3 class="header3">
                     <span class="border-circle">
                     2
                     </span>
                     The audience votes
                  </h3>
                  <p class="color-p">Your audience goes to the voting website, enters the code for your presentation and votes. No installation or setup needed.</p>
               </div>
               <div class="col-md-4 col-sm-4  col-xs-9 pull-left">
                  <img title="The results of your question" src="https://d1rp2jn8dkvrz.cloudfront.net/assets/how-it-works-3-269795c85cc865f9fe3834edbf69d4db.png" class="illu img-responsive center-block" alt="The votes gathered are shown in real-time">
                  <h3 class="header3">
                     <span class="border-circle">
                     3
                     </span>
                     See the result in real-time
                  </h3>
                  <p class="color-p">The result will be displayed in real-time as the votes come in. Of course you can also hide the results until everybody is finished.</p>
               </div>
            </div>
         </div>
      </div>
   </div>
   <footer>
      <div class='container foot'>
         <nav>
            <div class='row footer'>
               <div class='col-md-4'>
                  <ul>
                     <li>
                        <a href='./'>Home</a>
                     </li>
                     <li>
                        <a href='/login'>Login</a>
                     </li>
                     <li>
                        <a href='/plans'>Pricing</a>
                     </li>
                     <li>
                        <a href='/features'>Features</a>
                     </li>
                     <li >
                        <a href='/powerpoint'>PowerPoint plug-in</a>
                     </li>
                     <li>
                        <a href='/why'>Why Surveyobi</a>
                     </li>
                  </ul>
               </div>
               <div class='col-md-4'>
                  <ul>
                     <li>
                        <a href='/support-faq'>Support & FAQ</a>
                     </li>
                     <li>
                        <a href='/support-faq#ideas'>What to build next?</a>
                     </li>
                     <li>
                        <a href='/jobs'>Work with us</a>
                     </li>
                     <li>
                        <a href='/the-team'>The team</a>
                     </li>
                     <li>
                        <a href='/contact'>Contact us</a>
                     </li>
                     <li>
                        <a href='/press'>Press</a>
                     </li>
                  </ul>
               </div>
               <div class='col-md-4'>
                  <ul>
                     <li>
                        <a href='/workshops'>Workshops</a>
                     </li>
                     <li>
                        <a href='/meetings'>Meetings</a>
                     </li>
                     <li>
                        <a href='/events'>Events</a>
                     </li>
                     <li>
                        <a href='/conferences'>Conferences</a>
                     </li>
                     <li>
                        <a href='/education'>Education</a>
                     </li>
                  </ul>
               </div>
            </div>
         </nav>
         <div class='row'>
            <div class='col-md-4'>
               <ul class='social-links'>
                  <li>
                     <a href='https://twitter.com/'>
                     <i class="fa fa-twitter fa-lg"></i>
                     </a>
                  </li>
                  <li>
                     <a href='https://www.facebook.com/'>
                     <i class="fa fa-facebook fa-lg"></i>
                     </a>
                  </li>
                  <li>
                     <a href='https://www.linkedin.com/company/'>
                     <i class="fa fa-linkedin fa-lg"></i>
                     </a>
                  </li>
               </ul>
            </div>
         </div>
         <div class='row'>
            <div class='col-md-4'>
               <div class="scale">
                  <p>
                     <a href='/terms'>Terms & Conditions</a>
                  </p>
                  <br>
               </div>
            </div>
         </div>
      </div>
   </footer>
   <?php include("./footer.php");
   }?>