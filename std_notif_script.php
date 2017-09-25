<?php
  include 'connect.php';

 $sql = "SELECT *  FROM tbl_list where std_no = '$login_session'";

 $retval = mysqli_query($con, $sql);

 if(! $retval ) 
  {
    die('Could not get data: ' . mysql_error());
  }
  elseif (mysqli_num_rows($retval) < 1)
   {
      echo
      "
        You Dont have any notification yet!
      ";
  }else
  {

  while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC))
  {
    $sql2 = "SELECT *  FROM spn_info where  spn_no = '{$row['spn_no']}'";
    
    $result = mysqli_query($con,$sql2);

   $myrow = mysqli_fetch_array($result, MYSQLI_ASSOC);
  
  $img = $myrow['Images'];
   

   echo "
              <form action='std_sponsor_profile.php'>
                <div class='col-xs-12 col-sm-12'>
                  <div class='col-sm-12' style=' border: 1px solid #CCC;padding : 15px 5px 5px 5px;'>
                    <div class='col-sm-2'>
                      <img src='data:image/jpeg;base64,".base64_encode($img)."' style='height: 100px;width: 100px;'/>
                    </div>
                    <div class='col-sm-8'>
                      <h5><strong>Name : </strong>{$myrow['Name']}</h5>
                      <h5><strong>Location : </strong>{$myrow['Location']}</h5>
                      <h5><strong>Contact  : </strong>{$myrow['Contact']}</h5>
                      <h5><strong>Status   : </strong>Pending</h5>
                    </div>
                    <div class='col-sm-2'>
                      <form >
                      <input type='hidden' value='{$myrow['Location']}'/>
                      <button class='btn btn-primary btn-sm' style='width: 78px;'>Visit</button>
                      </form>
                    </div>                
                    </div>
                    </div>
              </form>
   ";

    }
  }
?>