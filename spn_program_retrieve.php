<?php

  require_once "connect.php";

  $prog_id = $_GET['program_id'];
   #$prog_id = '1';
   $queryProgram = "SELECT * FROM programs WHERE program_id = '$prog_id'";
    $queryRequirements = "SELECT * FROM requirements WHERE program_id = '$prog_id'";
    

  $resultP = mysqli_query($con,$queryProgram);
  if(!$resultP) 
      {
        die('Could not get data: ' . mysqli_error($con));
      }
      else
        {
          $resultR = mysqli_query($con, $queryRequirements);
          $rowProg = mysqli_fetch_array($resultP, MYSQLI_ASSOC);
          $status = "";

           $img = $rowProg['image'];
    
          if ($rowProg['isOpen'] == 1) 
          {
            $status = "Open";
          }else{
            $status = "Closed";
          }
          echo 
          "
          <div id='program'>
          <div class='col-md-8 col-md-offset-2' style='padding-top: 20px;padding-bottom: 5px;border: 1px solid #CCC;margin-bottom: 20px;text-align: center;color: #000;box-shadow: 0 15px 20px rgba(0, 0, 0, 0.3);'>
            <img src='data:image/jpeg;base64,".base64_encode($img)."' width='200px' height='200px'/>
                <h1 class='page-header'>{$rowProg['program_name']}</h1>
            </div>
          ";
          echo 
          "
          <div id='program'>
          <div class='col-md-8 col-md-offset-2' style='border: 1px solid #CCC;min-height: 300px;margin-bottom: 20px;box-shadow: 0 15px 20px rgba(0, 0, 0, 0.3);'>
               <h3 class='page-header'><strong>Description</strong></h3>
              <ul style='list-style: none; color: #000;'>
                  <li><h4><strong>Location : <strong/>{$rowProg['location']}</h4></li>
                  <li><h4><strong>Grant : <strong/>{$rowProg['grant']}</h4></li>
                  <li><h4><strong>Status : <strong/>$status</h4></li>
              </ul>
          <button class='btn btn-link pull-right' style='margin-top: 110px;' onclick='displayEditProgram();'>Edit</button>
          </div>
        

            <div id ='editProgram' style='display: none;'>
            <h3 class='page-header'>Edit Profile Description</h3>
              <form>
                        <ul>
                        <li style='margin-top: 20px; width: 500px;''><strong><h5>{$rowProg['program_name']}Program Name</strong>
                          <input type='text' class='form-control'/>
                        </h5></li>
                         <li style='margin-top: 10px; width: 500px;''><strong><h5>Location</strong>
                          <input type='text' value='{$rowProg['location']}' class='form-control'/>
                        </h5></li>
                         <li style='margin-top: 10px; width: 500px;''><strong><h5>Grant</strong>
                          <input type='text' value='{$rowProg['grant']}' class='form-control'/>
                        </h5></li>
                         <li style='margin-top: 10px; width: 500px;'><strong><h5>$status</strong>
                          <div class='onoffswitch'>
                            <input type='checkbox' data-role='flipswitch' name='onoffswitch' class='onoffswitch-checkbox' id='myonoffswitch'>
                            <label class='onoffswitch-label' for='myonoffswitch'>
                                <span class='onoffswitch-inner'></span>
                                <span class='onoffswitch-switch'></span>
                            </label>
                        </div>
                        </h5>
                        </li>
                            <button class='btn btn-md btn-primary' type='submit'>Done</button>
                            <button class='btn btn-md btn-primary' type='button' onclick='cancel()'>Cancel</button>
                        </form>
                        </li>
                      </ul>
                    </span> 
                    </div>

          ";
          echo 
          "
          <div class='col-md-8 col-md-offset-2' style='border: 1px solid #CCC;min-height: 300px;margin-bottom: 20px;box-shadow: 0 15px 20px rgba(0, 0, 0, 0.3);'>
          <h3 class='page-header' style='margin-bottom: -10px;  '><strong>Requirements</strong></h3>
          <p style='padding: 30px;'>
          <button class='btn btn-link pull-right' style='margin-top: 110px;' onclick='displayEditProfile();'>Edit</button>
          </div>
          ";
          while ($rowReq = mysqli_fetch_array($resultR, MYSQLI_ASSOC)) 
          {
            echo "{$rowReq['requirement']}";
          }

        }
?>

          
                
               