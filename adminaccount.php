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
        <!--Include the script for time-->
        <script type="text/javascript" src="js/timer.js"></script>
        
    </head>
    <body class="container-fluid"> 
        <div class="container">
            
        
        <div class="row">
            <div class="center row">
                <div class=" center col s12"><h5 class="green white-text">
                        <span id="date_time"></span>
                        <script type="text/javascript">window.onload = date_time('date_time');</script>
                    </h5>
                </div>
                
                <div class="center col s8"><img src="images/hornbill.png"></div>
                <div class="col s4 right">                    
                       <a class="green-text" href="login.php">Sign Out<i class="material-icons">settings_power</i></a>             
                    
                </div>
            </div>
            
            <div class="row">
              <div class="col s12">
                <ul class="tabs">
                    <li class="tab col s3 orange-text"><a class="active green-text" href="#home">My Profile</a></li>
                  <li class="tab col s3"><a class="orange-text" href="#reserve">Reserve</a></li>
                  <li class="tab col s3"><a class="orange-text" href="#borrowed">Borrowed Books</a></li>
                  <li class="tab col s3"><a class="orange-text" href="#penalties">Penalties</a></li>
                  <li class="tab col s3"><a class="orange-text" href="#notifications">Notifications</a></li>
                  <li class="tab col s3"><a class="orange-text" href="#clear">Clear Penalties</a></li>
                </ul>
              </div>    
             </div>
            <div class="divider"></div> 
            
            <!--This is where the content of the page goes--> 
            
            <div id="home" class="row" style="width: 800px;margin: auto">
                <div class="center card">
                    <div class="card-title grey white-text">MY PERSONAL PROFILE</div>
                    <div class="card-content">
                        <div class="row">
                            <div class=" center card-image"><img class="responsive-img circle" src="images/book1.jpg"  alt="Profile Picture"></div>                            
                         </div>
                        <div class="row">
                            <table>
                                <tr>
                                    <th>FIRST NAME</th>
                                    <th>KILIMO</th>
                                </tr>
                                <tr>
                                    <th>LAST NAME</th>
                                    <th>KIPKORIR CORNELIUS</th>
                                </tr>             
                                
                            </table>                                                       
                        </div>                        
                    </div>
                </div>
            </div>
            <!--reservations page-->
            <div id="reserve" class="row">
                <div class="col s12">
                    <h2 class="center green-text"><u>ALL AVAILABLE BOOKS</u></h2>
                </div>
                <table class="highlight">
                    <thead>
                        <tr class="cyan">
                          <th data-field="id">ISBN</th>
                          <th data-field="name">CATEGORY</th>
                          <th data-field="price">TITLE</th>
                      </tr>
                    </thead>

                    <tbody>
                      <tr>
                        <td>S005ER7</td>
                        <td>TECHNOLOGY</td>
                        <td>COMPUTER Graphics</td>
                        
                      </tr>
                      <tr>
                        <td>KL4561233</td>                        
                        <td>GEOLOGY</td>
                        <td>MACHINES AND WORK</td>
                      </tr>
                      <tr>
                         <td>KESWER0125</td>                      
                        <td>SCIENCE</td>
                        <td>SOILS AND EARTH FORMATION</td>
                      </tr>
                    </tbody>
                </table>
            </div>
            <div id="borrowed" class="row">
                Borrowed Books
            </div>
            <div id="penalties" class="row">
                <table class="highlight">
                    <thead>
                        <tr class="cyan">
                          <th  class="white-text" data-field="id">ISBN</th>
                          <th class="white-text" data-field="name">CATEGORY</th>
                          <th class="white-text" data-field="price">TITLE</th>
                          <th class="white-text" data-field="price">Total Charges</th>
                      </tr>
                    </thead>

                    <tbody>
                      <tr>
                        <td>S005ER7</td>
                        <td>TECHNOLOGY</td>
                        <td>COMPUTER Graphics</td>
                        <td>Ksh.350</td>
                        
                      </tr>
                      <tr>
                        <td>KL4561233</td>                        
                        <td>GEOLOGY</td>
                        <td>MACHINES AND WORK</td>
                        <td>Ksh.350</td>
                      </tr>
                      <tr>
                         <td>KESWER0125</td>                      
                        <td>SCIENCE</td>
                        <td>SOILS AND EARTH FORMATION</td>
                        <td>Ksh.350</td>
                      </tr>
                      <tr class="orange">
                         <td></td>                      
                        <td></td>
                        <td class="orange">Total Charges</td>
                        <td class="green">Ksh.1050</td>
                      </tr>
                    </tbody>
                </table>
                
            </div>
            <div id="notifications" class="row">
                Notifications
            </div>
            <div id="clear" class="row">
                <div class="row">
                    <div class="col s12">
                        <div class="card">
                            <div class="card-title">Clear Book Penalties</div>
                            <div class="card-content">Clear All Books</div>
                        </div>
                    </div>                    
                </div>                
            </div>
        </div>
       </div>
        
        
        <!--Javascript-->
        <script src="js/jquery.min.js"></script>
        <script src="js/materialize.min.js"></script>
        <script>            
            $(document).ready(function(){
              $('ul.tabs').tabs();
            });        
        </script>
    </body>
</html>
