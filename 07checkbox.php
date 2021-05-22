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
        
        echo("<h1>Checkboxes: </h1>");
        
        echo "<hr>";
        echo "<h3>Welcome to php</h3>";

        ?>

        <form action="07checkbox.php" method="POST">
            <p>Checknoxes basically store inputs in an arrat which could either be same for diff forms or it could be diff depending on the use case</p>
            
            Apples: <input type="checkbox" name="fruits[]" value="apples"><br>
            Mango: <input type="checkbox" name="fruits[]" value="mango"><br>
            Oranges: <input type="checkbox" name="fruits[]" value="oranges"><br>
            Pears: <input type="checkbox" name="fruits[]" value="pears"><br>
            <input type="submit">
        </form>

           
        <hr>

        <?php 
        $fruits = $_POST["fruits"];
        echo $fruits[0];
        


        ?>



        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <script src="" async defer></script>
    </body>
</html>