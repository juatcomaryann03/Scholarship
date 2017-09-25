<?php
    session_start();
    require_once 'spn_lock.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>FindScholar</title>

    <!-- Bootstrap -->
     <link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/animate.css">
	<link href="assets/css/prettyPhoto.css" rel="stylesheet">
	<link href="assets/css/style.css" rel="stylesheet" />		
    <!-- =======================================================
        Theme Name: Company
        Theme URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
        Author: BootstrapMade
        Author URL: https://bootstrapmade.com
    ======================================================= -->
  </head>
   <body>
	<header>		
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="navigation">
                <div class="container">                 
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="navbar-brand">
                            <a href="index.php"><h1><span>Find</span>Scholar</h1></a>
                        </div>
                    </div>
                    
                    <div class="navbar-collapse collapse">                          
                        <div class="menu">
                            <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation"><a href="spn_programs.php" >My Programs</a></li>
                                <li role="presentation"><a href="spn_scholars.php" >My Scholars</a></li>
                               <li role="presentation"><a href="spn_interview.php" >Interview</a></li>
                                <li role="presentation"><a href="spn_request.php" >Request</a></li>
                                <li role="presentation"><a href="spn_profile.php" class="active" >Profile</a></li>
                                <li role="presentation"><a href="logout.php">Logout</a></li>
                                                    
                            </ul>
                        </div>
                    </div>                      
                </div>
            </div>  
        </nav>      	
	</header>
	
	<div id="breadcrumb">
		<div class="container">	
			<div class="breadcrumb">							
				<li></li>			
			</div>	
		</div>	
	</div>
	
	<section id="blog" class="container" style="min-height: 400px;">
        <div class="blog">
            <div class="row">
                 <div class="col-md-10 col-md-offset-1" style="padding: 10px;">
                    <div class="">
                        <div class="">
                            <div class="col-xs-12 col-sm-12">
									<div>
										<?php
                                            require 'spn_profile_script.php';
                                        ?>
									</div>
                            </div>
                        </div>    
                    </div><!--/.blog-item-->
                </div><!--/.col-md-8-->
            </div><!--/.row-->
        </div>
    </section><!--/#blog-->
	
	<footer>
		<div class="footer">
			<div class="container">
				<div class="social-icon">
					<div class="col-md-4">
						<ul class="social-network">
							
						</ul>	
					</div>
				</div>
				
				<div class="col-md-4 col-md-offset-4">
					
				</div>						
			</div>
			<div class="pull-right">
				<a href="#home" class="scrollup"><i class="fa fa-angle-up fa-3x"></i></a>
			</div>
		</div>
	</footer>

     <script type="text/javascript">
                    
                  function displayEditProfile() 
                  {
                    var y = document.getElementById("info");
                    var x = document.getElementById("editProfile");
                    y = y.style.display = "none";
                    x = x.style.display = "block";
                  }

                  function displayEditAbout() 
                  {
                    var x = document.getElementById("info");
                    var y = document.getElementById("editAbout");
                    x = x.style.display = "none";
                    y = y.style.display = "block";
                  }

                   function cancel() 
                  {
                    var x = document.getElementById("editProfile");
                    var y = document.getElementById("editAbout");
                    var z = document.getElementById("info");
                    x = x.style.display = "none";
                    y = y.style.display = "none";
                    z = z.style.display = "block";
                  }
        </script>
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="assets/js/jquery-2.1.1.min.js"></script>	
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.prettyPhoto.js"></script>
    <script src="assets/js/jquery.isotope.min.js"></script>  
	<script src="assets/js/wow.min.js"></script>
	<script src="assets/js/functions.js"></script>
	
</body>
</html>