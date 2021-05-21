<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Getting Input</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
    <h3>Keep in mind the name file should be exact</h3>  
        <?php
        
        echo("<h1>Taking Inputs: </h1>");
        
        echo "<hr>";
        echo "<h3>Welcome to php</h3>";

        ?>

            <form action="04GettingInput.php" method="get">
                Num1: <input type="number" name="num1">

                Num2: <input type="number" name="num2">
                <input type="submit" value="Add">


            </form>
        <hr>

        <?php echo $_GET["num1"] + $_GET["num2"]; ?>


        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <script src="" async defer></script>
    </body>
</html>