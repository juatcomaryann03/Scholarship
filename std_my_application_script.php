<?php
  include 'connect.php';

 $sql = "SELECT *  FROM applications where std_no = '$login_session'";

 $retval = mysqli_query($con, $sql);

 if(! $retval ) 
  {
    die('Could not get data: ' . mysqli_error($con));
  }
  elseif (mysqli_num_rows($retval) < 1)
   {
      echo
      "
             <div class='col-md-6 col-md-offset-2' style='padding: 20px;border: 2px solid white;height: 400px;width: 600px;margin-top: 20px;overflow: auto;box-shadow: 5px 5px 15px grey;'>

              <img src='assets/images/icon.png' style='margin-left: 175px;height:200px; width:200px; border:1px solid white;margin-bottom: 20px;'/> 
              <p class='text-center' style='font-size: 120%; color: grey; font-size: 18px; '>You haven't applied to any scholarship.Start searching for available scholarship and apply online for free!
              </p><br>
              <a href='std_home.php'
              <button class='btn btn-primary btn-lg col-md-offset-4' style='border-radius: 20px;min-width: 150px; min-height: 40px; font-size: 16px;'>Start Searching
              </button></a>
              </div>
      ";
  }else
  {

  while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC))
  {

    $sql2 = "SELECT *  FROM programs WHERE  program_id = '{$row['program_id']}'";
    $result = mysqli_query($con, $sql2) or die(mysqli_error($con));

    $myrow = mysqli_fetch_array($result, MYSQLI_ASSOC);
  
    $img = $myrow['image'];
    $status = $myrow['isOpen'];
    $app = $row['isPending'];
    if($status == 1)
    {
     $st = "Open";
    }
    else
    {
      $st = "Closed";
    }

    if($app == 1)
    {
        $read = "Pending";
    }
      else
    {
      $read = "Viewed";
    }

   echo "
                <div class='col-xs-12 col-sm-12'>
                  <div class='col-sm-12' style=' border: 1px solid #CCC;padding : 15px 5px 5px 5px;'>
                    <div class='col-sm-2'>
                      <img src='data:image/jpeg;base64,".base64_encode($img)."' style='height: 100px;width: 100px;'/>
                    </div>
                    <div class='col-sm-7'>
                      <h5><strong>Name : </strong>{$myrow['program_name']}</h5>
                      <h5><strong>Location : </strong>{$myrow['location']}</h5>
                      <h5><strong>Grant  : </strong>{$myrow['grant']}</h5>
                      <h5><strong>Status   : </strong>$st</h5>
                    </div>
                    <div class='col-sm-3'>
                     <strong><h5>Application Status : </strong>$read</h5>
                     <strong><h5>Date Sent : </strong>{$row['date']}</h5>
                    </div>                
                    </div>
                    </div>
             
   ";

    }
  }
?>