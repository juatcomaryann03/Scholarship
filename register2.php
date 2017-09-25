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
		<?php
			require 'nav.php';
		?>	
	</header>
	
	<div id="breadcrumb">
		<div class="container">	
			<div class="breadcrumb">							
				<li></li>			
			</div>	
		</div>	
	</div>

	
	<section id="contact-page">
        <div class="container">
         <div class="col-md-6 col-md-offset-3">
            <div class="center text-center" style="padding: 30px;border-bottom: 1px solid #ccc;">        
               		<h2>Sponsor</h2>
                	<h3 style="margin-bottom: 0px;">Register for Free</h3>	
            </div> 
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
                <div class="col-md-12">
                    <form action="spn_registration_script.php" method="get">
                            <div class="form-group">
                                   <input type="text" name="spn_name" class="form-control" placeholder="Name" style="color: #000; border: 0; border-bottom: 1px solid #2FA4E7; outline: 0;background: transparent;border-radius: 0"></input>
                            </div>
							<div class="form-group">
                                   <input type="email" name="email" class="form-control" placeholder="Email" style="color: #000; border: 0; border-bottom: 1px solid #2FA4E7; outline: 0;background: transparent;border-radius: 0"></input>
                            </div>
							<div class="form-group">
                                   <input type="text" name="username" class="form-control" placeholder="Username" style="color: #000; border: 0; border-bottom: 1px solid #2FA4E7; outline: 0;background: transparent;border-radius: 0"></input>
                            </div>
							<div class="form-group">
                                   <input type="password" name="pwd" class="form-control" placeholder="Password" style="color: #000; border: 0; border-bottom: 1px solid #2FA4E7; outline: 0;background: transparent;border-radius: 0"></input>
                            </div>
              
							
						<div class="text-center">
								<button type="submit" class="btn btn-primary btn-lg" style="width: 100%;">Submit</button>
							</div>
                    </form>                       
                </div>
            </div><!--/.row-->
            </div>
        </div><!--/.container-->
    </section><!--/#contact-page-->
	
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