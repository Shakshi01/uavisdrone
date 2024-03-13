
<?php
include_once('connect.php');

$sql = "SELECT product_name,website_name,units_sold FROM `top_product` ORDER BY units_sold DESC LIMIT 5";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $output = "<table>";
    $output .= "<tr><th>Product</th><th>Units Sold</th></tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        $product_name = $row['product_name'];
        $website_name = $row['website_name'];
        $units_sold = $row['units_sold'];

        $output .= "<tr><td>$product_name</td><td>$units_sold</td></tr>";
    }

    $output .= "</table>";
    echo $output;
} else {
    echo "No products found.";
}
?>
