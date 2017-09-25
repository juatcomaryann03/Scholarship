<?php

  include 'connect.php';

 $sql = "SELECT * FROM student_info where std_no = '$login_session';";
 $retval = mysqli_query($con,$sql);

 if(!$retval ) 
  {
    die("Could not get data: " . mysqli_error($con));
  }
 while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC))
  {
  
  $img = $row['image'];

   echo "

            <div id='profile'>
                    <span class='col-md-12' style='border-bottom: 1px solid #CCC;float:left;padding-bottom: 10px;'>
                      <img src='data:image/jpeg;base64,".base64_encode($img)."' style='height: 150px;width: 150px;float: left;padding: 5px;'/>
                        <h2 style='color: black;margin-left: 20px;float:left;padding-top: 80px;' class = 'text-capitalize'>{$row['first_name']} &nbsp {$row['middle_name']} &nbsp {$row['last_name']}
                        <button class='btn btn-link btn-md pull-right' onclick='display()'>Edit</button>
                        </h2>
                    </span>
                    <span class='col-md-12' style='margin-top: 30px;'>
                      <ul>
                        <li style='margin-bottom: 15px;'><strong><h5>Address :</strong> &nbsp&nbsp&nbsp&nbsp{$row['permanent_address']}</h5></li>
                        <li style='margin-bottom: 15px;'><strong><h5>Gender :</strong> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp{$row['gender']}</h5></li>
                        <li style='margin-bottom: 15px;'><strong><h5>School :</strong> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp{$row['school']}</h5></li>
                        <li style='margin-bottom: 15px;'><strong><h5>Email :</strong> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp{$row['email']}</h5></li>
                        <li style='margin-bottom: 15px;'><strong><h5>Level :</strong> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp{$row['level']}</h5></li>
                        <li style='margin-bottom: 15px;'><strong><h5>Username :</strong> &nbsp&nbsp&nbsp&nbsp{$row['username']}</h5></li>
                        <li style='margin-bottom: 15px;'><strong><h5>Password :</strong> &nbsp&nbsp&nbsp&nbsp * * * * * * * *</h5></li>
                      

                      </ul>
                    </span> 
                  </div>

                  <div id='profileEdit' style='display : none;'>
                    <span class='col-md-12' style='border-top: 1px solid #ccc;'>
                      <ul>
                      <form>
                        <li style='margin-bottom: 15px;'><strong><h5>First Name</strong><input type='text' value='{$row['first_name']}' class='form-control'/></h5></li>
                        <li style='margin-bottom: 15px;'><strong><h5>Middle Name</strong><input type='text' value='{$row['middle_name']}' class='form-control'/></h5></li>
                        <li style='margin-bottom: 15px;'><strong><h5>Last Name</strong><input type='text' value='{$row['last_name']}' class='form-control'/></h5></li>
                        <li style='margin-bottom: 15px;'><strong><h5>Address</strong>
                          <input type='text' value='{$row['permanent_address']}' class='form-control'/>
                        </h5></li>
                        <li style='margin-bottom: 15px;'><strong><h5>Gender</strong>
                          <select class='form-control'>
                              <option>Male</option>
                              <option>Female</option>
                          </select>
                        </h5></li>
                        <li style='margin-bottom: 15px;'><strong><h5>School</strong>
                        <input type='text' value='{$row['school']}' class='form-control'/>
                        </h5></li>
                        <li style='margin-bottom: 15px;'><strong><h5>Email</strong>
                        <input type='text' value='{$row['email']}' class='form-control'/>
                        </h5></li>
                        <li style='margin-bottom: 15px;'><strong><h5>Level</strong>
                        <select class='form-control'>
                              <option>Elementary</option>
                              <option>High School</option>
                              <option>College</option>
                          </select>
                        </h5></li>
                        <li style='margin-bottom: 15px;'><strong><h5>Username</strong>
                        <input type='text' value='{$row['username']}' class='form-control'/>
                        </h5></li>
                        <li style='margin-bottom: 15px;'><strong><h5>Password</strong>
                        <input type='password' value='{$row['password']}' class='form-control'/>
                        </h5></li>
                        <li style='margin-bottom: 15px;'>
                            <button class='btn btn-md btn-primary' type='submit'>Submit</button>
                            <button class='btn btn-md btn-primary' type='button' onclick='display2()'>Cancel</button>
                        </form>
                        </li>
                      </ul>
                    </span> 
                  </div>
                  </br>
                  </br>
   ";

  }
?>