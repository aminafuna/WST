<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce Display Items</title>

    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body class = "viewtable">
    
<nav>
<h1> AMINA'S SHOP </h1>
<a href = "index.php"> ADD ITEM </a> |
<a href = "view_item.php"> VIEW ITEM </a>
</nav>

<div class="conttable">

<h1> VIEW ITEM </h1>

<table border = "2px solid">
    <tr>

    <th> Picture </th>
    <th> Item Name </th>
    <th> Action </th>
    </tr>

    <?php
        include "conn.php";
        $getdata = mysqli_query($conn, "SELECT * FROM items");
        while($row = mysqli_fetch_array($getdata)){
            ?>
            <tr>
                <td><img src = "items_pic/<?php echo $row['Picture'];?>" width="100px"> </td>

                <td><?php echo $row['ItemName'];?> </td>

                <form action = "process.php" method="POST">
                    
                <td> <a href="delete.php?id=<?php echo $row['ID']; ?>"> DELETE </a></td>
            </form>
            </tr>

            <?php
        }
    ?>
    </div>
</body>
</html>