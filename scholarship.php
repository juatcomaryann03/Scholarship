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


<div class="modal fade product_view" id="product_view">
    <div class="modal-dialog" style="min-width: 800px;min-height:300px;">
        <div class="modal-content">
            <div class="modal-header">
                <a href="#" data-dismiss="modal" class="class pull-right"><span class="">x</span></a>
                <h3 class="modal-title">Sponsor Information</h3>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4 product_img">
                        <img src="" id="myImage" style="" class="img-responsive">
                    </div>
                    <div class="col-md-8 product_content">

                        <h5><strong>Name  &nbsp&nbsp&nbsp&nbsp&nbsp: &nbsp </strong> <span id="myName"></span></h5>
                        <h5><strong>Location : &nbsp</strong> <span id="myLoc"></span></h5>
                        <h5><strong>Grant &nbsp&nbsp: &nbsp</strong> <span id="myContact"></span></h5>
                        <h5><strong>Status&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: &nbsp</strong> <span id="myEmail"></span></h5>
                        
                        <div class="btn-ground">
                        <form method="get" action="redirect.php">
                            <input type="hidden" id="program_id" name="program_id" style="color: #000"></input>
                            <button type="submit"  class="btn btn-primary btn-xs">Apply</button>
                       </form>
                       <form method="get" action="std_more_profile.php">
                         <input type='hidden' id="program_id2" name="program_id"/>
                         <button type='submit' class='btn btn-primary btn-xs' style='width: 100px;'>View More..</button></a>
                      </form>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




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
	
	<section id="portfolio">	
        <div class="container">
            <div class="center col-md-8 col-md-offset-2" style="margin-top: 40px;">
               <form  method="get" action="scholarship.php">
                 <div class="input-group">
                   <input type="text" name="searchz" class="form-control input-lg col-md-4" placeholder="Search">
                       <div class="input-group-btn">
            <button class="btn btn-lg btn-primary" type="submit" style="margin-top: 0px;padding: 11px;">Search</button>
                       </div>
                    </div>
               </form> 
            </div>
		</div>
            <div class="center">
               <p><h2>SPONSOR SCHOLARSHIPS</h2></p>
            </div>

		<div class="container" style=" margin: auto;padding-left: 150px;margin-top: 20px;min-height: 300px;  ">
            <div class="" >
                <div class="portfolio-items" >
                    
                  <?php 
                        require 'scholarship_script.php';
                   ?>

            </div>
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