<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
    
        <title> Plantita </title>
        
         <!-- google fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Roboto&display=swap" rel="stylesheet">
        
        <!--bootstrap-->
        <!-- CSS only -->
        <link rel="stylesheet" href="css/style.css"> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    </head>
    
    <body>
        <!--navbar-->
          <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
          <div class="container-fluid">
            <a class="navbar-brand" href="#"><b>Plantita</b></a>
            <button class="navbar-toggler" 
                    type="button" 
                    data-bs-toggle="collapse" 
                    data-bs-target="#ojt-nav" 
                    aria-controls="navbarNav" 
                    aria-expanded="false" 
                    aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="ojt-nav">
              <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#landing">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="#about">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="#creator">Creator</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="signup.php">Sign Up</a>
                </li>
              </ul>
              <span class="navbar-text">
                Home of greenery.
              </span>
            </div>
          </div>
        </nav>
    
        <section id="landing" class="text-center text-dark mb-3">
            <div class="home-bg">
                <h1 style="color: #3E885B; font-size: 80px;">Plantita</h1>
                <h2 style="text-align: center;
                margin-top: 10px;">The gallery of living greenery</h2>
                <p>Love Green. Live Green.<br> Haven't made an account yet? Sign up <a href="signup.php">here</a>.</p><br>
                <a class="landing-btn" href="login.php">Log In</a><br><br><br><br>
            </div>
        </section>
        
        <section id="about" class="text-center text-dark mb-3">
            <div class="about1">
                <table class="tbl" style="width:60%; align-items:center">
                    <tr style="height:200px">
                        <td style="width: 50%"><img src="img/plant.jpg"></td>
                        <td style="word-wrap: word-break"><h2>hi, you're here!</h2><br>Welcome to this page! If you like plants or want to know more about plants, this website is right for you! Take a good look throughout the whole site and find the plant that is for you. This is Plantita, the gallery and home of all living greenery.</td>
                    </tr>
                </table>
            </div>
        </section>
        
        <section id="creator" class="text-center text-dark mb-3">
            <div class="about1">
                <table class="tbl" style="width:60%; align-items:center">
                    <tr style="height:200px">
                        <td style="word-wrap: word-break"><h2>hello there!</h2><br>I am El Cherry Mae D. Masibay, a second year student under DICT from Polytechnic University of the Philippines. This website is a sample to be submitted for OJT.</td>
                        <td style="width: 50%"><img src="img/el.jpg" style="border-radius: 50%"></td>
                    </tr>
                </table>
            </div>
        </section>
       
         
<footer>
  <div class="foot text-center text-light mb-3">
      <p class="p1">El Cherry Mae D. Masibay</p>
      <p class="p1">For more info, contact me <a href="mailto:masibaycherry5@gmail.com">here.</a></p>
    </div>
</footer>

        
    </body>
</html>