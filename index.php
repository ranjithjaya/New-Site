<?php
    $title =  "PHP Primer";
    require 'includes/header.php'
?>
    <title><?php echo $title ?></title>
    <h2>Hello HTML - <?php echo $title ?></h2>
    <br>
    <?php
    //Printing to HTML using echo
    echo 'Hello PHP!!!';
    echo '<br>';
    echo 'Second Line';
    echo '<br>';
    ?>
    <button type="button" class="btn btn-dark">Click me!</button>
    <button type="button" class="btn btn-primary">Click me!</button>
    <button type="button" class="btn btn-success">Click me!</button>
    <a href="https://www.heroku.com" target="_blank" class="btn btn-success">Heroku.com</a>
    
<?php require 'includes/footer.php' ?>
