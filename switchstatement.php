<?php
    $title =  "Switch-Satements";
    require 'includes/header.php'
?>
    <title><?php echo $title ?></title>
    <h1> <?php echo $title ?></h1>
    <br />

    <h3 style="color: green"></h3>

<?php
    // An Swich statement that will carry out an action based on the value of the variable.
    $grade = '';
    switch ($grade) {
        case 'A':
            echo '<h2 style="color: green">YOU ARE SUPERSTAR!</h2>';
            break;
        case 'B':
            echo '<h2 style="color: blue">YOU DID WELL!</h2>';
            break;
        default:
            echo '<h2 style="color: red">YOU HAVE FAILED....</h2>';
            break;
    }
    ?>
   
   <?php require 'includes/footer.php' ?>
