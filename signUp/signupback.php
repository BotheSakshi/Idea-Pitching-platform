<?php

include "../db.php";

if(isset($_POST['fname']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['field']) && isset($_POST['password']) && isset($_POST['cpassword'])){
    if($_POST['fname']!="" && $_POST['email']!="" && $_POST['phone']!="" && $_POST['field']!="" && $_POST['password']!="" && $_POST['cpassword']!=""){
        $fname = $_POST["fname"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $field = $_POST["field"];
        $password = $_POST["password"];
        $cpassword = $_POST["cpassword"];

        $validate = "SELECT * FROM users WHERE email='$email'";
        $que = mysqli_query($conn,$validate);
        $rows = mysqli_num_rows($que);
        
        if($rows==0){
        if($password == $cpassword){
            $insert = "INSERT INTO users(name,email,contact,field,password) VALUES('$fname','$email','$phone','$field','$password')";
            $que = mysqli_query($conn,$insert);

            if($que){
                echo "<script>REGISTERATION DONE</script>";
                header("Location:Signup.php");
            }
        }
        }
        else{
            echo "<script>Already User exist by these mail.</script>";
        }
        
    }
}


?>