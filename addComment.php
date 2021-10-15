<?php
    include('Authontiction.php');
     if (isset($_POST['addComment'])) {
        include('connection.php');
        $id=mysqli_real_escape_string($conn, $_POST['id']);
        $comment = mysqli_real_escape_string($conn, $_POST['comment']);
        $user=$_SESSION['username'];
        $sql = "INSERT INTO answer(username,id,answer) VALUES ('$user','$id','$comment')";
        mysqli_query($conn, $sql);
    }
    header("location: Home.php");

?>