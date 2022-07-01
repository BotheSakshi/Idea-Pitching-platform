<?php

include "../db.php";

if(isset($_POST['email']) && isset($_POST['password'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    if($email != "" && $password != ""){
        $search = "SELECT password,field,name FROM users WHERE email='$email'";
        $que = mysqli_query($conn,$search);
        $nrow = mysqli_num_rows($que);
        $row = mysqli_fetch_row($que);

        $_SESSION["name"] = $row[2];
        
        if($nrow > 0){
        if($password == $row[0]){
            // echo "Done Login";
            if($row[1] == "Entrepreneure"){
                header("Location:../UserIdeaForm/userform.php");
            }
            
            if($row[1] == "Investor"){
               header("Location:../profilepage/profiles.php");
            }
            
            
        }
        else{
            echo "Password Not Matched";
        }
        }
        else{
            header("Location:../signUp/Signup.php");
        }
    }
}

?>