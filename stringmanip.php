<?php 
 $title = "String Manipulation";
include 'includes/header.php' 
?>
<h1>String Manipulation</h1>
    <?php
    //Concatenation of strings
        $phrase1 = "students who came late";
        $phrase2 = "in class, stand with Rock";
        $name = "cian walters";
        echo $phrase1 . ", named Tiffany, " . $phrase2;
        echo '<br/>';
        echo '<hr/>';
        //Sgting transformation
        echo 'Uppercase first letter: ' . ucfirst($name).'<br/>';
        echo 'Uppercase first letter of each word: ' . ucwords($name).'<br/>';
        echo 'Upper case: '. strtoupper($name).'<br/>';
        echo 'Upper case: '. strtolower("THIS WAS ALL UPPER CASE").'<br/>';
        echo '<hr/>';
        echo 'Repeat String: ' . str_repeat('a',10) . '<br/>';
        echo 'Repeat String Nested Function: ' . strtoupper (str_repeat('a',10)) . '<br/>';    //String Repeat inside Upper Case 
        '<br/>';
        echo 'Get a Substring: ' . substr($name, 2, 10). '<br/>';

        echo 'Get position of string: ' . strpos($name,'w').'<br/>';
        //Returns Null
        echo 'Find Character "a" ' . strchr($name, 'a'). '<br/>';
        echo 'Find Character "i" ' . strchr($name, 'i'). '<br/>';
        echo 'Find Character "w" ' . strchr($name, 'w'). '<br/>';

        echo 'Find Length of String: ' . strlen($name) .'<br/>';

        echo 'Without Trim: '. "A" . " B C D " . "E" . '<br/>';
        echo 'Trim spaces on both sides: '. "A" . trim(" B C D ") . "E" . '<br/>';
        echo 'Trim spaces to the left: '. "A" . ltrim(" B C D ") . "E" . '<br/>';
        echo 'Trim spaces to the right: '. "A" . rtrim(" B C D ") . "E" . '<br/>';

        echo ' Replace string with another: '. str_replace("stand", "sit", $phrase2 ) . '<br/>';


     ?>

<?php require 'includes/footer.php' ?>