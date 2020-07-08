<?php

if(isset($_POST['btn'])){
require './class/application.php';
$obj_app = new Application();
$obj_app->save_student_info($_POST);
$obj_app->send_email();


}
 ?>


<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="assets/img/favicon.ico">
	
	<title>TGG ONLINE CLASS</title>

       <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
	
	<!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    
    <link href="assets/css/fontawesome.min.css" rel="stylesheet">
    <link href="assets/css/all.min.css" rel="stylesheet">

 
       <!-- Custom CSS -->
    <link href="assets/css/custom.css" rel="stylesheet">
     <!-- Datepicker CSS-->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
      <!-- Select Option CSS-->
 
 <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker({
      dateFormat: "yy-mm-dd",
      changeMonth: true,
      changeYear: true,
      yearRange: '1980:2010'
    });
    $( "#format" ).on( "change", function() {
      $( "#datepicker" ).datepicker( "option", "dateFormat", $( this ).val() );
    });
  } );
  </script>


	</head>
    <body>
	<!-- Section Header
    ===============================-->
    <header class="site-header" role="banner">
        <!-- NAVBAR
        ================================================== -->
        <div class="navbar-wrapper">
            
            <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand  " href="/"><img src="assets/img/tgg_logo.jpg" height="50px" width="60px" style="margin-top: -14px" alt="TGG ONLINE CLASS" ></a>
                    </div>
                    <div class="navbar-collapse collapse manual_nav">
                        <ul class="nav navbar-nav navbar-right">
                            
                            <li  ><a href="index.html">Home</a></li>
                            <li><a href="overview.html">Overview</a></li>
                            <li ><a href="e-learning.html">e-learning</a></li>
                            <li><a href="curriculum.html">Curriculum</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                            <li ><a class="btn-sm btn-info nav-entry" href="entry.html">Entry</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        
        </div>
    	
    </header>
            <!-- Entry content
    ================================================== -->
    <section class="entry" style="padding: 80px 0px 50px 0px">
      <div class="container">
        <div class="row entry-content">
             <div class="col-md-5">
              <div class=""></div>
          </div>
          <div class="col-md-7 bg-color" style="padding: 20px 20px 50px 20px;">
            <h3>
                <?php
                if (isset($message)) {
                    echo $message;
                    unset($message);
                }
                ?>
            </h3>
              <div class="entry-form">
                  <h2>Please Enter your Information</h2>
                    <form action="" method="post">
                        <h3 style="color: #149e8f">Entry Form: </h3>
                       <div class="form-group">
                      <label></label>
                      <input type="text" name="s_name" class="form-control" required="" placeholder="Full Name" > 
                       </div>

                       <div class="form-group ">
                            <select name="s_gender" class="gender selectpicker"  >
                                    <option disabled="disabled" selected="selected" >Gender</option>
                                    <option >Male</option>
                                    <option>Female</option>
                                    <option>Other</option>
                                </select>
                       </div>

                        <div class="form-group">
                          <label></label>
                      <input type="text" name="s_dob" class="form-control " id="datepicker" required="" placeholder="Date of Birth (YY/MM/DD)" > 
                       </div>

                        <div class="form-group">
                           <label></label>
                      <input type="text" name="s_telephone" class="form-control" required="" placeholder="Telephone Number"> 
                       </div> 
                       <div class="form-group">
                           <label></label>
                      <input type="email" name="s_email" class="form-control" required="" placeholder="Email Address"> 
                       </div>
                        <div class="form-group">
                    <textarea placeholder="Your Address" name="s_address" class="form-control"></textarea>
                       </div>
            
                     <div class="text-center">
                         <button type="submit" name="btn" class="btn btn-primary">Register</button> 
                     </div>
                      
                    </form>
              </div>
          </div>
         
        </div>
      </div>
    </section>

        <!-- FOOTER
    ================================================== -->
    <footer style="background-color: black; padding: 50px 0px;">
        <div class="container myfooter" >
            <div class="col-sm-3">

             </div><!-- end col -->
            <div class="col-sm-6">
                <nav>
                    <ul class="list-unstyled list-inline">
                        <li><a href="">Home</a></li>
                        <li><a href="">Blog</a></li>
                        <li><a href="">Resources</a></li>
                        <li><a href="">Contact</a></li>
                        <li class="signup-link"><a href="">Sign up now</a></li>
                    </ul>
                </nav>
                <div class="c_icons">
                        <nav class="">
                    <ul class="list-unstyled list-inline">

                        <li><a href=""><i class="fab fa-facebook-square"></i></a></li>
                        <li><a href=""><i class="fab fa-twitter-square"></i></a></li>
                        <li><a href=""><i class="fas fa-envelope"></i></a></li>
                      
                        
                    </ul>
                </nav> 
                </div>
           
            </div><!-- end col -->
            <div class="col-sm-3">
                <p class="pull-right">&copy; TGG</p>
            </div><!-- end col -->
        </div><!-- container -->
    </footer>


  
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" rossorigin="anonymous"></script>


</body>
</html>