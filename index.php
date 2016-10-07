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
    <body class="container-fluid"> 
        <div class="container-fluid">
            
        
        <div class="row">
            <div class="center row">
                <div class="center col s8">Hornbill Online Book ReserVation System</div>
                <div class="col s4 right">
                    <ul class="tabs">
                        <li class="tab col s2"><a target="_self" class="green-text" href="signup.php">Sign Up</a></li>
                        <li class=" tab col s2"><a target="_self" class="red-text"  href="login.php">Sign In</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="row">
              <div class="col s12">
                <ul class="tabs">
                    <li class="tab col s3 orange-text"><a class="active orange-text" target="_self" href="home">Home</a></li>
                  <li class="tab col s3"><a class="orange-text" href="books.html">Books</a></li>
                  <li class="tab col s3"><a class="orange-text" href="#test3">Members</a></li>
                  <li class="tab col s3"><a class="orange-text" href="#test4">News</a></li>
                </ul>
              </div>    
             </div>
            <div class="divider"></div> 
            
            <!--This is where the content of the page goes-->            
            <div id="home" class="row">
                <!--Slider class Goes Here-->
                 <div class="slider">
    <ul class="slides">
      <li>
          <img src="images/bookshare.png"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
          <img src="images/home.jpg"> <!-- random image -->
        <div class="caption left-align">
            <h3 class="green-text">Left Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
          <img src="images/search.jpg"> <!-- random image -->
        <div class="caption right-align">
          <h3>Right Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>      
    </ul>
  </div>
                <!--end of slider class-->
                <div class="row">
                    <div class="row">
                        <div class="center col s12"><h3 class="orange-text">Why Us?</h3></div>                        
                    </div>
                    <div class="row">
                        <div class="col s12 m4 l4">
                            <h4 class="grey-text">Economical</h4>
                            <p>Our online facility enables you to easily browse for books at your own home.You therefore save unnecessary transport costs 
                            to the library and therefore saving your transport costs.</p>
                        </div>
                        <div class="col s12 m4 l4"><h4 class="grey-text">Reliability</h4><p>Our online system ensures that we you are able to borrow the books that you reserve without  anybody else
                            going with a book required.We ensure our customer satisfaction.</p></div>
                        <div class="col s12 m4 l4"><h4 class="grey-text">Real Time Updates</h4><p>With the use of sms we ensure that you get real time notifications about the books on your places of interest.Thes
                            ranges from notification on the date to return a book and the availability of a book that you wanted to reserve the moment it is received in the facility.</p></div>
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
              $('.slider').slider({full_width: true});
            });        
        </script>
    </body>
</html>
