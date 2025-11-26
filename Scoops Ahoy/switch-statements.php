<?php
$day = 'Tuesday';

switch ($day) {
    case 'Monday':
        $offer = '20% off Chocolate Pudding';
        break;
    case 'Tuesday':
        $offer = '20% off Cinnamon Bun Bytes';
        break;
    default:
    $offer = 'Buy three packs, get one free';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>switch-statments</title>
</head>
<body>
    <h1>Scoops Ahoy</h1>
    <h2>Offers on <?= $day; ?></h2>
    <p><?= $offer ?></p>
</body>
<?php include 'include-footer.php'; ?>
</html>