<?php

include "../db.php";

if(isset($_POST["port"]) && isset($_POST["age"]) && isset($_POST["gender"]) && isset($_POST["title"]) && isset($_POST["idea"]) && isset($_POST["work"])){
    $port = $_POST["port"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $title = $_POST["title"];
    $idea = $_POST["idea"];
    $work = $_POST["work"];
    $username = $_SESSION["name"];
    if($port!="" && $age!="" && $gender!="" && $title!="" && $idea!="" && $work!=""){
        $insert = "INSERT INTO ideas(username,portfolio,age,gender,title,idea,work) VALUES('$username','$port','$age','$gender','$title','$idea','$work')";
        $que = mysqli_query($conn,$insert);

        if($que){
            echo "Idea is added to database";
        }
        
    }
}

?>

