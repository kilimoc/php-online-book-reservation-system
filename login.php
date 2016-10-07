<?php
session_start();
require_once 'Dbconnect.php';
if(isset($_POST['idnumber']) && isset($_POST['password'])){
    $username=$_POST['idnumber'];
    $password=$_POST['password'];
    if(!empty($username) && !empty($password)){
        $query="SELECT*FROM `users` WHERE `id_number`='$username' AND `password`='$password'";
        if($DBconnect->query($query)){
            header("Location:clientProfile.html");
        }
 else {
                        echo 'Error';}
        
 
    }
    else {
        
        echo 'All Fields Should Be Fiiled';
        
 }
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
                <div class="card" style="width:500px;margin: auto">
                    <div class="center-align white-text orange card-title">Client Sign Up</div>
                    <div class="center card-content">
                        
  <div class="row">
      <form method="post" action="login.php" class="col s12">      
      <div class="row">
        <div class="input-field col s12">
            <input id="idnumber" type="text" name="idnumber" class="validate">
          <label for="idnumber">IDENTIFICATION NUMBER</label>
        </div>
      </div>        
      <div class="row">
        <div class="input-field col s12">
            <input id="password" type="password"  name="password" class="validate">
          <label for="password">PASSWORD</label>
        </div>
      </div>        
        <div class="center row">               
                <button class="btn waves-effect waves-light" type="submit" name="action"><i class="material-icons right">lock_open</i>Login                  
                </button>        
        </div>
          <div class="center row"> 
              <div class="col s6"><a href="#">Forgot Password?</a></div>
              <div class="col s6"><a href="signup.php">Don't Have Account?</a></div>                   
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
