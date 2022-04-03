<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recap</title>
    <link
         href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
         rel="stylesheet"
         integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
         crossorigin="anonymous"
      />
</head>
<?php
    $adds='';
    if ($_POST['harissa'] == 'on') {
        $adds .='harissa ';
    }
    if ($_POST['salad'] == 'on') {
        $adds .='salad ';
    }
    if ($_POST['mayo'] == 'on') {
        $adds .='mayo';
    }

?>
<body>
    <div class="container" style="margin-top: 6%">
        <div class="offset-md-5" style="margin-botton">
            <div class="row" style="margin-bottom: 0.5em">
                <div class="col-2">Last Name</div> 
                <div class="col-10"><?php echo strip_tags($_POST['lastName']); ?></div>
            </div>
            <div class="row" style="margin-bottom: 0.5em"> 
                <div class="col-2">First Name</div>
                <div class="col-10"><?php echo strip_tags($_POST['firstName']); ?></div>
            </div>
            <div class="row" style="margin-bottom: 0.5em"> 
                <div class="col-3">How many sandwitchs</div>
                <div class="col-1"><?php echo $_POST['numberOfSandwitchs']; ?></div>
            </div>
            <div class="row" style="margin-bottom: 0.5em"> 
                <div class="col-2">Address</div>
                <div class="col-10"><?php echo strip_tags($_POST['address']); ?></div>
            </div>
            <div class="row" style="margin-bottom: 0.5em"> 
                <div class="col-3">Type of sandwitch</div>
                <div class="col-9"><?php echo $_POST['typeOfSandwitch']; ?></div>
            </div>
            <div class="row" style="margin-bottom: 0.5em"> 
                <div class="col-3">You added</div> 
                <div class="col-9"><?php echo $adds; ?></div>
            </div>
        </div>
    </div> 
</body>
</html>