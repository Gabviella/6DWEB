<?php
$stock = 5;
$ordered = 3;

if ($stock > 0) {
    $message = 'In stock';
} elseif ($ordered > 0) {
    $message = 'Coming soon';
} else {
    $message = 'Sold out';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>if-elseif-statments</title>
</head>
<body>
    <h1>Scoops Ahoy</h1>
    <h2>Mint Flare</h2>
    <p><?= $message ?></p>
</body>
<?php include 'include-footer.php'; ?>
</html>