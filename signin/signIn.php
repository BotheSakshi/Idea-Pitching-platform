<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./signIn.css">
</head>
<body>


    <section >
        <div class="Loginmaindiv">
        
        <div class="Loginmaindiv2">
        
        <div class="LoginSubdiv2">
          
            <!-- <LoginImage/> -->
            <img src="./loginimage.svg" class="loignsvgimage" alt="image not found" >
        
        </div>
        <div class="LoginSubdiv1">   
           
        <!-- <LoginForm/> -->
        <div>
            <h1 class="LoginFormheading">Sign In</h1>
     <form action="signinback.php" method="POST">
           <div class="Loginforminput">
             
             <input type="email" name="email" class="Logininpsameclass" placeholder="Your Email"/>
     
             <input type="password" name="password" class="Logininpsameclass" placeholder="Password"/>
     
           
             <input type="submit" class="Loginsubmit" />
             <a href="../signUp/Signup.php">New User?Register Here</a>
           </div>
           </form>
         </div>
         
             </div>
             
        </div>
        
        </div>
        
    
</body>
</html>