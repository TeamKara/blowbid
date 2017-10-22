<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title> Login Form</title>
    
    
    
    
        <link rel="stylesheet" href="css/style.css">

    
    
    
  </head>

  <body>

    <div class="login-page">
  <div class="form">
    
    <form class="login-form" action="login.php" method="POST">
    <h2> LOGIN HERE </h2>
       <input name="username" type="text" placeholder="USERNAME"/>
      
      <input name="password" type="password" placeholder="PASSWORD"/>
      
       <button type="submit" name="submit"> LOGIN</button>
    </form>
    
    <br>
    
    <?php
      include 'database.php';
      if(isset($_POST['submit'])){
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
            header("Location: bidboard.php");
       
        
      }
  else{
    echo "invalid Username or password";
  }


 
 
 $con->close();
} 
    ?>
  </div>
</div>
     
    
  </body>
</html>
