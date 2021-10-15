<?php include('Authontiction.php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <title> Question </title>
    <style>
        h4{
            margin-left:30px;
        }
        .comment{
            border: 3px double red;
            background-color:#AFAFAF;
            width: 500px;
        }

    </style>
    </head>
    
    <body>
        <div id="Question">
            <a href="Home.php"><button>Home</button></a> 
            <?php
                include('connection.php');
                $sql= "SELECT * FROM question where id=".$_POST['question'];
                $result=mysqli_query($conn,$sql);
                $row=mysqli_fetch_assoc($result);
                echo "<div style='width: 500px;word-wrap: normal; border:2px dash black; background-color:aqua;'><h1 style='background color: blue;'> send by: ".$row['username']."</h1><h2> Title: ".$row['title']."</h2><h3>Question: ".$row['question']."</h3></div>";
            ?>
        </div>
        <div id="comments">
            <?php 
                include('connection.php');
                $sql= "SELECT * FROM answer where id=".$_POST['question'];
                $result=mysqli_query($conn,$sql);
                while($row=mysqli_fetch_assoc($result)){
                    echo "<div class='comment'>";
                    echo "<h3 class='user'>Username: ".$row['username']."</h3>";
                    echo "<h4>".$row['answer']."</h4>";
                    echo "</div>";
                }
            ?>
        </div>
        <div>
            <form id="theForm" name="addComment" method="POST" action="addComment.php">
                <br><input type="hidden" id="id" name="id" value=<?php print $_POST['question']; ?> >
                <textarea placeholder="Enter your comment" name="comment" required id="comment" rows="5" cols="50" maxlength="300" minlength="10"></textarea>
                <input type="submit" value="Add Comment" name="addComment">
            </form>
        </div>
    </body>
</html>
