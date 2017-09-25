<?php

include 'connect.php';

if(!empty($_GET['keyword']))
  {
      $search = $_GET['keyword'];
      $search = htmlspecialchars($search);
      $search = mysqli_real_escape_string($search);
      $sql = "SELECT *  FROM programs where program_name  LIKE '%$search%'";
  }
   else
    {
      $sql = "SELECT *  FROM programs";
    }

  $retval = mysqli_query($conn, $sql);

 if(!$retval ) 
  {
    die('Could not get data: ' . mysql_error());
  }
  elseif (mysqli_num_rows($retval) < 1)
  {

    echo "No result";
  }
    elseif(mysqli_num_rows($retval) > 0)
                {
                   $sql2 = "SELECT *  FROM programs where program_name LIKE '%$search%'";        
                   $result = mysqli_query($con,$sql2);
                     while ($myrow = mysqli_fetch_array($result, MYSQLI_ASSOC)) 
                        {
                                #do something here
                        }
                }   
?>