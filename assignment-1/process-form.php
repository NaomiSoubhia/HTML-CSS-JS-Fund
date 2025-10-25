<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Nana's Pizzaria - Order Confirmation</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <h1>Nana's Pizzaria</h1>
    </header>

    <main>
        <h2>Your Order Has Been Placed!</h2>

        <?php
        //get data
        $name = $_GET["name"] ?? "";
        $phone = $_GET["phone"] ?? "";
        $numberPizza = $_GET["numberPizza"] ?? "";
        $size = $_GET["size"] ?? "";
        $shape = $_GET["shape"] ?? "";
        $crust = $_GET["crust"] ?? "";
        $orderType = $_GET["orderType"] ?? "";
        $toppings = $_GET["topping"] ?? [];
        $infos = $_GET["infos"] ?? "";

        //check required fields
        if (!empty($name) && !empty($phone) && !empty($numberPizza) && !empty($size) && !empty($shape) && !empty($crust) && !empty($orderType)) {
            echo "<p>Thank you, <strong>" . htmlspecialchars($name) . "</strong>! Your order has been successfully submitted.</p>";
            echo "<p><strong>Order Details:</strong></p>";

            echo "<ul>";
            echo "<li><strong>Number of Pizzas:</strong> " . htmlspecialchars($numberPizza) . "</li>";
            echo "<li><strong>Size:</strong> " . htmlspecialchars($size) . "</li>";
            echo "<li><strong>Shape:</strong> " . htmlspecialchars($shape) . "</li>";
            echo "<li><strong>Crust Type:</strong> " . htmlspecialchars($crust) . "</li>";
            echo "<li><strong>Order Type:</strong> " . htmlspecialchars($orderType) . "</li>";
            echo "<li><strong>Phone Number:</strong> " . htmlspecialchars($phone) . "</li>";
            echo "</ul>";

            //toppings (loop)
            echo "<p><strong>Selected Toppings:</strong></p>";
            if (!empty($toppings)) {
                echo "<ul>";
                foreach ($toppings as $topping) {
                    echo "<li>" . htmlspecialchars($topping) . "</li>";
                }
                echo "</ul>";
            } else {
                echo "<p><em>No extra toppings selected.</em></p>";
            }

            //additional information
            if (!empty(trim($infos))) {
                echo "<p><strong>Additional Information:</strong><br>" . nl2br(htmlspecialchars($infos)) . "</p>";
            }

            echo "<p>We’ll start preparing your pizza right away!</p>";
        } else {
            echo "<p style='color:red;'>Error: Missing required information. Please go back and complete the form.</p>";
        }
        ?>
    </main>

    <footer>
        <p><small>© Nana's Pizzaria. All rights reserved.</small></p>
    </footer>
</body>

</html>