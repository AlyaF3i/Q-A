<?php
    include('Authontiction.php');
    session_unset();
    session_destroy();
    header("location: Login.php");
?>