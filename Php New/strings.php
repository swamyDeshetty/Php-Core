<html>
    <body>
        <?php
        
        $x="swamymanusha";

        echo strlen($x); //it gives the length of the string
        echo "<h4> it gives the string length </h4>";

        echo str_word_count($x)."<br>"; //it counts the words of the string;
        echo "swamy",'python','php'."<br>";

        echo strrev($x).'<br>';
        echo str_word_count($x)."<br>";        
    
        //  str position..

        echo strpos('Hello world','world')."<br>"; //it gives the string position
        echo strpos('man vs wild','wild')."<br>";

        // str replace...
        echo str_replace('hello','swamy','php hello')









        ?>
    </body>
</html>