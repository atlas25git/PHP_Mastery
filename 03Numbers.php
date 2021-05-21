<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Numbers</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>

          <?php
            $phrase = 25;
            $phraseU =25 + 25;
            $phraseL = 25 -25;
            $phraseLen= 25%4;
            $phrase1 = abs($phrase);
            //echo $phrase;

            echo("<h1>Numbers: Int and Float </h1>");
            echo "<hr>";
            echo "<h3>Welcome to php</h3>";

            echo 
            "<ol>
                <li>These are some string fn</li>
                <li>25 Number: $phrase</li>
                <li>25+25: $phraseL</li>
                <li>25-25: $phraseU</li>
                <li>25%4: $phraseLen</li>
                <li>And ++,+=,() are valid</li>
                <li>abs: $phrase1</li>
                <li>max,min,sqrt,ceil etc:</li> 
            
            </ol>";
           

            
          ?>  


        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <script src="" async defer></script>
    </body>
</html>