    <?php 
        $title = "Index";
        include 'includes/header.php' 
    ?>

    <!-- Basic HTML -->
    <h1>Hello HTML - PHP Primer</h1>
    <br/>
    <?php 
    /*  */  // Printing to HTML using echo
        echo 'Hello PHP!';
        echo '<br/>'; 
        echo 'Second Line';
        echo '<br/>'; 

    // declare variable
    $name = 'Cian Walters';
    $age = 29;
    //echo variable    
    echo $name;
    echo '<h1>My Name Is: '.$name. '</h1>';  // Concatination done with (.) .$name.
    echo '<h1>My Age Is: '.$age. '</h1>';  // Concatination done with (.) .$name.
    //Echo using double quotes and interpolation
    echo "<h1>My Name Is: $name </h1>";  // When double qoutation is used ("") you don't need to concatinate with (.)
?>
<button type="button" class="btn btn-dark">Click Me</button>
<button type="button" class="btn btn-primary">Click Me</button>
<button type="button" class="btn btn-success">Click Me</button>
<a href="https://www.heroku.com" target="_blank" class="btn btn-danger">Heroku.com</a>



<?php
require 'includes/footer.php' 
?>