<?php

include 'lock_apply.php';


$target_dir = "assets/images/uploadfiles/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$date = date("Y-m-d");
$ID = $_POST['ID'];

$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

$min_rand=rand(0,1000);
$max_rand=rand(100000000,1000000000);
$name_file=rand($min_rand,$max_rand);
//this part is for creating random name for image


$ext= "pdf";

$name_filez = $target_dir. $name_file.".".$ext;

$check1 = "SELECT * FROM applications WHERE program_id = '$ID' AND std_no = '$login_session'";
$val = mysqli_query($con, $check1) or die(mysqli_error($con));
 $count = $val->num_rows;

 if($count > 0)
 {
    ?>
    <script type="text/javascript">
                    alert("You already send an Application to this program!");
                     window.location='apply.php';
            </script>
    <?php
    $uploadOk = 0;
 }

// Check if file already exists
if (file_exists($target_file)) 
{

?>
    <script type="text/javascript">
                    alert("Sorry, File already exist.");
            </script>
<?php
    $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "pdf") 
{
?>
        <script type="text/javascript">
                    alert("Sorry, only pdf files are allowed.");
                    window.location='apply.php';
            </script>
<?php
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) 
{
    ?>
        <script type="text/javascript">
                    alert("Sorry, your file was not uploaded.");
                    window.location='apply.php';                   
            </script>
<?php
// if everything is ok, try to upload file
} 
else 
{
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],  $target_dir.$name_file.".".$ext)) 
    {
        
        include 'connect.php';     

                if(!empty($_POST['ID']))
                {
                    $sql = "INSERT INTO applications (`requirements`, `program_id`,`std_no`,`date`)  VALUES 
                        ('$name_filez','$ID','$login_session','$date');";

                        $result=mysqli_query($con,$sql) or die("failed".mysqli_error($con));
                    ?>
                        <script type="text/javascript">
                            alert("Application Sent!");
                            window.location='std_home.php';
                </script>
                    <?php
                }
                else
                    {
                        ?>
                            <script type="text/javascript"> 
                                alert("Please Fill all the boxes!");
                            </script>
                        <?php
                    }
    } 
    else 
    {
        ?>

        <script type="text/javascript">
                    alert("Sorry, there was an error uploading your file.");
            </script>
        <?php
    }
}
?>