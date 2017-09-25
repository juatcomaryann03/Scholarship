<?php
    require 'std_lock.php';
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
							<a href="index.php">
								<h1><span>Find</span>Scholar</h1>
							</a>
						</div>
					</div>
					
					<div class="navbar-collapse collapse">							
						<div class="menu">
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation"><a href="std_home.php">Home</a></li>
													
								<li role="presentation"><a href="std_notification.php">Notifications</a></li>
								<li role="presentation"><a href="std_profile.php">Profile</a></li>
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
	
	<section id="blog" class="container">
        <div class="blog">
            <div class="row">
                 <div class="col-md-8" style="padding: 10px;">
                    <div class="blog-item">
						<span class="col-md-12" style="border-bottom: 1px solid #CCC;float:left;padding-bottom: 10px;margin-bottom:50px;">
							<img src="" style="height: 150px;width: 150px;border: 1px solid green;float: left;"/>
									<h1 style="color: black;margin-left: 20px;float:left;padding-top: 80px;">ABC Scholarship Program</h1>
							</span>
							
                        <div class="row">
                                
                            <div class="col-xs-12 col-sm-10 blog-content">
                                <label class="label label-primary label-md">Pin Post</label>
                                <h4>Requirements</h4>
                                <p>Something here!!!</p>
                                <a class="btn btn-primary readmore">Read More <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>    
                    </div><!--/.blog-item-->
                </div><!--/.col-md-8-->

                <aside class="col-md-4">
                    <div class="widget search">
                        <form role="form">
                            <input type="text" class="form-control search_box" autocomplete="off" placeholder="Search Here">
                        </form>
                    </div><!--/.search-->
    				
    				<div class="widget categories">
                        <h3>Recent Updates</h3>
                        <div class="row">
                            <div class="col-sm-12" style="max-height: 340px;overflow:auto;">
                                <div class="single_comments">
                                    <img src="assets/images/blog/avatar3.png" alt=""  />
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do </p>
                                    <div class="entry-meta small muted">
                                        <span>By <a href="#">Alex</a></span>
                                    </div>
                                </div>
                               
                                
                            </div>
                        </div>                     
                    </div><!--/.recent comments-->
    			</aside>  
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