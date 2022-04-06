<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FeedBack</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">
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

<body class="container">
    <form action="?" method="post">
        <h1>Feedback</h1>
        <input type="radio" name="vote[ ]" value="g">Good
        <input type="radio" name="vote[ ]" value="n">Neutral
        <input type="radio" name="vote[ ]" value="b">Bad
        <br/>
        <button name="submit" type="button" class="btn btn-primary">vote!</button>
    </form>
</body>
</html>