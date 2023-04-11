<?php
/**
 * @author Anthony Gutierrez
 * Created 4/11/2023
 * 328/icecream/icecream.php
 * Order form for an Ice Cream Shoppe
 */


// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Define array
$flavors = array("vanilla", "chocolate", "strawberry", "caramel");
$cones = array("sugar"=>"Sugar Cone", "waffle"=>"Waffle Cone", "cup"=>"Cup", "cake"=>"Cake Cone");

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Ice-cream Shop</title>
    </head>
    <body>
        <h1>Welcome to my Ice-Cream Shoppe</h1>
        <form action="icecream.php" method="post">
            <h3>Choose a Flavor</h3>
            <?php
                foreach ($flavors as $flavor){
                    echo "<label><input type = 'checkbox' name='flavor[]' value='$flavor'>".ucfirst($flavor)."</label>";
                }
            ?>
            <h2>Choose One </h2>
            <?php
                foreach ($cones as $value=>$label){
                    echo "<label><input type = 'radio' name='cones[]' value='$value'>".ucfirst($label)."</label><br>";
                }
            ?>
        </form>
    </body>
</html>
