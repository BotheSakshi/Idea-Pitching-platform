<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="navbar/navbar.css">
</head>
<body>




    <nav class="navbar customnavbar navbar-expand-lg custonnav">
        <div class="container-fluid">
          <a class="navbar-brand navheading" href="#">Entrepreneur</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav navul me-auto  mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link navlink active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link navlink active" aria-current="page" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link navlink active" aria-current="page" href="#">contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link navlink active" aria-current="page" href="#">Address</a>
              </li>
              <li class="nav-item">
                <a class="nav-link navlink active" aria-current="page" href="signin/signIn.php">Login Here</a>
              </li>
              <li class="nav-item">
                <a class="nav-link navlink active" aria-current="page" href="signUp/Signup.php">Register Here</a>
              </li>
             
            </ul>
           
          </div>
        </div>
      </nav>

<!-- homepage ////////////////////////////////// -->




<div class="homepagemaindiv container">



    <div class="homepageflexdiv container">


        <div>
<h1>Platform for founder to <br>  Get discovered by investors.</h1>
<button type="button" onclick="postIdea()" class="btn homepagepostbtn mt-4">Post Your Idea</button>
        </div>

        <div>
<!-- image --> 
<img src="navbar/invest-in-yourself.jpeg" class="homepageimg" alt="iamge not found">
        </div>


    </div>



</div>










      <!-- bootstrap js link -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <script src="script.js" ></script>
</body>
</html>