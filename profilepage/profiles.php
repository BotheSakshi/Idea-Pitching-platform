<?php include "../db.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./profiles.css">
</head>
<body>

    <div>
        <div class="container">
  <!-- {/* Navbar Section */} -->
  
  
  <!-- {/* ////////////////////////////////////////////////// */} -->
  
  
  <!-- {/* heading section */} -->
  <h1 class="entreHeading">Idea Bearers</h1>
  <!-- {/* /////////////////////////////////////////////// */}
  
  
  
          {/* <div class="card" style=" width: 18rem ">
            <img src={cardimg} class="card-img-top" alt="..."/>
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up the
                bulk of the card's content.
              </p>
              <a href="https://google.com">Go Somewhere</a>
            </div>
          </div> */}
  
  
  {/* Cards Section */} -->
  
  
  
  
  <div class="row mx-auto row-cols-1 row-cols-md-3 g-5">
    <?php
      $que = "SELECT * FROM ideas";
      $exe = mysqli_query($conn,$que);
      $row = mysqli_num_rows($exe);
      while($row = mysqli_fetch_array($exe)){
    ?>
    <div class="col">
      <div class="card profilecard" >
        <div class="imagecardsec">
        <img src="./cardimage.jpeg" class="card-img-top cardimage" alt="..."/>
        </div>
        <hr />
        <div class="card-body">
          <h5 class="card-title"><?php echo $row["title"]; ?></h5>
          <p class="card-text">Name: <?php echo $row["username"]; ?></p>
          <p class="card-text">Age: <?php echo $row["age"]; ?></p>
          <p class="card-text">Idea: <?php echo $row["idea"]; ?></p>
          <p class="card-text">Work Exp: <?php echo $row["work"]; ?></p>
          <button class="btn btn-success" onclick="getId(<?php echo $row['id'] ?>)">Contact</button>
        </div>
      </div>
    </div>
  <?php } ?>

  </div>
  </div>
  </div>
    




      <!-- Bootstrap js link -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
      <script src="profile.js"></script>
</body>
</html>