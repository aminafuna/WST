<?php 
include "conn.php";
session_start();

$e=$_SESSION['email'];

$getname=mysqli_query($conn, "SELECT * FROM users WHERE Email_Address='$e' ");
while($row=mysqli_fetch_object($getname)){

    $name = $row -> FullName;

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $name; ?> Landing User Page</title>
</head>

<style>
        body {
            font-family: 'Poppins', sans-serif;
            background: ivory;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        .post {
            background: skyblue;
            padding: 100px;
            border-radius: 50px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            display: inline-block;
            text-align: left;
        }
        nav {
            background-color: cornflowerblue;
            padding: 15px 0;
        }
        nav a {
            color: white;
            text-decoration: none;
            font-size: 18px;
            margin: 0 15px;
            font-weight: bold;
        }
        nav a:hover {
            text-decoration: underline;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
        }
        .post {
            background: #f9f9f9;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 15px;
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
        }
        .post h2 {
            color: #007bff;
        }
        .post h3 {
            color: #555;
        }
    </style>
    
<body>

<nav>
    <center>
    <h1> <?php echo $name; ?>'s WEBSITE POST</h1>
    <a href="userhome.php"> HOME </a> |
    <a href="gallery.php"> GALLERY </a> |
    <a href="about.php"> ABOUT </a> |
    <a href="createpost.php"> CREATE POST </a> |
    <a href="update_profile.php"> UPDATE PROFILE </a> |
    <a href="index.php"> LOGOUT </a>
    </center>
</nav>
    

<h1> This Is Your Post </h1>

<hr> </hr>

<div id= post>

<?php

    $getpost = mysqli_query($conn, "SELECT * FROM post WHERE posted_by='$name' ");
    while($row1=mysqli_fetch_array($getpost)){

        ?>

        <h2> Title: <?php echo $row1['title']; ?></h2>
        <h3>Date:  <?php echo $row1['mydate']; ?></h3>
        <h3>Description:  <?php echo $row1['description']; ?></h3>

        <hr> </hr>



        <?php

    }
?>
</div>
</body>
</html>