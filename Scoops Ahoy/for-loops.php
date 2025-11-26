<?php
$price = 1.99;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>for-loops</title>
</head>
<body>
    <h2>Prices for Large Orders</h2>
    <p>
        <?php
        for ($i = 10; $i <= 100; $i = $i + 10) {
            echo $i;
            echo ' packs cost $';
            echo $price * $i;
            echo '<br>';
        }
        ?>
    </p>
</body>
<?php include 'include-footer.php'; ?>
</html>