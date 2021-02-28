<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
</head>
<body>
     <form action="formaction.php" method="POST">

     <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required><br>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Your Email Address" name="uname" required><br>

     <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required><br>

    <button type="submit">Login</button>
    <label><br>

    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>

    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>

</form>

</body>
</html>

  <?php

   extract($_REQUEST);
   $file-fopen("form-save.txt","a");

   fwrite($file,"name :");
   fwrite($file, $username . "\n");
   fwrite($file,"Email :");
   fwrite($file, $email . "\n");
   fwrite($file,"Password :");
   fwrite($file, $password . "\n");
   fclose($file);

  ?> 


