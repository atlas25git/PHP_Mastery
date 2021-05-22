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
        
        echo("<h1>Assosciative Arrays: </h1>");
        
        echo "<hr>";
        echo "<h3>Welcome to php</h3>";

        ?>

        
            <p>Same as hash maps, indexing based on given choice of indices. Keys should be unique</p>
            <form caction="08AssosciativeArrays.php" method="POST">
                Name: <input type="text" name="student">
                <input type="submit">
            
            </form>



           
        <hr>

        <?php 
        $grades = array("Atlas"=>"25","GitHub"=>"atlas25git");
        echo $grades[$_POST["student"]];


        ?>



        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <script src="" async defer></script>
    </body>
</html>