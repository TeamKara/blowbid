<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Flat HTML5/CSS3 Login Form</title>
    
    
    
    
        <link rel="stylesheet" href="css/style.css">

    
    
    
  </head>

  <body>

    <div class="login-page">
  <div class="form">
    
    <form class="login-form" action="registration.php" method="POST">
    <h2> REGISTER </h2>
       <input name="username" type="text" placeholder="USERNAME"/>
       <input name="phone" type="text" placeholder="PHONE NUMBER"/>
        <input name="email" type="email" placeholder="EMAIL"/>
      <input name="password" type="password" placeholder="PASSWORD"/>
       <input name="cpassword" type="password" placeholder="CONFIRM PASSWORD"/>

       <button type="submit" name="submit" value="Create Account"> CREATE ACCOUNT</button>
    </form>
    <p class="message">Already registered? <a href="#">sign In</a></p>
    <br>
    <?php
      include 'database.php';
      if(isset($_POST['submit'])){
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
  </div>
</div>
     
    
  </body>
</html>
