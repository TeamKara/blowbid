<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Online Blow Bid</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<!--Less styles -->
   <!-- Other Less css file //different less files has different color scheam
  <link rel="stylesheet/less" type="text/css" href="themes/less/simplex.less">
  <link rel="stylesheet/less" type="text/css" href="themes/less/classified.less">
  <link rel="stylesheet/less" type="text/css" href="themes/less/amelia.less">  MOVE DOWN TO activate
  -->
  <!--<link rel="stylesheet/less" type="text/css" href="themes/less/bootshop.less">
  <script src="themes/js/less.js" type="text/javascript"></script> -->
  
<!-- Bootstrap style --> 
    <link id="callCss" rel="stylesheet" href="themes/bootshop/bootstrap.min.css" media="screen"/>
    <link href="themes/css/base.css" rel="stylesheet" media="screen"/>
<!-- Bootstrap style responsive --> 
  <link href="themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>
  <link href="themes/css/font-awesome.css" rel="stylesheet" type="text/css">
<!-- Google-code-prettify --> 
  <link href="themes/js/google-code-prettify/prettify.css" rel="stylesheet"/>
<!-- fav and touch icons -->
    <link rel="shortcut icon" href="themes/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="themes/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="themes/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="themes/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="themes/images/ico/apple-touch-icon-57-precomposed.png">
  <style type="text/css" id="enject"></style>
  </head>
<body>
<div id="header">
<div class="container">
<div id="welcomeLine" class="row">
  <div class="span6">Welcome!<strong> Guest</strong></div>

</div>
<!-- Navbar ================================================== -->
<div id="logoArea" class="navbar">
<a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>
</a>
  <div class="navbar-inner">
    <a class="brand" href="index.html"><h1>BLOW BID </h1></a>
    
    <ul id="topMenu" class="nav pull-right">
   
     <li class=""><a href="#register" role="button" data-toggle="modal" style="padding-right:0"><span class="btn btn-large btn-success">REGISTER</span></a></li>
  
   <li class=""><a href="#login" role="button" data-toggle="modal" style="padding-right:0"><span class="btn btn-large btn-success">Login</span></a></li>
     
     <div id="register" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="false" >
      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      <h3>Registration</h3>
      </div>
      <div class="modal-body">
      <form class="form-horizontal loginFrm"  action="" method="POST">
        <div class="control-group">               
        <input name="username" type="text" placeholder="USERNAME"/>
        </div>
        <div class="control-group">
        <input name="phone" type="text" placeholder="PHONE NUMBER"/>
        </div>
              <div class="control-group">
         <input name="email" type="email" placeholder="EMAIL"/>
        </div>
              <div class="control-group">
         <input name="password" type="password" placeholder="PASSWORD"/>
        </div>
              <div class="control-group">
        <input name="cpassword" type="password" placeholder="CONFIRM PASSWORD"/>
        </div>
        <div class="control-group">
        
        </div>
        
      <button type="submit" name="register" class="btn btn-success">Create Account</button>
      <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
      </form> 
            <p class="message">Already registered? <a href="#login" data-dismiss="modal"  data-toggle="modal">sign In</a></p>

      </div>
          
        
          
          
  </div>
  
     
<div id="login" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="false" >
      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      <h3>Login Block</h3>
      </div>
      <div class="modal-body">
      <form class="form-horizontal loginFrm" action="" method="POST">
        <div class="control-group">               
        <input type="text" name="username" placeholder="USERNAME">
        </div>
        <div class="control-group">
         <input  type="password" name="password" placeholder="PASSWORD"/>
        </div>
        <div class="control-group">
        <label class="checkbox">
        <input type="checkbox"> Remember me
        </label>
                   <?php 
    
//PHP code for  Login given below      
   include 'database.php';
      if(isset($_POST['login'])){
      //sending data from form to variables
        $username = $_POST['username'];
        $password=$_POST['password'];
       

          //check if email hasnt been used before
         $checker= $con->query("SELECT * FROM user WHERE username='$username' and password='$password'");
        
        $row=$checker->fetch_array();
 
        if($username == $row["username"] && $password == $row["password"]){
            
            session_start();
            $_SESSION["userSession"]=$username;
            $track = $_SESSION["userSession"];
            echo ("<SCRIPT LANGUAGE ='Javascript'>window.alert(".$track.")</SCRIPT>");
            header("Location: home.php");
       
        
      }
  else{
   
    echo "<script>window.alert('INCORRECT USERNAME OR PASSWORD')</script"; 
  }
}



