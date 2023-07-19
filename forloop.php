<?php
    $title =  "For Loops";
    require 'includes/header.php'
?>
    <title><?php echo $title ?></title>
    <h1> <?php echo $title ?></h1>
    <br />

<?php
// For Loops
for ($count = 0; $count < 10; $count++){ echo '<p>HELLO WORLD</p>';
}
for($count = 0; $count < 10; $count++){
echo "<p>The Count is: $count</p>";
}
?>
  
   <?php require 'includes/footer.php' ?>
