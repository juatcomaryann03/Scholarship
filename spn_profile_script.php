<?php

require_once 'connect.php';

 $sql = "SELECT * FROM sponsor_info where spn_no = '$login_session';";
 $retval = mysqli_query($con,$sql);

 if(!$retval ) 
  {
    die("Could not get data: " . mysqli_error($con));
  }
 while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC))
  {
  
	  $img = $row['image'];

	  echo "
	  	<div id='info'>
	  		<span class='col-md-12' style='border-bottom: 1px solid #CCC;float:left;padding-bottom: 10px;'>
				<img src='data:image/jpeg;base64,".base64_encode($img)."' style='height: 150px;width: 150px;border: 1px solid #2FA4E7;float: left;'/>									
				<h1 style='color: black;margin-left: 20px;float:left;padding-top: 80px;'>{$row['name']} </h1>
				<button class='btn btn-link pull-right' style='margin-top: 110px;' onclick='displayEditProfile();'>Edit</button>
			</span>
						<span class='col-md-12' style='border-top: 1px solid #ccc;'>
							<ul>
								<li style='margin-bottom: 15px;'><strong><h5>Email :</strong> {$row['email']}</h5></li>
								<li style='margin-bottom: 15px;'><strong><h5>Username :</strong> {$row['username']}</h5></li>
								<li style='margin-bottom: 15px;'><strong><h5>Password :</strong> * * * * * * * *</h5></li>
						    </ul>
						</span>	
			<h3>About Sponsor <button class='btn btn-link pull-right' onclick='displayEditAbout();'>Edit</button></h3>
				<span class='col-md-12' style='border-top: 1px solid #ccc;padding: 50px;padding-top: 10px;min-height: 2	 00px;'>
					<p>{$row['about']}</p>
				</span>
		</div>

				<span id='editProfile' style='display:none;'>
				<h3 class='page-header'>Edit Profile</h3>
				<form>
					<label style='color: #000;'>Program Name</label>
					<input type='text' class='form-control'/>
					<label style='color: #000;'>Email</label>
					<input type='text' class='form-control'/>
					<label style='color: #000;'>Username</label>
					<input type='text' class='form-control'/>
					<label style='color: #000;'>Password</label>
					<input type='text' class='form-control'/>
					<button class='btn btn-md btn-primary' type='submit'>Submit</button>
				</form>
					<button class='btn btn-md btn-primary' onclick='cancel();' style='margin-top: -60px;margin-left: 100px;'>Cancel</button>
				</span>

				<span id='editAbout' style='display:none;'>
					<h3 class='page-header'>Edit About</h3>
					<form>
						<textarea rows='10' cols='50' style='color:black' class='form-control'>{$row['about']}</textarea>
						<button class='btn btn-md btn-primary'>Submit</button>
					</form>
					<button class='btn btn-md btn-primary' onclick='cancel();' style='margin-top: -60px;margin-left: 100px;'>Cancel</button>
				</span>

	  		";
  }
?>