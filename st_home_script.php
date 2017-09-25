<?php

include 'connect.php';

if(!empty($_GET['search_home']))
{
  $search = $_GET['search_home'];
  $sql = "SELECT *  FROM programs where program_name  LIKE '%$search%'";
}
  else 
{
  $sql = "SELECT *  FROM programs";
}

 $retval = mysqli_query($con, $sql);

 if(! $retval ) 
  {
    die('Could not get data: ' . mysqli_error($con));
  }
     elseif (mysqli_num_rows($retval) < 1)
  {
    echo "<h5 class='text-center' style='color: #000;'>Sorry your keyword doesnt match to any sponsor</h5>";
  }
    else
  {

    while($myrow = mysqli_fetch_array($retval, MYSQLI_ASSOC))
          {
            $img = $myrow['image'];
    
                $status = $myrow['isOpen'];
                if($status == 1)
              {
                $st = "Open";
              }else{
                  $st = "Closed";
                }
     
            echo 
            "
              <form action='redirect.php'>
                <div class='col-xs-12 col-sm-12'>
                  <div class='col-sm-12' style=' border: 1px solid #CCC;padding : 15px 5px 5px 5px; margin-top: 10px;'>
                    <div class='col-sm-2'>
                      <img src='data:image/jpeg;base64,".base64_encode($img)."' style='height: 100px;width: 100px;'/>
                    </div>
                    <div class='col-sm-8'>
                      <h5><strong>Name : </strong>{$myrow['program_name']}</h5>
                      <h5><strong>Location : </strong>{$myrow['location']}</h5>
                      <h5><strong>Grant  : </strong>{$myrow['grant']}</h5>
                      <h5><strong>Status    : </strong>$st</h5>
                    </div>
                    <div class='col-sm-2'>
                    <form method = 'get'>
                      <input type='hidden' name='program_id' value='{$myrow['program_id']}'/>
                      <button class='btn btn-primary btn-sm' style='width: 100px;'>Apply</button>
                      </form>
                      <form method='get' action = 'std_more_profile.php'>
                      <input type='hidden' name='program_id' value='{$myrow['program_id']}'/>
                         <a href='std_more_profile.php' target='std_more_profile.php'><button type='submit' class='btn btn-primary btn-xs' style='width: 100px;'>View More..</button></a>
                      </form>
                    </div>                
                    </div>
                    </div>
              </form>
              ";
            }
          }
?>