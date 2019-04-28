<html>
  <head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/stu-login.css">
  </head>
  <body>
  
    <div class="container">
        <form name="myform" action="dashboard.php">
          <center>
          <fieldset id="login-area">
            <legend align="center">
            <img id="circle" src="img/fac.png">
            </legend>
              <div class="placeholders">
                <h2 id="head"> Faculty Login </h2>
                <input id="username" type="text" name="uname" placeholder="Username" required><br>
                <input id="pass" type="password" name="pass" placeholder="Password" required>
                <input id="input-btn" type="submit" value="" /><br>
              </div>
              <a id="r-pass" href="r_pass.php"> Forgot Password </a><br>
         </fieldset>
      </form>
      <div class="icon">
                   <a href="chat.php" class="sig">SIGN UP</a>
      </div>
    </div>
  </body>

  <style>
    #username {
      background-image: url('./img/fac.png');
    }
  </style>
</html>