<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Strings</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>

          <?php
            $phrase = "Atlas25";
            $phraseU =strtoupper($phrase);
            $phraseL = strtolower($phrase);
            $phraseLen= strlen($phrase);
            //echo $phrase;

            echo("<h1>String Functions: </h1>");
            echo "<hr>";
            echo "<h3>Welcome to php</h3>";

            echo 
            "<ol>
                <li>These are some string fn</li>
                <li>String: $phrase</li>
                <li>strtolow: $phraseL</li>
                <li>strtoupper: $phraseU</li>
                <li>strlen: $phraseLen</li>
                <li>And obviously NULL</li>
                <li>Indexing is valid: $phrase[0]</li>
                <li>Indexing is valid even for qoute 'sarthak[0]':</li> 
            
            </ol>";
            echo "<ul><li>'sarthak'[0]</li><ul>";

            echo "<p>Strings could also be altered by using str_replace('word to be replaced', 'option' ,'$ varName')</p>";
            $name = "php is fun";
            echo "<li>Initial : $name</li>";
            $nameA = str_replace("php","JS",$name);
            echo "<li>Final : $nameA</li>";
            echo "<li>substr()</li>";
            $name2 = substr($name,2,4);
            echo "<li>Final : $name2</li>";

            
          ?>  


        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <script src="" async defer></script>
    </body>
</html>