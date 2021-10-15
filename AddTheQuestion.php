<?phpinclude('Authontiction.php');?>
<!DOCTYPE html>
<html>
    <head>
        <title>Add Question</title>
    </head>
    <body>
        <h1>Enter your question Here</h1>
        <form method="post" action="AddQuestion.php">
            <h3>Title: </h3>
            <input type="input" name="title" required  ><br>
            <h3>Question:</h3>
            <h6>Note: You can't Enter more than 300 character</h6>
            <!-- <input type="text" name="question" minlength="10" style="width:500px;height:200px;" maxlength="300"/>-->
           <textarea placeholder="Enter your question" name="question" required id="question" rows="20" cols="100" maxlength="300" minlength="20"></textarea>
            <br><br><input  style="font-size: 30px; font-weight: bold;background-color: aquamarine;color:blue; width: 300px;height:100px;" name="addQuestion" type="submit" />
        </form>
    </body>
</html>