<?php
$day = 'Monday';

$offer = match($day) {
    'Monday' => '20% off Chocolate Pudding',
    'Saturday', 'Sunday' => 'The Void',
    default => '10% off your entire order',
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>match-statments</title>
</head>
<body>
    <h1>Scoops Ahoy</h1>
    <h2>Offers on <?= $day ?></h2>
    <p><?= $offer ?></p>
</body>
<?php include 'include-footer.php'; ?>
</html>