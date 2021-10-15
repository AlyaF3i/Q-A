<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "QA";
    try{
        $conn = new mysqli($servername, $username, $password,$dbname);
              echo "connect";
    }catch(PDOException $e){
        exit();
    }
    ///////////////////////////////////////////
    if (isset($_POST['signup'])) {
	    $email=mysqli_real_escape_string($conn, $_POST['email']);
		$username = mysqli_real_escape_string($conn, $_POST['username']);
		$password = mysqli_real_escape_string($conn, $_POST['password']);
        $gender = mysqli_real_escape_string($conn, $_POST['gender']);
		$language = mysqli_real_escape_string($conn, $_POST['lang']);
        $sql = "INSERT INTO User (username,email, pass, gender, language) VALUES ('$username','$email','$password','$gender','$lang')";
        if(mysqli_query($conn, $sql)){
            echo "Records added successfully.";
            header("location: login.php");
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        }
    }
?>