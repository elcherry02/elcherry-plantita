<?php

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION["user_id"])){
    header("Location: index.php");
}

if (isset($_POST["login"])) {
    
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, md5($_POST["password"]));
    
    $check_email = mysqli_query($conn, "SELECT id FROM users WHERE email='$email' AND password= '$password'");
    
    if(mysqli_num_rows($check_email) > 0){
        $row = mysqli_fetch_assoc($check_email);
        $_SESSION["user_id"] = $row['id'];
        header("Location: index.php");
    } else{
        echo "<script>alert('Login details is incorrect.');</script>";
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
    
        <title> login </title>
        
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
         <br><br>
         <img src="img/plant.jpg"><br><br>
         <h1>Welcome to <b> Plantita</b></h1>
         <br>
    
            <!-- log in code -->
    
      
      <form class="login_form" method="post">
          <div class="row-custom row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label" >Email</label>
        <div class="col-sm-5 text-center mt-1">
          <input type="email" class="form-control" placeholder="Enter email address" name="email" value="<?php echo $_POST["email"]; ?>" required>
        </div>
      </div>
      <div class="row-custom row mb-3">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-5 text-center mt-1">
          <input type="password" class="form-control" placeholder="Enter password" name="password" value="<?php echo $_POST["password"]; ?>" required>
        </div>
      </div>
          <br>
          <button type="submit" class="btn btn-success" name="login">Log In</button>
    </form>
    <br>
  <p>Haven't made an account yet? Sign up <a href="signup.php">here</a>.</p>
    </section>
            
</body>
</html>