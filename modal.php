<?php
  include 'connect.php';

 $sql = "SELECT *  FROM spn_info";

 $retval = mysqli_query($con, $sql);

 if(! $retval ) 
  {
    die('Could not get data: ' . mysql_error());
  }
    elseif (mysqli_num_rows($retval) < 1)
           {
                echo "<h1 class='text-center' style='color: #000;'>No Scholarship</h1>";
             }
                else
                      {

                            while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC))
                                 {
                                    $sql2 = "SELECT *  FROM spn_info where  spn_no = '{$row['spn_no']}'";
                                    
                                    $result = mysqli_query($con,$sql2);

                                   $myrow = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                  
                                  $img = $myrow['Images'];
                       
                             echo "
                                                    <div class='modal fade product_view' id='product_view'>
                                                      <div class='modal-dialog' style='min-width: 800px;min-height:300px;'>
                                                          <div class='modal-content'>
                                                              <div class='modal-header'>
                                                                  <a href='#' data-dismiss='modal' class='class pull-right'><span class=''>x</span></a>
                                                                  <h3 class='modal-title'>Scholarship Info</h3>
                                                              </div>
                                                              <div class='modal-body'>
                                                                  <div class='row'>
                                                                      <div class='col-md-4 product_img'>
                                                                          <img src='assets/images/sponsor-icon.png' style='' class='img-responsive'>
                                                                      </div>
                                                                      <div class='col-md-8 product_content'>

                                                                          <h5><strong>Name  &nbsp&nbsp&nbsp&nbsp&nbsp: &nbsp </strong> <span>51526</span></h5>
                                                                          <h5><strong>Location : &nbsp</strong> <span>51526 </span></h5>
                                                                          <h5><strong>Contact &nbsp&nbsp: &nbsp</strong> <span>51526</span></h5>
                                                                          <h5><strong>Email&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: &nbsp</strong> <span>51526</span></h5>
                                                                          
                                                                          <div class='btn-ground'>
                                                                              <a href='apply.php'><button type='button' class='btn btn-primary btn-xs'> Apply</button></a>
                                                                              <a href='spn_search_profile.php' target='spn_search_profile.php'><button type='button' class='btn btn-primary btn-xs'>Read More...</button></a>
                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                   ";
                      }
                      }


?>


  <?php

  
?>