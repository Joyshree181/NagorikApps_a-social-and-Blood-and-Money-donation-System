<?php
include('config.php');
if(isset($_REQUEST['submit']))
{
     

        $name=$_REQUEST['user'];
        $mail=$_REQUEST['mail'];
        $pass=$_REQUEST['pass'];
        $repass=$_REQUEST['repass'];

 

        $sql="INSERT into  signup(Username,Email Address,Password,Re-Password) values('$user','$mail','$pass','$repass')";
        if($conn->query($sql)==true)
        {
            $p='<div>Successfully Inserted</div>';
        }

        else
        {
            $p='<div class="alert alert-warning">Wrong Try</div>';
        } 
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="icon" href="img/icon.png">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
        
        <title>SignUp Page</title>
        <link rel="stylesheet" href="signup.css">
    </head>

    <body>
        <div class="box">
            
            <div class="h2"><h2>Create an account</h2></div>
           <p class="subtitle"> <b>Made By: </b>Joyshree Sarkar </p>		  
            <div class="input-field">
                <form method="POST" action="">
                <input type="text" placeholder="Username" class="user"><br>
                <input type="email" placeholder="Email Address " class="mail"><br>
                <input type="password" placeholder="Password" class="pass"><br>
				<input type="repassword" placeholder="Re-Password" class="pass"><br>
                <input type="submit" class="btn" name="signup">
            </form>
               
            </div>
          
            

        </div>
      
    </body>
</html>