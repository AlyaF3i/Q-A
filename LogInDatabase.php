<?php 
    include('connection.php');
    session_start();
    if (isset($_POST['login'])) {
	    $email=mysqli_real_escape_string($conn, $_POST['email']);
		$password = mysqli_real_escape_string($conn, $_POST['password']);
        $sql = "SELECT * FROM user WHERE email='{$email}' and pass='{$password}';";
        $result=mysqli_query($conn, $sql);
        $num=mysqli_num_rows($result);
        if($num==1){
            $row=mysqli_fetch_assoc($result);
            $_SESSION['username']=$row['username'];
            header("location: Home.php");
        }else{
            $_SESSION['error']='Username or Password is wrong';
            header("location: Login.php");
        
        }
    }
?>