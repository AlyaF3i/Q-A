<?php
    session_start();
    if(isset($_POST['email']) && isset($_POST['password'])){
        include('LogInDatabase.php');
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <style>
            .Login{
                padding: 20px;
                border: 3px solid black;
                width: 400px;
                height: 700px;
                margin-left: 34%;
                margin-top: 10%;
            }
            input{
                width:100%;
            }
            form{
                width: 100%;
                margin:20px;
            }

        </style>
        <script>
            function forward(){
                location.replace("SignUp.php");
            }
        </script>
        <title>Log in</title>
    </head>
    <body>
        <div class="Login">
            
                <form method="post" action='Login.php' style="width:80%;">
                    
                    <img src="Image/loginn.png" width="380px" height="350px"/>
                     
                        <label for="email"> E-Mail: </label> 
                        <input type="email" name="email" id="name">
                        <label for="password">Password:</label><br>
                      <input type="password" name="password" id="password">
                      <?php
                        if(isset($_SESSION['error'])){
                            echo $_SESSION['error'];
                        }
                      ?>
                <br><br><input type="submit"  name="login" style="margin-left:25%;width:50%;height:10%;background-color:#00AA00;"/>
                        <a href="signup.php"><p>Sign Up</p></a>
        </form>
        </div>
    </body>
</html>