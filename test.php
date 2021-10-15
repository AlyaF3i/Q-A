<html>
    <head>
        <style>
            table,th,td,tr{
                border: 2px solid black;
            }
        </style>
    </head>
<body>
<?php

include_once('connection.php');
$result=mysqli_query($conn, 'Select * from user;');
if(mysqli_num_rows($result)>0){
    echo '<table><tr><th>Username</th><th>email</th><th>password</th><th>gender</th></tr>';
    while($row=mysqli_fetch_assoc($result)){
        echo '<tr><td>'.$row['username'].'</td><td>'.$row['email'].'</td><td>'.$row['pass'].'</td><td>'.$row['gender'].'</td></tr>';

    }
    echo'</table>';
}
?>
</body>
</html>

