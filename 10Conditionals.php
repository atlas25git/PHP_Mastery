<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Conditional</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
    <h3>Keep in mind the name file should be exact</h3>  
        <?php
        
        echo("<h1>Conditionals: </h1>");
        
        echo "<hr>";
        echo "<h3>Welcome to php</h3>";

        ?>
            <p1>"&& || elseif work as usual"</p1>
        
            <form action="10Conditionals.php" method="get">
                
                Num1: <input type="TEXT" name="num1">
                <input type="submit" value="Param">


            </form>



           
        <hr>

        <?php 
            $var = $_GET["num1"];
            function sayHi($var){

                return strtolower($var);
            }
            $stored = sayHi($var);
            
            if($stored == "atlas")
            echo $stored;
            else echo "Not atlas";


        ?>



        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <script src="" async defer></script>
    </body>
</html>