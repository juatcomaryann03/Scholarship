<?php

require 'connect.php';
require 'spn_lock.php';

 $sql = "SELECT *  FROM programs where spn_no = '$login_session';";
 
 $retval = mysqli_query($con,$sql);

 if(!$retval ) 
  {
    die("Could not get data: ".mysqli_error($con));
  }
    while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC))
      {
  
         $sql2 = "SELECT *  FROM applications where  program_id = '{$row['program_id']}'";
    
        $result = mysqli_query($con,$sql2);

   while($myrow = mysqli_fetch_array($result, MYSQLI_ASSOC))
   {
     echo 
        "  
        <tr>
                  <td class='text-center text-muted text-hover col-sm-1'>15/04/12</td>
                  <td class='text-muted text-hover col-sm-3' style='padding-bottom: 0px;'>
                  <td class='text-center text-muted text-hover col-sm-1' style='padding-bottom: 0px;'>Interview</td>
                  </td>
                   <td class='text-center text-muted text-hover col-sm-1' style='padding-bottom: 0px;'>Scholarship 1</td>
                  <td class='col-sm-2 text-center'>
                   <div class='btn-group'>
                     <button type='button'  class='btn btn-sm btn-link disabled'>accept</button>
                     <button type='button' onclick='display()' class='btn btn-sm btn-link' data-toggle='modal' data-target='#myModal'>view</button>
                   </div>   
                  </td>
                </tr>

                <script>
                        var myFile = '{$myrow['requirements']}';                    
                               function display() 
                                {
                                  document.getElementById('myFile').src = myFile;
                                                          
                                }
                </script>";
  }

  
  }
?>