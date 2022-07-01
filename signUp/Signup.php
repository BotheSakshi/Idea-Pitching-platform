<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./signup.css">
</head>
<body>
    <section >
        <div class="Signupmaindiv">
        <div class="Signupmaindiv2">
        
        <div class="SignupSubdiv2">
            <!-- {/* form */} -->
            <div>
                <h1 class="SignupFormheading">Sign up</h1>
          <form action="signupback.php" method="POST">
                <div class="forminput">
                  <input type="text" name="fname" class="registerinpsameclass" placeholder="Your Name"/>
          
                  <input type="email" name="email" class="registerinpsameclass" placeholder="Your Email"/>
          
                  <input type="phone" name="phone" class="registerinpsameclass" placeholder="Mobile Number"/>
          
                  <input type="text" name="field" list="field" class="registerinpsameclass" placeholder="your field"/>
                  <datalist id="field">
                    <option value="Investor" >
                    <option value="Entrepreneure" >
                    <option value="Mentor" >
                  </datalist>
          
                  <input type="password" name="password" class="registerinpsameclass" placeholder="Password"/>
          
                  <input type="password" name="cpassword" class="registerinpsameclass" placeholder="Confirm your password"/>
          
                  <input type="submit" class="signupsubmit" />

                  <a href="../signin/signIn.php">Already User?Login Here</a>
                </div>
                </form>
              </div>
        <RegisterationForm/>
        
        </div>
        <div class="SignupSubdiv2">   
            <!-- {/*image  */} -->
            <div>
                <img src="./signupsvg.svg" class="signupsvgimage" alt="image not found" />
                    </div>
            <Signupimage/>
             </div>
        
        </div>
        
        </div>
        
            </section>
            <script src="../alert.js"></script>
</body>
</html>