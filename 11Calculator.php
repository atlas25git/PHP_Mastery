<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Calculator</title>
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

        <h1>Calculator</h1>
        <hr>
        <p>Simple implementation in php</p>

            <form action="11Calculator.php" method="post">
                Num1: <input type="number" step="0.001" name="num3"><br>
                OPer  : <input type="text" name="op"><br>
                Num2: <input type="number" name="num4">
                <input type="submit" value="Add">


            </form>
        <hr>

        <?php $num1= $_POST["num3"]; 
              $num2=$_POST["num4"]; 
              $op = $_POST["op"];
              if($op == "+"){
                  echo $num1 + $num2;
              } else if($op == "-"){
                  echo $num1-$num2;
              }
              else echo "Not supported OP";

            ?>


        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <script src="" async defer></script>
    </body>
</html>