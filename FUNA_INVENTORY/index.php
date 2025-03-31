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
            color:rgb(32, 187, 235);
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
    <nav>
    <h1> INVENTORY </h1>

    <center>
    <a href="index.php"> Add Products </a>
    &nbsp; | &nbsp;
    <a href="view.php"> View Products </a>
    </center>
    </nav>

    </p> </p>

    <form action="process.php" method = "POST">

        <label> Product Name </label> </br>
        <input type = "text" name = "pn" required> </p>

        <label> Price </label> </br>
        <input type = "number" name = "pr" required> </p>
        
        <label> Quantity </label> </br>
        <input type = "number" name = "qty" required> </p>

        <input type="submit" name="add_product" VALUE="ADD PRODUCT">

    </form>

</body>
</html>