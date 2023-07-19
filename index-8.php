<?php
$title =  "HTML PHP Primer";
require 'includes/header.php'
?>
<title><?php echo $title ?></title>
<h1> <?php echo $title ?></h1>
<br />

<?php
//Printing to HTML using echo
echo 'Hello PHP!';
// You can echo HTML tags echo 'Second Line';
echo '<br/>';
echo '<br/>';
?>
<?php
// Variables need a '$'. They are not strongly typed
$name = 'Trevoir Williams';
$age = 31;
// echo variable
echo $name;
echo '<h1>My Name Is: '.$name.' </h1>';
echo '<h1>My Age Is: '.$age.' </h1>';
    echo '<br/>';
    echo 'Second Line';
    echo '<br/>';
    ?>
   
   <?php require 'includes/footer.php' ?>
