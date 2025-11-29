<?php
$employeeName = "Magsino, Gabriella Marie";
$day = date("l");
$flavors = ["USS Butterscotch", "Cinnamon Bun Bites", "Chocolate Pudding", "Pineapple Upside Down", "The Void"];
$specialFlavor = "Triple Decker Extravaganza";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Scoops Ahoy</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>
            <?php
            if ($day == "Saturday" || $day == "Sunday") {
                echo "Weekend rush, " . $employeeName . "! Time to scoop!";
            } elseif ($day == "Friday") {
                echo "Friday frenzy, " . $employeeName . "! Keep it cool!";
            } else {
                echo "Chill vibes, " . $employeeName . "! Let's serve some smiles!";
            }
            ?>
        </h1>

        <p>Here are today's available flavors:</p>
        <ul>
            <?php
            for ($i = 0; $i < count($flavors); $i++) {
                echo "<li>" . $flavors[$i] . "</li>";
            }
            ?>
        </ul>

        <p><strong>Special Flavor of the Day:</strong> <?php echo $specialFlavor; ?></p>
    </div>
</body>
<?php include 'include/footer.php'; ?>
</html>