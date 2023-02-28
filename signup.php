<?php

include 'config.php';

error_reporting(0);

if (isset($_SESSION["user_id"])){
    header("Location: index.php");
}

if (isset($_POST["signup"])) {
    $full_name = mysqli_real_escape_string($conn, $_POST["signup_full_name"]);
    $email = mysqli_real_escape_string($conn, $_POST["signup_email"]);
    $password = mysqli_real_escape_string($conn, md5($_POST["signup_password"]));
    $cpassword = mysqli_real_escape_string($conn, md5($_POST["signup_cpassword"]));
    
    $check_email = mysqli_num_rows(mysqli_query($conn, "SELECT email FROM users WHERE email='$email'"));
    
    
    if ($password != $cpassword){
        echo "<script>alert('Password did not match.');</script>";
    } elseif($check_email > 0){
        echo "<script>alert('Email already exists.');</script>";
    } else{
        $sql = "INSERT INTO users (full_name, email, password) VALUES('$full_name', '$email', '$password')";
        $result = mysqli_query($conn, $sql);
        if ($result){
            $_POST["signup_full_name"] = "";
            $_POST["signup_email"] = "";
            $_POST["signup_password"] = "";
            $_POST["signup_cpassword"] = "";
            echo "<script>alert('User registered successfully!');</script>";
        } else{
            echo "<script>alert('User registration failed.');</script>";
        }
    }
}

?>

<!DOCTYPE html>
<html>
    <head>
<!-- comments    -->
<!-- meta charsets specifies the character encoding for the HTML Document -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
    
        <title> signup </title>
        
        <!-- google fonts -->
         <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Roboto&display=swap" rel="stylesheet">
        
        <!--bootstrap-->
        <!-- CSS only -->
        <link rel="stylesheet" href="css/login.css"> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    </head>
<body>
     <section id="landing" class="text-center mt-3">
         <img src="img/plant1.jpg"><br><br>
         <h1>Create an account</h1>
         <br>
    
            <!-- log in code -->
    
      
      <form class="signup_form" method="post">
      <div class="row-custom row mb-3">
        <label for="fname" class="col-sm-2 col-form-label" >Full Name</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" placeholder="Enter first name" name="signup_full_name" value="<?php echo $_POST["signup_full_name"]; ?>" required>
        </div>
      </div>
    
      <div class="row-custom row mb-3">
        <label for="fname" class="col-sm-2 col-form-label" >Email</label>
        <div class="col-sm-5">
          <input type="email" class="form-control" placeholder="Enter email address" name="signup_email" value="<?php echo $_POST["signup_email"]; ?>"required>
        </div>
      </div>
          
      <div class="row-custom row mb-3">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-5">
          <input type="password" class="form-control" placeholder="Enter password" name="signup_password" value="<?php echo $_POST["signup_password"]; ?>" required>
        </div>
      </div>
          
      <div class="row-custom row mb-3">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Confirm Password</label>
        <div class="col-sm-5">
          <input type="password" class="form-control" placeholder="Confirm password" name="signup_cpassword" value="<?php echo $_POST["signup_cpassword"]; ?>" required>
        </div>
      </div>
          
          <br>
          <button type="submit" class="btn btn-success" name="signup">Sign Up</button>
    </form>
    <br>
     
     <p>Already have an account? Log in <a href="login.php">here</a>.</p>
    </section>
            
</body>
</html>