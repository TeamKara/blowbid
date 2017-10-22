<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>upload product</title>    
        <link rel="stylesheet" href="css/style.css">
  </head>

  <body>

    <div class="login-page">
  <div class="form">
    
    <form class="login-form" action="" method="POST" enctype="multipart/form-data">
    <h2> UPLOAD PRODUCT</h2>
     <input name="name" type="text" placeholder="PRODUCT NAME"/>
     <input name="description" type="text" placeholder="DESCRIPTION"/>
      <input type="file" name="image"  accept="image/jpeg,png" />
      <input name="price" type="text" placeholder="PRICE"/>
       
      <button type="submit" name="submit" value="UPLOAD PRODUCT"> UPLOAD PRODUCT </button>
    </form>
   
  </div>
</div>
     
    <?php
      include 'database.php';
      if(isset($_POST['submit'])){
      //sending data from form to variables
        move_uploaded_file($_FILES["image"]["tmp_name"],"images/" . $_FILES["image"]["name"]);


        $name= $_POST['name'];
        $description=$_POST['description'];
        $file="images/".$_FILES["image"]["name"];
        $price = $_POST['price'];
        $productid = mt_rand(1000,100000000).str_replace(" ","",$name);
        $status= 1;
        //confirm that password and confirmPassword are same
        //if same continue
        //else exit code and echo red alert to user

        //confirm if username already exists
        //if exists exit code
        //else continue
        
        $query = "INSERT INTO product (name,description,image_url,price,productid,status) VALUES('$name','$description','$file','$price','$productid','$status')";

        if(mysqli_query($con,$query)){
          echo "<script>window.alert('UPLOAD SUCCESSFUL!!')</script";
        }    
        else
        {
          die('error:'.mysqli_error($con));
        }
      }

    ?>
  </body>
</html>