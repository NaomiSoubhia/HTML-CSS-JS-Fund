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
        <h2>Order Confirmation</h2>

        <?php
        //get form data
        $name = $_GET["name"];
        $numberPizza = $_GET["numberPizza"];
        $size = $_GET["size"];
        $shape = $_GET["shape"];
        $crust = $_GET["crust"];
        $orderType = $_GET["orderType"];
        $infos = $_GET["infos"];

        //show confirmation
        echo "<p>Thank you, <strong>$name</strong>! Your order has been received.</p>";
        echo "<p>You ordered <strong>$numberPizza</strong> $size $shape pizza(s) with <strong>$crust</strong> crust for <strong>$orderType</strong>.</p>";


        if (!empty(trim($infos))) {
            echo "<p><strong>Additional info:</strong> $infos</p>";
        }
        ?>
    </main>

    <footer>
        <p><small>© Nana's Pizzaria. All rights reserved.</small></p>
    </footer>
</body>

</html>