?>
        </div>

         
      <button type="submit" name="login" class="btn btn-success">Sign in</button>

      <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
      </form>
      </div>
          
          
  </div>
  
    </ul>
  </div>
</div>
</div>
</div>
<!-- Header End====================================================================== -->
<div id="carouselBlk">
  <div id="myCarousel" class="carousel slide">
    <div class="carousel-inner">
      <div class="item active">
      <div class="container">
      <a href="register.html"><img style="width:100%" src="themes/images/carousel/1.png" alt="special offers"/></a>
      <div class="carousel-caption">
          <h4>Second Thumbnail label</h4>
          <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
        </div>
      </div>
      </div>
      <div class="item">
      <div class="container">
      <a href="register.html"><img style="width:100%" src="themes/images/carousel/2.png" alt=""/></a>
        <div class="carousel-caption">
          <h4>Second Thumbnail label</h4>
          <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
        </div>
      </div>
      </div>
      <div class="item">
      <div class="container">
      <a href="register.html"><img src="themes/images/carousel/3.png" alt=""/></a>
      <div class="carousel-caption">
          <h4>Second Thumbnail label</h4>
          <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
        </div>
      
      </div>
      </div>
       <div class="item">
       <div class="container">
      <a href="register.html"><img src="themes/images/carousel/4.png" alt=""/></a>
      <div class="carousel-caption">
          <h4>Second Thumbnail label</h4>
          <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
        </div>
       
      </div>
      </div>
       <div class="item">
       <div class="container">
      <a href="register.html"><img src="themes/images/carousel/5.png" alt=""/></a>
      <div class="carousel-caption">
          <h4>Second Thumbnail label</h4>
          <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
      </div>
      </div>
      </div>
       <div class="item">
       <div class="container">
      <a href="register.html"><img src="themes/images/carousel/6.png" alt=""/></a>
      <div class="carousel-caption">
          <h4>Second Thumbnail label</h4>
          <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
        </div>
      </div>
      </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div> 
</div>
<div id="mainBody">
  <div class="container">
  <div class="row">
<!-- Sidebar ================================================== -->
  <div id="sidebar" class="span3">
    
  </div>
<!-- Sidebar end=============================================== -->
    <div class="span9">   
      <div class="well well-small">
      <h4>TESTIMONIES ALL OVER THE COUNTRY!!! <small class="pull-right">WINNERS EVERYDAY</small></h4>
      <div class="row-fluid">
      <div id="featured" class="carousel slide">
      <div class="carousel-inner">
        <div class="item active">
        <ul class="thumbnails">
        <li class="span3">
          <div class="thumbnail">
          <i class="tag"></i>
          <a href="product_details.html"><img src="themes/images/testimony/1.jpg" alt=""></a>
          <div class="caption">
            <h5>Victor Wayanma</h5>
            <p> Wow. Unbeliavable. Its so real. Thanks to the developers of this system</p>
          </div>
          </div>
        </li>
        <li class="span3">
          <div class="thumbnail">
          <i class="tag"></i>
          <a href="product_details.html"><img src="themes/images/testimony/2.jpg" alt=""></a>
          <div class="caption">
            <h5>Victor Wayanma</h5>
            <p> Wow. Unbeliavable. Its so real. Thanks to the developers of this system</p>
          </div>
          </div>
        </li>
        <li class="span3">
          <div class="thumbnail">
          <i class="tag"></i>
          <a href="product_details.html"><img src="themes/images/testimony/3.jpg" alt=""></a>
          <div class="caption">
            <h5>Victor Wayanma</h5>
            <p> Wow. Unbeliavable. Its so real. Thanks to the developers of this system</p>
          </div>
          </div>
        </li>
        <li class="span3">
          <div class="thumbnail">
          <i class="tag"></i>
          <a href="product_details.html"><img src="themes/images/testimony/4.jpg" alt=""></a>
          <div class="caption">
             <h5>Victor Wayanma</h5>
            <p> Wow. Unbeliavable. Its so real. Thanks to the developers of this system</p>
          </div>
          </div>
        </li>
        </ul>
        </div>
         <div class="item">
        <ul class="thumbnails">
        <li class="span3">
          <div class="thumbnail">
          <i class="tag"></i>
          <a href="product_details.html"><img src="themes/images/testimony/5.jpg" alt=""></a>
          <div class="caption">
             <h5>Victor Wayanma</h5>
            <p> Wow. Unbeliavable. Its so real. Thanks to the developers of this system</p>
          </div>
          </div>
        </li>
        <li class="span3">
          <div class="thumbnail">
          <i class="tag"></i>
          <a href="product_details.html"><img src="themes/images/testimony/6.jpg" alt=""></a>
          <div class="caption">
             <h5>Victor Wayanma</h5>
            <p> Wow. Unbeliavable. Its so real. Thanks to the developers of this system</p>
          </div>
          </div>
        </li>
        
        </ul>
        </div>
        </div>
        <a class="left carousel-control" href="#featured" data-slide="prev">‹</a>
        <a class="right carousel-control" href="#featured" data-slide="next">›</a>
        </div>
        </div>
    </div>
    
       

    </div>
    </div>
  </div>
