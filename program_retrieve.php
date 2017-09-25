<?php
  include 'connect.php';

 $sql = "SELECT *  FROM programs where spn_no = '$login_session'";

 $retval = mysqli_query($con, $sql);

 if(!$retval ) 
  {
    die('Could not get data: ' . mysqli_error($con));
  }
  elseif (mysqli_num_rows($retval) == 0)
   {
     echo "<tr><td colspan=3><h5 class='text-center' style='color: #000;'>You dont have programs yet</h5></td></tr>";
   }
   else
   {
        while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC))
          {

            $status = "";
            if($row['isOpen'] == 1)
            {
              $status = "Open";
            }
            else
            {
               $status = "Closed";
            }
                echo 
                "
                  <tr style='color: #000'>
                  <td>{$row['program_name']}</td>
                  <td>$status</td>
                  <td class='col-sm-1 text-center'><button class='btn btn-link btn-sm' style='padding-bottom: 0px;' data-toggle='modal' data-target='#product_view'>View</button></td>
                  </tr>
             ";
          }
  }


?>