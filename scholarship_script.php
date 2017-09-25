<?php

include 'connect.php';
$search;
if(!empty($_GET['searchz']))
{
  $search = $_GET['searchz'];
  $sql = "SELECT *  FROM programs where program_name  LIKE '%$search%'";               
}
else
{
 $sql = "SELECT *  FROM programs";
}

 $retval = mysqli_query($con, $sql);

 if(!$retval ) 
  {
    die('Could not get data: ' . mysqli_error($con));
  }
  elseif (mysqli_num_rows($retval) < 1)
  {

    echo "
    <div class='portfolio-item col-md-10' style='margin: 20px;'>
      <h2 class='text-center col-md-12' style='color: #000;'>Sorry your keyword doesnt match to any sponsor</h2>
    </div>
    ";
  }
    elseif(mysqli_num_rows($retval) >= 1)
          {
                            $sql2 = "SELECT *  FROM programs where program_name LIKE '%$search%'";        
                            $result = mysqli_query($con,$sql2) or die(mysqli_error($con));
                            while ($myrow = mysqli_fetch_array($result, MYSQLI_ASSOC)) 
                            {
                            $img ;
                            $img = $myrow['image'];
                             echo "
                                                  <div class='portfolio-item  col-md-3' style='margin:20px;'>
                                                    <div class='recent-work-wrap text-center'>
                                                        <img src='data:image/jpeg;base64,".base64_encode($img)."' style = 'height : 200px;width : 200px;' class='img-responsive'/>
                                                        <div class='overlay'>
                                                            <div class='col-md-10 recent-work-inner text-center'>
                                                                <h5 class='text-center' style='margin-left: -5px;'><strong>{$myrow['program_name']}</strong></h5>
                                                                  <button onclick='display{$myrow['program_id']}()' type='button' class='btn btn-primary btn-sm col-md-12' data-toggle='modal' data-target='#product_view' style='margin-right:5px;' >View Profile</button>
                                                            </div> 
                                                          </div>
                                                        </div>          
                                                      </div>

                                                    <script>
                                                        var id{$myrow['program_id']} = '{$myrow['program_id']}';
                                                        var name{$myrow['program_id']} = '{$myrow['program_name']}';
                                                        var loc{$myrow['program_id']} = '{$myrow['location']}';
                                                        var contact{$myrow['program_id']} = '{$myrow['grant']}';
                                                        var email{$myrow['program_id']} = '{$myrow['isOpen']}';
                                                        var image{$myrow['program_id']} = 'data:image/jpeg;base64,".base64_encode($img)."';

                                             function display{$myrow['program_id']}() 
                                                    {
                                                          document.getElementById('myImage').src = image{$myrow['program_id']};
                                                          document.getElementById('myName').innerHTML = name{$myrow['program_id']};
                                                          document.getElementById('myLoc').innerHTML = loc{$myrow['program_id']};
                                                          document.getElementById('myContact').innerHTML = contact{$myrow['program_id']};
                                                          document.getElementById('myEmail').innerHTML = email{$myrow['program_id']};
                                                          document.getElementById('program_id').value = id{$myrow['program_id']};
                                                           document.getElementById('program_id2').value = id{$myrow['program_id']};
                                                      }

                                                    </script> ";
                            }        
                      
            }
            else 
            {
                $sql2 = "SELECT *  FROM programs";        
                            $result = mysqli_query($con,$sql2) or die(mysqli_error($con));
                            while ($myrow = mysqli_fetch_array($result, MYSQLI_ASSOC)) 
                            {
                              $img ;
                            $img = $myrow['image'];
                             echo "
                                                  <div class='portfolio-item  col-md-2' style='margin:20px;'>
                                                    <div class='recent-work-wrap text-center'>
                                                        <img src='data:image/jpeg;base64,".base64_encode($img)."' style = 'height : 200px;width : 200px;' class='img-responsive'/>
                                                        <div class='overlay'>
                                                            <div class='recent-work-inner text-center'>
                                                                <h5 class='text-center'><strong>{$myrow['program_name']}</strong></h5>
                                                                  <button onclick='display{$myrow['spn_no']}()' type='button' class='btn btn-primary btn-xs' data-toggle='modal' data-target='#product_view' style='margin-top: 0px;' >View Profile</button>
                                                            </div> 
                                                          </div>
                                                        </div>          
                                                      </div>

                                                    <script>
                                                        var id{$myrow['spn_no']} = '{$myrow['spn_no']}';
                                                        var name{$myrow['spn_no']} = '{$myrow['program_name']}';
                                                        var loc{$myrow['spn_no']} = '{$myrow['location']}';
                                                        var contact{$myrow['spn_no']} = '{$myrow['grant']}';
                                                        var email{$myrow['spn_no']} = '{$myrow['isOpen']}';
                                                        var image{$myrow['spn_no']} = 'data:image/jpeg;base64,".base64_encode($img)."';

                                 function display{$myrow['spn_no']}() 
                                                    {
                                                          document.getElementById('myImage').src = image{$myrow['spn_no']};
                                                          document.getElementById('myName').innerHTML = name{$myrow['spn_no']};
                                                          document.getElementById('myLoc').innerHTML = loc{$myrow['spn_no']};
                                                          document.getElementById('myContact').innerHTML = contact{$myrow['spn_no']};
                                                          document.getElementById('myEmail').innerHTML = email{$myrow['spn_no']};
                                                          document.getElementById('program_id').value = id{$myrow['program_id']};
                                                      }

                                                    </script> ";
            }   

}
?>