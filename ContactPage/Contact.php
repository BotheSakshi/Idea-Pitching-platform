<?php

include "../db.php";

$id = $_POST["id"];

$que = "SELECT * from users WHERE id='$id'";
$exe = mysqli_query($conn,$que);
$row = mysqli_num_rows($exe);

while($row = mysqli_fetch_array($exe)){
    echo $row["name"];
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Page</title>
    <link rel="stylesheet" href="../UserIdeaForm/userform.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>
    <section class="userformmain">
      <?php
    
      $select = "SELECT portfolio,age,gender,title,idea,work FROM ideas";
      $que = mysqli_query($conn,$select);
      $row = mysqli_fetch_array($que);

     ?>
      <div class="formdiv">
        <form action="Userback.php" method="POST">
        <h1 class="userformheading">Idea Details</h1>
        <div class="horizontalline"></div>
        <input type="text" name="port" placeholder="protfolio" class="inp" /><br>
 
        <input type="number" name="age" class="inp" placeholder="Enter your age" />
        <div class="genderbtn">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="Male" checked>
                <label class="form-check-label" for="exampleRadios1">
                 Male
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio"  name="gender" id="exampleRadios2" value="Female"> 
                <label class="form-check-label" for="exampleRadios1">
                 Female
                </label>
              </div>
        </div>

      
        <input type="text" name="title" placeholder="Your Idea" class="inp" required /><br>
        <textarea
          type="text"
          name="idea"
          class="inp textarea"
          placeholder="Idea Detials"
          required
        ></textarea><br>
        <textarea
          name="work"
          id=""
          placeholder="work experience"
          class="textarea"
          required
        ></textarea>
      <br>
      <br>
        <input type="submit" id="submitbtn" class="btn py-2  ">
    </form>
      </div>
    </section>



    <!--Bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="../script.js" ></script>
  </body>
</html>


