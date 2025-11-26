<?php
$best_sellers = ['Mint Flare', 'Triple Decker Extravrganza', 'chocolate pudding',];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>for-each-loop</title>
</head>
<body>
    <h2>Best Sellers</h2>
    <?php foreach ($best_sellers as $product) { ?>
    <p><?= $product ?></p>
<?php } ?>
</body>
<?php include 'include-footer.php'; ?>
</html>