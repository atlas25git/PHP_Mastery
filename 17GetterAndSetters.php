<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>GettersAndSetters</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
    <h3>Keep in mind the name file should be exact</h3>  
        <?php
        
        echo("<h1>Getters and Setters</h1>");
        
        echo "<hr>";
        echo "<h3>Welcome to php</h3>";

        ?>
            <p1>"Custom functions are made for private members to protect these from <br> undesirable data being fed"</p1>        
            <?php
                class Book {
                    var $title;
                    private $author;
                    public $pages;

                    function __construct($aTitle,$aAuthor,$aPages){
                        echo "<br>New book Created<br>";
                        $this->title = $aTitle;
                        $this->setRating($aAuthor);
                        $this->pages = $aPages;
                    }

                    function isJK(){
                        if($this->author=="JK")return "yes";
                        else return "NO";
                    }

                    function getRating(){
                        return $this->author;
                    }
                    function setRating($rating){
                        if($rating=="JK1" || $rating == "JK")
                        {
                            $this->author = $rating;
                        }
                        else $this->author = "Atlas25";
                    }
                }

                $book1 = new Book("HP","JK11",420);

                

                echo $book1->getRating();
            ?>


           
        <hr>

       
        



        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <script src="" async defer></script>
    </body>
</html>