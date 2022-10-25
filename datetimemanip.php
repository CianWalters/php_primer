<?php 
 $title = "Date and Time Manipulation";
include 'includes/header.php' 
?>
    <h1>Date and Time Manipulation</h1>

    <?php
        $datenow = getdate();
        echo "Today's Date: <br/>";
        echo $datenow['mday'] . '<br/>';
        echo $datenow['mon'] . '<br/>';
        echo $datenow['year'] . '<br/>';

        echo "Today's Date: " . $datenow['mday'] . '/' . $datenow['mon'] . '/' . $datenow['year'] . '<br/>';

        echo time() . '<br/>';   // Giving irrelevant values

        print date("m/d/y G.i:s<br>", time()) . '<br/>'; //format unusable
        print "Today is ";                            //format unusable
        print date ("j of F Y, \a\\t g.i a", time()); //format unusable
    ?>

<?php require 'includes/footer.php' ?>