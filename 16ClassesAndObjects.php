<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Classes</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
    <h3>Keep in mind the name file should be exact</h3>  
        <?php
        
        echo("<h1>Include: Modularising </h1>");
        
        echo "<hr>";
        echo "<h3>Welcome to php</h3>";

        ?>
            <p1>"Creating a class for books"</p1>
        
            <?php
                class Book {
                    var $title;
                    var $author;
                    var $pages;

                    function __construct($aTitle,$aAuthor,$aPages){
                        echo "<br>New book Created<br>";
                        $this->title = $aTitle;
                        $this->author = $aAuthor;
                        $this->pages = $aPages;
                    }

                    function isJK(){
                        if($this->author=="JK")return "yes";
                        else return "NO";
                    }
                }

                $book1 = new Book("HP","JK1",420);

                

                echo $book1->isJK();;
            ?>


           
        <hr>

       
        



        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <script src="" async defer></script>
    </body>
</html>