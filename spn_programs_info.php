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
 

<div class="modal fade product_view" id="product_view">
    <div class="modal-dialog" style="min-width: 800px;min-height:300px;">
        <div class="modal-content">
            <div class="modal-header">
                <a href="#" data-dismiss="modal" class="class pull-right"><span class="">x</span></a>
                <h3 class="modal-title">Scholarship Info</h3>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4 product_img">
                        <img src="assets/images/portfolio/recent/item2.png" style="border: 1px solid gray;border-radius: 10px;" class="img-responsive">
                    </div>
                    <div class="col-md-8 product_content">

                        <h5><strong>Name  &nbsp&nbsp&nbsp&nbsp&nbsp: &nbsp </strong> <span>51526</span></h5>
                        <h5><strong>Location : &nbsp</strong> <span>51526 </span></h5>
                        <h5><strong>Contact &nbsp&nbsp: &nbsp</strong> <span>51526</span></h5>
                        <h5><strong>Email&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: &nbsp</strong> <span>51526</span></h5>
                        
                        <div class="btn-ground">
                            <button type="button" class="btn btn-primary btn-xs"> Apply</button>
                            <button type="button" class="btn btn-primary btn-xs"> Visit Profile</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




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
                                <li role="presentation"><a href="spn_programs.php" class="active" >My Programs</a></li>
                                <li role="presentation"><a href="spn_scholars.php">My Scholars</a></li>
                                <li role="presentation"><a href="spn_interview.php" >Interview</a></li>
                                <li role="presentation"><a href="spn_request.php" >Request</a></li>
                                <li role="presentation"><a href="spn_profile.php" >Profile</a></li>
                                <li role="presentation"><a href="logout.php" >Logout</a></li>
                                                    
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
    
    <section id="portfolio" style="min-height: 700px; margin-top: 60px;">        

            <?php
              require 'spn_program_retrieve.php';
            ?>

    </section><!--/#portfolio-item-->
    

    <footer style="margin-top: 30px;padding: 0px;" class="col-md-12">
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
                    
                  function displayEditProgram() 
                  {
                    var y = document.getElementById("program");
                    var x = document.getElementById("editProgram");
                    y = y.style.display = "none";
                    x = x.style.display = "block";
                  }
                   function cancel() 
                  {
                    var x = document.getElementById("editProfile");
                    var z = document.getElementById("profile");
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