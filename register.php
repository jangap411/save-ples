<?php

  include './src/server.php';

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="Learning website, teaching you new skill sets">
    <meta name="keywords" content="Saveples, Learning, Skills, Skill sets">
    <meta name="author" content="Jedidiah Angap">

    <title>SAVE PLES - Register</title>

    <!-- Custom fonts for this template-->
    <link
      href="vendor/fontawesome-free/css/all.min.css"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
      rel="stylesheet"
    />

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet" />
  </head>

  <body class="bg-gradient-primary">
    <div class="container">
      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">
            <!-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> -->
            <div class="col-lg">
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                </div>
                <form class="user" action="./src/server.php" method="post">
                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <p>First Name</p>
                      <input
                        type="text"
                        class="form-control form-control-user"
                        id="FirstName"
                        name="FirstName"
                        placeholder="First Name"
                        required
                      />
                    </div>
                    <div class="col-sm-6">
                      <p>Last Name</p>
                      <input
                        type="text"
                        class="form-control form-control-user"
                        id="LastName"
                        name="LastName"
                        placeholder="Last Name"
                        required
                      />
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <p>Date of Birth</p>
                      <input
                        type="date"
                        class="form-control form-control-user"
                        id="dob"
                        name="dob"
                        placeholder="DOB"
                        required
                      />
                    </div>
                    <div class="col-sm-6">
                      
                      <p>Province</p>
                      <?php 
                        $provinceQuery = "SELECT DISTINCT `Province` FROM `provinces` order by Province;";
                        $result = mysqli_query($db, $provinceQuery);

                        echo '<select class="form-control" id="province" name="province">';
                        if(mysqli_num_rows($result)>0){

                            while($row = mysqli_fetch_assoc($result)){
                                // echo ' <option value="{'$row['UserID'}">'{$row['username']}'</option>';
                                echo "<option value='{$row['Province']}'>";
                                echo $row['Province'];
                                echo "</option>";
                            }
                        }

                        echo '</select>';

                     ?>
                      <!-- <input
                        required
                        type="text"
                        class="form-control form-control-user"
                        id="province"
                        name="province"
                        placeholder="Province"
                        required
                      /> -->
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <p>District</p>
                      <?php 
                        $districtQuery = "SELECT DISTINCT `District` FROM `provinces` Order by District";// WHERE `Province`='Morobe'";
                        $result = mysqli_query($db, $districtQuery);

                        echo '<select class="form-control" id="district" name="district">';
                        if(mysqli_num_rows($result)>0){

                            while($row = mysqli_fetch_assoc($result)){
                                // echo ' <option value="{'$row['UserID'}">'{$row['username']}'</option>';
                                echo "<option value='{$row['District']}'>";
                                echo $row['District'];
                                echo "</option>";
                            }
                        }

                        echo '</select>';

                     ?>
                     <!-- <input
                        type="text"
                        class="form-control form-control-user"
                        id="district"
                        name="district"
                        placeholder="District"
                        required
                      /> -->
                    </div>
                    <div class="col-sm-6">
                      <p>LLG</p>
                      <?php 
                        $llgQuery = "SELECT * FROM `LLGS` Order by llgName";// WHERE `Province`='Morobe'";
                        $result = mysqli_query($db, $llgQuery);

                        echo '<select class="form-control" id="llg" name="llg">';
                        if(mysqli_num_rows($result)>0){

                            while($row = mysqli_fetch_assoc($result)){
                                // echo ' <option value="{'$row['UserID'}">'{$row['username']}'</option>';
                                echo "<option value='{$row['llgName']}'>";
                                echo $row['llgName'];
                                echo "</option>";
                            }
                        }

                        echo '</select>';

                     ?>
                      <!-- <input
                        type="text"
                        class="form-control form-control-user"
                        id="llg"
                        name="llg"
                        placeholder="LLG"
                        required
                      /> -->
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <p>Ward</p>
                      <?php 
                        $wardQuery = "SELECT * FROM `wards` Order by wardName";// WHERE `Province`='Morobe'";
                        $result = mysqli_query($db, $wardQuery);

                        echo '<select class="form-control" id="llg" name="llg">';
                        if(mysqli_num_rows($result)>0){

                            while($row = mysqli_fetch_assoc($result)){
                                // echo ' <option value="{'$row['UserID'}">'{$row['username']}'</option>';
                                echo "<option value='{$row['wardName']}'>";
                                echo $row['wardName'];
                                echo "</option>";
                            }
                        }

                        echo '</select>';

                     ?>
                      <!-- <input
                        type="text"
                        class="form-control form-control-user"
                        id="ward"
                        name="ward"
                        placeholder="ward"
                        required
                      /> -->
                    </div>
                    <div class="col-sm-6">
                      <p>Your City/Town/Village</p>
                       <?php 
                        $districtQuery = "SELECT `City/Town/Village` FROM `provinces`";// WHERE `Province`='Morobe'";
                        $result = mysqli_query($db, $districtQuery);

                        echo '<select class="form-control" id="village" name="village">';
                        if(mysqli_num_rows($result)>0){

                            while($row = mysqli_fetch_assoc($result)){
                                // echo ' <option value="{'$row['UserID'}">'{$row['username']}'</option>';
                                echo "<option value='{$row['City/Town/Village']}'>";
                                echo $row['City/Town/Village'];
                                echo "</option>";
                            }
                        }

                        echo '</select>';

                     ?>
                      <!-- <input
                        type="text"
                        class="form-control form-control-user"
                        id="village"
                        name="village"
                        placeholder="Village"
                        required
                      /> -->
                      
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <p>Your Clan</p>
                      
                      <input
                        type="text"
                        class="form-control form-control-user"
                        id="clan"
                        name="clan"
                        placeholder="Clan"
                        required
                      />
                    </div>
                    <div class="col-sm-6">
                      <p>Phone Number</p>
                      <input
                        type="tel"
                        class="form-control form-control-user"
                        id="phone"
                        name="phone"
                        placeholder="Phone Number"
                        required
                      />
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">

                      <label for="contactAdress" class="small"
                        >Contact Address</label
                      >
                      <textarea
                        class="form-control"
                        id="contactAdress"
                        name="contactAdress"
                        rows="3"
                      ></textarea>
                    </div>
                    <div class="col-sm-6">

                      <label class="small" for="user-type">User Type</label>
                      <select
                        class="form-control"
                        id="user-type"
                        name="user-type"
                      >
                        <option value="1">Student</option>
                        <option value="2">Trainer</option>
                        <!-- <option value="3">3</option> -->
                      </select>
                      <label class="small" for="exampleFormControlTextarea1"
                        >Gender</label
                      >
                      <select class="form-control" id="gender" name="gender">
                        <option value="">Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input
                        type="text"
                        class="form-control form-control-user"
                        id="username"
                        name="username"
                        placeholder="Username"
                        required
                      />
                    </div>
                    <div class="col-sm-6">
                      <input
                      type="email"
                      class="form-control form-control-user"
                      id="email"
                      name="email"
                      placeholder="Email Address"
                    />
                    </div>
                  </div>
                 
                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <input
                        type="password"
                        class="form-control form-control-user"
                        id="password"
                        name="password"
                        placeholder="Password"
                      />
                    </div>
                    <sdiv class="col-sm-6">
                      <input
                        type="password"
                        class="form-control form-control-user"
                        id="repeatPassword"
                        name="repeatPassword"
                        placeholder="Repeat Password"
                      />
                    </div>
                  </div>
                 
                  <hr />
                  <div class="form-group">
                  <input type="submit" class="form-control form-control-user btn btn-primary btn-user btn-block" id="btn-register" name="btn-register" value="Register">
                </div>
                </form>
                <!-- <div class="text-center">
                    <hr />
                  <a class="small" href="forgot-password.html"
                    >Forgot Password?</a
                  >
                </div> -->
                <div class="text-center">
                  <a class="small" href="login.php"
                    >Already have an account? Login!</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="./js/validation.js"></script>
    <script>
      let password = document.getElementById('password').value;
      let repeatPassword = document.getElementById('repeatPassword');
      let check ="";
      

      repeatPassword.addEventListener('keydown',(e)=>{
        // console.log(`keyboard pressed code: ${e.code}`);
        check += e.target.value;
        console.log(check);
        confirmUserPassword(password,check);
      })

    </script>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
  </body>
</html>
