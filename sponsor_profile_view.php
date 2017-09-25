<?php

	require_once "connect.php";

	$prog_id = $_GET['program_id'];
	 #$prog_id = '1';
   $queryProgram = "SELECT * FROM programs WHERE program_id = '$prog_id'";
  	$queryRequirements = "SELECT * FROM requirements WHERE program_id = '$prog_id'";
  	$queryList = "SELECT * FROM master_list WHERE program_id ='$prog_id'";
  	

	$resultP = mysqli_query($con,$queryProgram);
	if(!$resultP) 
  		{
    		die('Could not get data: ' . mysqli_error($con));
  		}
  		else
  			{	$resultL = mysqli_query($con, $queryList);
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
  				"<div class='col-md-8 col-md-offset-2' style='padding-top: 20px;padding-bottom: 5px;border: 1px solid #CCC;margin-bottom: 20px;text-align: center;color: #000;box-shadow: 0 15px 20px rgba(0, 0, 0, 0.3);'>
  					<img src='data:image/jpeg;base64,".base64_encode($img)."' width='200px' height='200px'/>
            		<h1 class='page-header'>{$rowProg['program_name']}</h1>
         		</div>
  				";
  				echo 
  				"<div class='col-md-8 col-md-offset-2' style='border: 1px solid #CCC;min-height: 300px;margin-bottom: 20px;box-shadow: 0 15px 20px rgba(0, 0, 0, 0.3);'>
           		 <h3 class='page-header'><strong>Description</strong></h3>
            	<ul style='list-style: none; color: #000;'>
                	<li><h4><strong>Location : <strong/>{$rowProg['location']}</h4></li>
                  <li><h4><strong>Grant : <strong/>{$rowProg['grant']}</h4></li>
                	<li><h4><strong>Status : <strong/>$status</h4></li>
            	</ul>
  				";
  				echo 
  				"<h3 class='page-header' style='margin-bottom: -10px;  '><strong>Requirements</strong></h3>
                <p style='padding: 30px;'>
  				";
  				while ($rowReq = mysqli_fetch_array($resultR, MYSQLI_ASSOC)) 
  				{
  					echo "{$rowReq['requirement']}";
  				}
  				
  				echo 
		  		"</p>
		   	        </div>
		        	<div class='col-md-8 col-md-offset-2' style='border: 1px solid #CCC; min-height: 300px;box-shadow: 0 15px 20px rgba(0, 0, 0, 0.3);max-height: 800px;overflow: auto;'>
		            <h3 class='page-header'><strong>List of Scholars</strong></h3>
		            <ol style=' color: #000;'>
  				";
  				while ($rowList = mysqli_fetch_array($resultL, MYSQLI_ASSOC)) 
  				{
  					$queryStudent = "SELECT * FROM student_info WHERE std_no ='{$rowList['std_no']}'";
  					$resultS = mysqli_query($con, $queryStudent);
  					while ($rowStd = mysqli_fetch_array($resultS, MYSQLI_ASSOC))
  					{
  						echo "    <li><h5>{$rowStd['first_name']} {$rowStd['middle_name']} {$rowStd['last_name']}</h5></li>";
  					}
  				}
  				echo 
  				" </ol>
        			</div>";

  			}
?>

          
                
               