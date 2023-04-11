<?php
/**
 * @author Anthony Gutierrez
 * Created 4/11/2023
 * 328/icecream/process.php
 * Confirmation page from ice-cream order
 */


// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Define Constants
define('PRICE_PER_SCOOP', 2.00);
define('SALES_TAX', 0.08);

// Include Header
$title = "Order Summary";
include('header.php');
?>
<body>
<div class="container">
    <h1>Thank you for your order!</h1>
    <?php
//        echo "<pre>";
//        var_dump($_POST);
//        echo "</pre>";

        $numScoops = $_POST['scoops'];
        $cone = $_POST['cone'];
        $flavors = $_POST['flavor'];
        $flavorList = implode(", ", $flavors);

        // Make sure flavors does not exceed scoops
        if(sizeof($flavors) > $numScoops){
            echo "<h2>Oops! You have more scoops.</h2>";
            return;
        }

        // Calculate Price
        $subtotal = $numScoops * PRICE_PER_SCOOP;
        $total = $subtotal + ($subtotal * SALES_TAX);

        // Display Summary
        echo "<p>Number of scoops: $numScoops</p>";
        echo "<p>Cone Selection: $cone</p>";
        echo "<p>Flavors Selected: $flavorList</p>";

        echo "<p>Subtotal: $". number_format($subtotal, 2)."</p>";
        echo "<p>Total: $". number_format($total, 2)."</p>";

    ?>
</div>
</body>
<html>
