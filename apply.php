<?php
    session_start();
     require 'lock_apply.php';
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
  <script language="javascript" type="text/javascript" src="myID.js"></script>

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
                                <li role="presentation"><a href="std_my_scholarship.php">My Scholarships</a></li>
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
	
	<section id="portfolio">	
       
            <div class="center">
               <p><h2>APPLICATON FOR SCHOLARSHIP</h2></p>
            </div>

		<div class="container" style="color: #000; margin: auto;padding-left: 150px;margin-top: 20px;min-height: 500px;  ">
            <div class="col-md-10">

                <?php
                    require_once 'requirement_retrieve.php';
                ?>
                <table class="table table-bordered" style="color: black">
                    <tbody>
                    <form action="upload_apply.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="ID" value="<?php echo $_SESSION['favcolor'];?>"/>
                      <tr>
                        <td class="col-sm-3" style="padding-top: 15px;"><label>File : </label></td>
                        <td><input type="file" name="fileToUpload" id="fileToUpload" class="input input-sm form-control"></td>
                      </tr>
                      <tr>
                        <td colspan="2"><input type="submit" value="Submit" name="submit" class="form-control btn-primary"></td>
                      </tr>
                      </form>
                      
                    </tbody>
                  </table>
            </div>
        </div>
    </section><!--/#portfolio-item-->
	

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