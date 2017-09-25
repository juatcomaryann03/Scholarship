<?php
  require_once 'connect.php';

  $user_id = "5";
  $user_id = htmlspecialchars($user_id);
  $user_id = mysqli_real_escape_string($con, $user_id);

  $query = "SELECT * FROM std_notif where notif_no = '$user_id'";

  $result = mysqli_query($con, $query);

if(!$result) 
  {
    die('Could not get data: ' . mysqli_error($con));
  }
    else
      {
        $myrow = mysqli_fetch_array($result, MYSQLI_ASSOC);
        echo 
        "<div class='col-md-8 col-md-offset-2' style='border-color: 1px solid #CCC;min-height: 400px;margin-bottom: 40px;box-shadow: 0 5px 20px rgba(0, 0, 0, 0.3);'>
           <h4 style='margin-left: 30px; margin-top: 30px;'>{$myrow['program_name']}</h4>
           <h5 style='margin-left: 30px; margin-top: 10px;'>{$myrow['subject']}</h5>
           <h5 style='margin-left: 30px;'>{$myrow['date']}</h5>
           <h5 style='margin-left: 60px; margin-top: 40px;'>{$myrow['about'	]}</h5>
		 </div>
        ";
      }
             
?>
