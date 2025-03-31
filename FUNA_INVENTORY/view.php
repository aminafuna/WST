<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INVENTORY - VIEW PRODUCTS</title>
    <title> INVENTORY </title>
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

        h2 {
            color: purple;
            margin-top: 20px;
        }

        a {
            text-decoration: none;
            color: black;
        }

        a:hover {
            text-decoration: underline;
            color: blue;
        }

        nav a {
            font-size: 16px;
            text-decoration: none;
            color:rgb(32, 187, 235);
            margin: 0 15px;
        }

        .nav-links {
            text-align: center;
            margin: 20px 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: pink;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: purple;
            color: white;
        }

        tr:nth-child(even) {
            background-color: pink;
        }

        tr:hover {
            background-color: pink;
        }

        .action-links a {
            margin-right: 10px;
            color: #28a745; 
        }

        .action-links a.delete {
            color:purple;
        }
    </style>
</head>
<body>

<nav>
<center>
<h1> INVENTORY </h1>
    <a href="index.php"> Add Products </a>
       &nbsp; | &nbsp;
    <a href="view.php"> View Products </a>
     <p> </p>
    </center>
    </nav>

    <center>
     <h2> PRODUCT LIST </h2>
    </center>

     <table border="2px solid">
        <tr>
            <th> PRODUCT NAME </th>
            <th> PRICE </th>
            <th> QUANTITY </th>
            <th> ACTION 1 </th>
            <th> ACTION 2 </th>
        </tr>
        <?php
            include "conn.php";
            $get_data = mysqli_query($conn, "SELECT * FROM products");
            while($row = mysqli_fetch_array($get_data)){ 
                
            
         ?>
              <tr>
                <td> <?php echo $row['product_name']; ?></td>
                <td><?php echo $row['price']; ?></td>
                <td><?php echo $row['quantity']; ?></td>

                <form action = "process.php" method="POST">
                <td> <a href="update.php?id=<?php echo $row['id']; ?>"> UPDATE </a></td>
                <td> <a href="delete.php?id=<?php echo $row['id']; ?>"> DELETE </a></td>
            </form>
              </tr>
        <?php 
    } 
    ?>
     </table>

</body>
</html>