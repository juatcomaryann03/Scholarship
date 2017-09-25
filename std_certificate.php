<?php
  
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
								<li role="presentation"><a href="std_home.php">Home</a></li>
                                <li role="presentation"><a href="std_my_scholarship.php" class="active">My Scholarships</a></li>
                                <li role="presentation"><a href="std_my_application.php">My Application</a></li>
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




		<section id="portfolio" style="min-height: 1100px; margin-top: 50px;">  
           <div class="col-md-8 col-md-offset-2" id="printme" style="border-color: 1px solid #CCC;min-height: 600px;margin-bottom: 40px;box-shadow: 0 5px 20px rgba(0, 0, 0, 0.3);">
            <h2 style="color: green; margin-top: 60px; font-family: "Times New Roman, Georgia, serif;"><center><strong>SCHOLARSHIP AWARD</center></strong></h2>
            <h3 style="margin-top: 60px;"><center>This is to certify that</center></h3>
            <h3 style="margin-top: 30px;"><center>___________________________________________</center></h3>
            <h3><center>was awarded an</center></h3>
            <h3 style="margin-top: 0px;"><center>[scholarship name]</center></h3>
            <h3 style="margin-top: 40px;"><center>by foundation/company]</center></h3>
            <h3 style="margin-top: 0px;"><center>to study [degree] at [school/university name]</center></h3>
            <h3 style="margin-top: 40px;"><center>[city],[date]</center></h3>            
            <h4 style="margin-top: 50px;"><center>_____________________________</center><h4>
            <h4 style="margin-top: 0px;"><center>Signature over printed name</center></h4>
			

 			<div class="btn-ground">
			<button class="btn btn-md btn-link col-md-offset-11 col-md-1" id="printbtn" onclick="printDiv('printme');">Print</button>

			<script type="text/javascript">
				
				function printDiv(printme) 
						{
							 var x = document.getElementById('printbtn');
							  x.style.display = 'none';
						     var printContents = document.getElementById('printme').innerHTML;
						     x.style.display = 'block';
						     var originalContents = document.body.innerHTML;
						     document.body.innerHTML = printContents;
						     window.print();
						     document.body.innerHTML = originalContents;
						}
			</script>

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