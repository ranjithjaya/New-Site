<?php
    $title =  "Date and Time Manipulation";
    require 'includes/header.php'
?>
    <title><?php echo $title ?></title>
    <h1> <?php echo $title ?></h1>
    <br />

    <?php
    $datenow = getdate();
    echo "Today's Date: <br/>";
    echo $datenow['mday'] . '<br/>';
    echo $datenow['mon'] . "<br/>";
    echo $datenow['year'] . "<br/>";
    echo "Today's Date:" . $datenow['mday'] . '/' . $datenow['mon'] . '/' .
        $datenow['year'] . '<br/>';
    echo time();
    print date("m/d/y G.i:s<br>", time()) . '<br/>';
    print "Today is ";
    print date("j of F Y, \a\\t g.i a", time());
    ?>
    
    <?php require 'includes/footer.php' ?>
