<?php
  require_once 'connect.php';

  $user_id = $login_session;
  $user_id = htmlspecialchars($user_id);
  $user_id = mysqli_real_escape_string($con, $user_id);

  $query = "SELECT * FROM std_notif where std_no = '$user_id'";

  $result = mysqli_query($con, $query) or die(mysqli_error($con));

if(!$result) 
  {
    die('Could not get data: ' . mysqli_error($con));
  }
    elseif (mysqli_num_rows($result) == 0)
      {
        echo "<tr><td colspan=3><h5 class='text-center' style='color: #000;'>You dont have notifications yet</h5></td></tr>";
      }
        else
        {
          echo 
          "<div class='col-xs-12 col-sm-12' style='min-height: 400px;'>
                  <div class='notif col-sm-12' style='padding: 0px;'>
          ";
            while($myrow = mysqli_fetch_array($result, MYSQLI_ASSOC))
                {
                 
                    echo 
                    "
                      <form method='get' action='notif_view.php'>
                        <input type='hidden' name='notif_id' value ='{$myrow['notif_no']}'/>
                        <button type='submit' class='col-sm-12 notif-text btn-link'>
                        <div class='col-sm-12 notif-text' style='padding-top: 6px;padding-bottom: 0px;'>
                            <strong><h5 class='pull-left'>{$myrow['subject']} from {$myrow['program_name']}</h5>                  
                            <h6 class='pull-right'>Date : {$myrow['date']}</h6>
                        </div>
                      </button>
                      </form>   
                    ";
                }
            echo 
            "  </div>
                </div>
            ";
        }
?>
