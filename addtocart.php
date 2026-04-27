<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Check if all values exist
    if(isset($_POST['product_id'], $_POST['product_name'], $_POST['price'], $_POST['image'])) {

        $product_id = $conn->real_escape_string($_POST['product_id']);
        $product_name = $conn->real_escape_string($_POST['product_name']);
        $price = $conn->real_escape_string($_POST['price']);
        $image = $conn->real_escape_string($_POST['image']);

        // Check if product already exists
        $check = $conn->query("SELECT * FROM cart WHERE product_id = '$product_id'");

        if ($check && $check->num_rows > 0) {

            // Increase quantity
            $update = $conn->query("UPDATE cart SET quantity = quantity + 1 WHERE product_id = '$product_id'");

            if(!$update){
                die("Update failed: " . $conn->error);
            }

        } else {

            $sql = "INSERT INTO cart (product_id, product_name, price, image, quantity)
                    VALUES ('$product_id', '$product_name', '$price', '$image', 1)";

            if(!$conn->query($sql)){
                die("Insert failed: " . $conn->error);
            }
        }

        header("Location: cart.php");
        exit();

    } else {
        echo "Missing product data.";
    }
}
?>