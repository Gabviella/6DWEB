<?php
declare(strict_types = 1);

$product = [
    "USS Butterscotch" => ["price" => 233.26, "stock" => 10],
    "The Void" => ["price" => 294.51, "stock" => 20],
    "Pineapple Upside Down" => ["price" => 242.68, "stock" => 39],
    "Chocolate Pudding" => ["price" => 353.42, "stock" => 8],
    "Cinnamon Bun Bites" => ["price" => 294.51, "stock" => 12]
];

$tax_rate = 12;

function get_reorder_message(int $stock): string {
    return ($stock < 10) ? "Yes" : "No";
}

function get_total_value(float $price, int $quantity): float {
    return $price * $quantity;
}

function get_tax_due(float $price, int $quantity, int $tax_rate = 0): float {
    $total_value = $price * $quantity;
    return $total_value * ($tax_rate / 100);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Function</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Scoops Ahoy</h1>
    <table>
        <tr>
            <th>Product</th>
            <th>Stock</th>
            <th>Reorder?</th>
            <th>Total Value (Php)</th>
            <th>Tax Due (Php)</th>
        </tr>
        <?php
        foreach ($product as $product_name => $data) {
            echo "<tr>";
            echo "<td>{$product_name}</td>";
            echo "<td>{$data['stock']}</td>";
            echo "<td>" . get_reorder_message($data['stock']) . "</td>";
            echo "<td>" . number_format(get_total_value($data['price'], $data['stock']), 2) . "</td>";
            echo "<td>" . number_format(get_tax_due($data['price'], $data['stock'], $tax_rate), 2) . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
<?php include 'include/footer.php' ?>
</html>
