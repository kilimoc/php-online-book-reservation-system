<?php
session_start();
$success="";
$error="";
require'Dbconnect.php';

if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['idnumber']) && isset($_POST['phone']) && isset($_POST['email']) && isset($_POST['password'])){
    $fname=  strip_tags($_POST['firstname']);
    $lname=strip_tags($_POST['lastname']);
    $idnumber=strip_tags($_POST['idnumber']);
    $phone=strip_tags($_POST['phone']);
    $email=strip_tags($_POST['email']);
    $password=strip_tags($_POST['password']);
    //$cpassword=strip_tags($_POST['cpassword']);
    
    $fname=$DBconnect->real_escape_string($fname);
    $lname=  $DBconnect->real_escape_string($lname);
    $idnumber=  $DBconnect->real_escape_string($idnumber);
    $phone=  $DBconnect->real_escape_string($phone);
    $email=  $DBconnect->real_escape_string($email);
    $password=  $DBconnect->real_escape_string($password);
    //$cpassword=  $DBconnect->real_escape_string($cpassword);
    
    $hashed_password=  password_hash($password, PASSWORD_DEFAULT);
    //$hashed_cpassword=  password_hash($cpassword, PASSWORD_DEFAULT);
    
    
    if(!empty($fname)&& !empty($lname) && !empty($idnumber) && !empty($phone) && !empty($email) && !empty($password)){
      if($DBconnect->query("INSERT INTO `users` (`firstname`,`lastname`,`id_number`,`phone`,`email`,`password`) VALUES ('$fname','$lname','$idnumber','$phone','$email','$hashed_password')")) {
          echo '<script>alert("You have Been Successfully Regsitered")</script>';
      }
 else {
       echo '<script>alert("Oops! Error In Registration.Contact System Administrator")</script>';
       header("Location:admin/index.html");
      }
    }
 else {
        echo '<script>alert("All Fields Must Be Filled")</script>';
    }
    //$DBconnect->close();
    
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Hornbill</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--Include materialize css files-->
        
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="css/materialize.min.css" rel="stylesheet">
        
    </head>
    <body class="container">
        <div class="row">
            <div class="col s12">
                <div class="card" style="width:500px;margin:auto">
                    <div class="center-align white-text orange card-title">Client Sign Up</div>
                    <div class="center card-content">                        
                            <div class="row">
                                <form method="POST" action="signup.php" class="col s12">
                                <div class="row">
                                  <div class="input-field col s6">
                                      <input id="first_name" name="firstname" type="text" class="validate">
                                    <label for="first_name">FIRST NAME</label>
                                  </div>
                                  <div class="input-field col s6">
                                      <input id="last_name" name="lastname" type="text" class="validate">
                                    <label for="last_name">LAST NAME</label>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="input-field col s12">
                                      <input id="idnumber" type="text" name="idnumber" class="validate">
                                    <label for="idnumber">IDENTIFICATION NUMBER</label>
                                  </div>
                                </div>
                                  <div class="row">
                                  <div class="input-field col s12">
                                      <input id="phone" type="text" name="phone" class="validate">
                                    <label for="phone">PHONE NUMBER</label>
                                  </div>
                                </div>
                                  <div class="row">
                                  <div class="input-field col s12">
                                    <input id="email"name="email" type="email" class="validate">
                                    <label for="email">E-MAIL ADDRESS</label>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="input-field col s12">
                                      <input id="password" name="password" type="password" class="validate">
                                    <label for="password">PASSWORD</label>
                                  </div>
                                </div>
                                  <!--<div class="row">
                                  <div class="input-field col s12">
                                      <input id="confirmpassword" name="cpassword" type="password" class="validate">
                                    <label for="confirmpassword">CONFIRM PASSWORD</label>
                                  </div>
                                </div>-->
                                  
                                     
                                  <div class="center row">               
                                          <button class="btn waves-effect waves-light" type="submit" name="btn_signup">Register
                                            <i class="material-icons right">send</i>
                                          </button>        
                                  </div>
                                    <div class="center row">               
                                        <div class="col s12"><a href="login.php">Already Have an Account?</a></div>   
                                  </div>

                              </form>
                            </div>
        
                        
                    </div>
                    <div class="center-align white-text orange card-title">&COPY2016 Hornbill Inc.All Rights Reserved</div>
                </div>
            </div>
        </div>
        
  
        
        <!--Javascript-->
        <script src="js/jquery.min.js"></script>
        <script src="js/materialize.min.js"></script>        
    </body>
</html>