</div>
<!-- Footer ================================================================== -->
  <div  id="footerSection">
  <div class="container">
    <div class="row">
      <div class="span3">
        <h5>ACCOUNT</h5>
        <a href="login.html">YOUR ACCOUNT</a>
        <a href="login.html">PERSONAL INFORMATION</a> 
        <a href="login.html">ADDRESSES</a> 
        <a href="login.html">DISCOUNT</a>  
        <a href="login.html">ORDER HISTORY</a>
       </div>
      <div class="span3">
        <h5>INFORMATION</h5>
        <a href="contact.html">CONTACT</a>  
        <a href="register.html">REGISTRATION</a>  
        <a href="legal_notice.html">LEGAL NOTICE</a>  
        <a href="tac.html">TERMS AND CONDITIONS</a> 
        <a href="faq.html">FAQ</a>
       </div>
      <div class="span3">
        <h5>OUR OFFERS</h5>
        <a href="#">NEW PRODUCTS</a> 
        <a href="#">TOP SELLERS</a>  
        <a href="special_offer.html">SPECIAL OFFERS</a>  
        <a href="#">MANUFACTURERS</a> 
        <a href="#">SUPPLIERS</a> 
       </div>
      <div id="socialMedia" class="span3 pull-right">
        <h5>SOCIAL MEDIA </h5>
        <a href="#"><img width="60" height="60" src="themes/images/facebook.png" title="facebook" alt="facebook"/></a>
        <a href="#"><img width="60" height="60" src="themes/images/twitter.png" title="twitter" alt="twitter"/></a>
        <a href="#"><img width="60" height="60" src="themes/images/youtube.png" title="youtube" alt="youtube"/></a>
       </div> 
     </div>
    <p class="pull-right">&copy; Bootshop</p>
  </div><!-- Container End -->
  </div>
<!-- Placed at the end of the document so the pages load faster ============================================= -->
  <script src="themes/js/jquery.js" type="text/javascript"></script>
  <script src="themes/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="themes/js/google-code-prettify/prettify.js"></script>
  
  <script src="themes/js/bootshop.js"></script>
    <script src="themes/js/jquery.lightbox-0.5.js"></script>
  
 <!-- PHP code for registration-->
    <?php
      include 'database.php';
      if(isset($_POST['register'])){
      //sending data from form to variables
        $username = $_POST['username'];
        $phone=$_POST['phone'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $cpassword = $_POST['cpassword'];

        if ($password != $cpassword) {
          echo "<font color='red'>Password Mismatch! </font>";
          exit; 
          
        }
        else
        {

          //check if email hasnt been used before
         $checker= $con->query("SELECT * FROM user WHERE username='$username' and phone='$phone'");
        
        $count=$checker->num_rows;
 
          if($count==0){
       
        
        $query = "INSERT INTO user (username,phone,email,password) VALUES('$username','$phone','$email','$password')";

        if(mysqli_query($con,$query)){
          echo "<script>window.alert('Thank you!.. Registration Successful !!')</script";
        }
        }    
        else{
          echo "<script>window.alert('User Already Exist!!')</script"; 
         
        }     
      }
}
       ?>

  

</body>
</html>