    <?php 
        $title = "Index";
        include 'includes/header.php' 
    ?>
  <!-- Basic HTML -->
    <h1><?php echo $title ?></h1>
    <br>
    <?php
        //Pinting to HTML using echo
        echo 'Hello PHP!';
        // You can echo HTML tags
        echo '<br>';
        echo 'Second Line';
        echo '<br>';
  

   
        //declare variable
        $name= 'Cian Walters';
        $age= '28';
        //echo variable
        echo $name;
        echo '<h1>My Name is: '.$name.' </h1>'; 
        echo '<h1>My Age is: '.$age.' </h1>'; 
        // Echo using double quotes and interpolation
        echo "<h1>My Name is: $name </h1>";
    ?>
    <button type="button" class="btn btn-dark">CLICK ME!</button>
    <button type="button" class="btn btn-danger">Danger!</button>
    <button type="button" class="btn btn-warning">Cuation!</button>


    <?php
    require 'includes/footer.php' 
    ?>   