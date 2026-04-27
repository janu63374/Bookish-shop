<?php
include 'db.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Cart</title>
</head>
<body style="text-align:center; margin:0;">

<h2 style="background-color:gray; color:white; height:70px; padding-top:30px;">My Cart</h2>
<a href="index.php" style="text-decoration:none; border:1px solid black; padding:5px; border-radius:4px; color:white; background-color:black;">Back to Home</a>

<div style="display:flex; flex-direction:center; flex-wrap:wrap; align-items:center; gap:20px;">
<?php
$result = $conn->query("SELECT * FROM cart");

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo "<div style='border:2px solid #464141; padding:10px; margin:10px; width:300px; border-radius:5px;'>";
        echo "<img src='".$row['image']."' width='100'><br>";
        echo "<strong>".$row['product_name']."</strong><br>";
        echo "Price: ₹".$row['price']."<br>";
        echo "Quantity: ".$row['quantity']."<br>";
        echo "</div>";
    }

} else {
    echo "Your cart is empty.";
}
?>
</div>
</body>
</html>