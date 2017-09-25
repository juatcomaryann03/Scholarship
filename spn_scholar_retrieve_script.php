<?php
  include 'connect.php';
session_start();
 $sql = "SELECT *  FROM master_list where spn_no = '$login_session'";

 $retval = mysqli_query($con, $sql);

 if(!$retval ) 
  {
    die('Could not get data: ' . mysqli_error($con));
  }
  elseif (mysqli_num_rows($retval) == 0)
   {
     echo "<tr><td colspan=3><h5 class='text-center' style='color: #000;'>You dont have scholars yet</h5></td></tr>";
   }
   else
   {
        while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC))
          {

              $sql2 = "SELECT *  FROM student_info where  std_no = '{$row['std_no']}'";
              
              $result = mysqli_query($con,$sql2);

            $myrow = mysqli_fetch_array($result, MYSQLI_ASSOC);
                echo "
                        <tr>
                            <td class='text-center text-muted text-hover col-sm-1' style='padding-bottom: 0px;'>1</td>
                            <td class=text-muted text-hover col-sm-8' style='padding-bottom: 0px;'>
                             <span class='text-capitalize'>{$myrow['first_name']} {$myrow['middle_name']} {$myrow['last_name']}</span>
                            </td>
                            <td class='col-sm-1'>
                              <button class='btn btn-link btn-sm' style='padding-bottom: 0px;'>Remove</button></td>
                            <td class='col-sm-1 text-center'><button class='btn btn-link btn-sm' style='padding-bottom: 0px;'>View</button></td>
                          </tr>
             ";
          }
  }


?>