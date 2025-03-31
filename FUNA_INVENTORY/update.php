<?php
    include "conn.php";

    if(isset($_GET['id'])) {
        $id = $_GET['id'];

        $get_product = mysqli_query($conn, "SELECT * FROM products WHERE id = '$id'");
        $product = mysqli_fetch_array($get_product);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INVENTORY</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 0;
        }
        
        h1 {
            text-align: center;
            margin-top: 20px;
            color: skyblue;
        }
        
        nav {
            text-align: center;
            margin: 10px 0;
        }

        nav a {
            font-size: 16px;
            text-decoration: none;
            color: #4CAF50;
            margin: 0 15px;
        }

        nav a:hover {
            text-decoration: underline;
        }

        form {
            max-width: 400px;
            margin: 30px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        form label {
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 5px;
            display: block;
        }

        form input[type="text"],
        form input[type="number"] {
            width: 100%;
            padding: 10px;
            margin: 2px 0 5px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 14px;
        }

        form input[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: skyblue;
            color: white;
            border: none;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
        }

        form input[type="submit"]:hover {
            background-color: #45a049;
        }

        .footer {
            text-align: center;
            font-size: 12px;
            color: #777;
            margin-top: 40px;
        }
    </style>
</head>
<body>
    
    <h1> UPDATE INVENTORY </h1>

    <center>
    <a href="index.php"> Add Products </a>
    &nbsp; | &nbsp;
    <a href="view.php"> View Products </a>
    </center>

    </p> </p>

    <div class="form-container">
        <form action="process.php" method="POST">

            <label for="pn">Product Name</label>
            <input type="text" name="updpn" value="<?php echo $product['product_name']; ?>" required>

            <label for="price">Price</label>
            <input type="number" name="price" value="<?php echo $product['price']; ?>" required>

            <label for="qty">Quantity</label>
            <input type="number" name="updqty" value="<?php echo $product['quantity']; ?>" required>

            <input type="submit" name="update" value="UPDATE PRODUCT">
        </form>
    </div>

</body>
</html>