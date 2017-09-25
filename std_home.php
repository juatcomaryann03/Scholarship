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
                            <a href="index.php"><h1><span>Find</span>Scholar</h1></a>
                        </div>
                    </div>
                    
                    <div class="navbar-collapse collapse">                          
                        <div class="menu">
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="std_home.php">Home</a></li>
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
    
    <section id="blog" class="container">
        <div class="blog" style="min-height: 500px;">
         <div class="center col-md-10 col-md-offset-1" style="margin-top: 20px;">

               <form method="get" action="std_home.php">
                 <div class="input-group">
                   <input type="text" name="search_home" class="form-control input-lg col-md-4" placeholder="Search">
                       <div class="input-group-btn">
            <button class="btn btn-lg btn-primary" type="submit" style="margin-top: 0px;padding: 11px;border: none">Search</button>
                       </div>
                    </div>
               </form> 

            </div>
            <div class="row">
            <div class="col-xs-14 col-sm-12 blog-content">
                 <div class="col-md-10 col-md-offset-1" style="padding: 10px;margin-top: 30px; ">
                    <div class="">
                        <div class="">
                                    <?php
                                        include 'st_home_script.php';
                                    ?>
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