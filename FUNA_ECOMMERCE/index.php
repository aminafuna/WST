<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce</title>

    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
    <nav>
    <h1> AMINA'S SHOP </h1>
    <a href="index.php"> ADD ITEM</a> |
    <a href="view_item.php"> VIEW ITEM</a>
</nav>

    <div class = "container">
    <H1> ADD ITEM </H1>

    <!--enctype is for uploading files-->
    <form action="process.php" method="POST" enctype="multipart/form-data">


    <labe> Picture </label> </br>
    <input type="file" name="pic" required accept=".gif, .jfif, .png, .jpeg, .jpg, .webp"> </p>

    <labe> Item Name </label> </br>
    <input type="text" name="in" required placeholder="Type Here..."> </p>

    <input type="submit" name="add_item" value="ADD ITEM">

    </form>
</div>
</body>
</html>