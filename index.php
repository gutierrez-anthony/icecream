<?php
/**
 * @author Anthony Gutierrez
 * Created 4/11/2023
 * 328/icecream/index.php
 * Order form for an Ice Cream Shoppe
 */


// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Include Header
$title = "Order Form";
include('header.php');
// Define array
$flavors = array("vanilla", "chocolate", "strawberry", "caramel");
$cones = array("sugar"=>"Sugar Cone", "waffle"=>"Waffle Cone", "cup"=>"Cup", "cake"=>"Cake Cone");

?>
<body>
<div class="container">
    <h1>Welcome to my Ice-Cream Shoppe</h1>
    <form action="process.php" method="post">
        <h3>Choose a Flavor</h3>
        <?php
        foreach ($flavors as $flavor){
            echo "<label><input type = 'checkbox' name='flavor[]' value='$flavor'>".ucfirst($flavor)."</label><br>";
        }
        ?>
        <h2>Choose One </h2>
        <?php
        foreach ($cones as $value=>$label){
            echo "<label><input type = 'radio' name='cone' value='$value'>".ucfirst($label)."</label><br>";
        }
        ?>
        <h2>How many scoops</h2>
        <input type="text" name="scoops"><br>
        <br>
        <button type="submit">Place Order</button>
    </form>
</div>
</body>
</html>

