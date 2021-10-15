<?php 
    include('Authontiction.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <style>
            .question{
                border: 2px solid black;
                width: 100%;
                margin: 0px;
                padding: 0px;
            }
            .question:hover{
                background-color: gray;
                border: 3px solid red;
            }
            div p{
                font-size: 25px;
            }
            div:hover{
                border

            }
        </style>
        <title>Home Page</title>
        <script>
            function navigate(id){
                document.getElementById('hide').value=id;
                document.getElementById('form').submit();
            }
            function logout(){
                window.location="logout.php";
            }
            function addquestion(){
                window.location="AddTheQuestion.php";
            }
        </script>
    </head>
    <body>
        <h1 style="margin-left:1000px;width:200px;border: 3px solid black;background-color:red;" onclick='logout()'>Log out</h1>
        <h1 style="margin-left:1000px;width:200px;border: 3px solid black;background-color:aquamarine;" onclick='addquestion()'>Add Question</h1>
        <?php echo "<h3 style='background-color:lightblue;width:200px;border: 3px solid black;margin-left:1000px' class='right'>Hi ", $_SESSION['username'],"!</h3>"; ?>
        <form method="post" id="form" name="whichQuestion" action="question.php" style="display: table-row;">
        <?php
            try{
            //print_r($_SESSION['username']);
            
            include_once('connection.php');
            
            $sql="SELECT * FROM question;";
            if($result=mysqli_query($conn, $sql)){
                $num=100/mysqli_num_rows($result);
                while($question=mysqli_fetch_array($result)){
                    echo "<div style='height: {$num}%' onclick='navigate(".$question['id'].")' class='question'>";
                    echo "<h1 style='height: {$num}%'>";
                    echo $question['title'];
                    echo "</h1>";
                    echo "<p>";
                    $temp=substr($question['question'],0,60)."....";
                    echo $temp;
                    echo "</p>";
                    echo "</div>";
                }
        }else{
            echo "<h1>No questions yet</h1>";
        }
        }
            catch(PDOException $e){
                print($e);
            }
        ?>
        <input type="hidden" id="hide" name="question">
        </form>
    </body>
</html>