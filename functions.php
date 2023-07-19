<?php
    $title =  "Functions";
    require 'includes/header.php'
?>
    <title><?php echo $title ?></title>
    <h1> <?php echo $title ?></h1>
    <br />

    <?php
    /*Defining a Function */
    function writeMessage()
    {
        echo "You are really a nice person, Have a nice time! <br/>";
    }
    /* Calling a Function */
    writeMessage();
    echo "<hr/>";
    writeMessage();
    /* Functions with parameters */
    function addFunction($num1, $num2)
    {
        $num2 = $num2 + 1;
        $sum = $num1 + $num2;
        echo "The sum of $num1 and $num2 is: $sum <br/>";
    }
    /*Pass by Reference - use ampersand in parameter */
    function changeNum(&$num)
    {
        $num = $num + 10;
    }
    function returnProduct($num1, $num2)
    {
        $prod = $num1 * $num2;
        return $prod;
    }
    $num = 500;
    addFunction(10, 20);
    addFunction(10, $num);
    addFunction('10', "50");
    changeNum($num);
    echo $num . '<br/>';
    $return_value = returnProduct(10, 200);

    echo $return_value . '<br />';
    ?>
   
   <?php require 'includes/footer.php' ?>
