<?php
    include('Authontiction.php');
    if (isset($_POST['addQuestion'])) {
        include('connection.php');
        $title=mysqli_real_escape_string($conn, $_POST['title']);
        $question = mysqli_real_escape_string($conn, $_POST['question']);
        $user=$_SESSION['username'];
        $sql = "INSERT INTO question(username,title,question) VALUES ('$user','$title','$question')";
        mysqli_query($conn, $sql);
    }
    header("location: Home.php");

?>