<?php
    $title =  "PHP Primer";
    require 'includes/header.php'
?>
    <title><?php echo $title ?></title>
    <h1> <?php echo $title ?></h1>
    <br />


    <!-- Basic HTML -->
    <h1>Hello HTML - PHP Primer</h1>
    <br />
    <?php
    //Printing to HTML using echo
    echo 'Hello PHP!'; // You can echo HTML tags
    echo '<br/>';
    echo 'Second Line';
    echo '<br/>';
    ?>
   
   <?php require 'includes/footer.php' ?>
