<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FeedBack</title>
</head>

<?php 
if ( isset ($_POST['submit'])){
    if(!empty($_POST['vote'])){
      if(isset($_COOKIE['vote'])){
        echo "<script>
            alert('You have already voted')    
        </script>";
      }else{
       setcookie("vote",$_POST['vote'][0],time()+120);}
}}
?>

<body>
    <form action="?" method="post">
        <h1>Feedback</h1>
        <input type="radio" name="vote[ ]" value="g">Good
        <input type="radio" name="vote[ ]" value="n">Neutral
        <input type="radio" name="vote[ ]" value="b">Bad
        <button name="submit">vote!</button>
    </form>
</body>
</html>