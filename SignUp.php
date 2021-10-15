<!DOCTYPE html>
<html>
    <style>
        form{
            margin-left: 35%;
            margin-top: 7%;
            border: 3px solid black;
            width: 400px;
            padding: 30px;
        }
        td{
            padding: 10px;
            border:black;
        }
        input[type="radio"]{
            margin-top: 5px;
        }
    </style>
    <script>
        function validpassword(){
            if(document.getElementById("password").value===document.getElementById("password2"))
                return true;
            document.getElementById("error").innerText="The passwords doesn't match";
            return true;
        }
        function validate(){
            ["username", "email", "password", "password2"].forEach(function(e){
                if(document.getElementById(e).value===""){
                    document.getElementById("Empty").innerText="There are empty blanks";
                    return false;
                }
                    
            }
            
            );
            return validpassword();
        }
    </script>
    <head>
        <title>Sign up</title>
    </head>
    <body>
        <form method="post" action="SignUpDatabase.php" onsubmit="return validate()">
            <h1>Primary Information: </h1>
            <table>
                <tr>
                <td>Username: </td>
            <td><input require type="text" id="username" name="username" /></td>
            </tr>
            <tr>
            <td>E-mail: </td>
            <td><input require  type="email" pattern="[A-Za-z0-9.-_+]+@[a-z.]+.[a-z]{2,4}" id="email" name="email" /></td>
            </tr>
            <tr>
            <td>Password: </td>
            <td><input require  type="password" id="password" name="password" /></td>
            </tr>
            <tr>
                <td>Re-enter password: </td>
                <td><input require  type="password" id="password2" name="password2" /></td><br>
            </tr>
            </table>
            <p style="color:red;" id="error"></p>
            <h1>Secondary Information:</h1>
            <label>Gender: </label><br>
            <input require type="radio"  name="gender" value="male"/><label>male</label><br>
            <input require type="radio"  name="gender" value="female"/><label>female</label><br><br>
            <label>Mother Language: </label><br>
            <input require type="radio"  name="lang" value="arabic"/><label>Arabic</label><br>
            <input require type="radio"  name="lang" value="english"/><label>English</label><br><br>
            <label>Date of Birth: </label><input type="date" name="birth" /><br><br>
            <p style="color: red;" id="Empty"></p>
            <input type="submit" name="signup" />
            <a href="login.php"><p>log in</p></a>
            <section>
            </section>
        </form>
    </body>
</html>