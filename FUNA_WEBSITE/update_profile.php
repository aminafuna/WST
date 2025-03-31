<?php 
include "conn.php";
session_start();

$e=$_SESSION['email'];

$getname=mysqli_query($conn, "SELECT * FROM users WHERE Email_Address='$e' ");
while($row=mysqli_fetch_object($getname)){

    $id = $row -> ID;
    $name = $row -> FullName;
    $pn = $row -> Phone_Number;
    $email = $row -> Email_Address;
    $pass = $row -> Password;

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
            font-family: Arial, sans-serif;
            background-image: url('img/4.jpg');
            background-size: cover;
            background-position: center;
            text-align: center;
            padding: 20px;
        }
        h1 {
            color: midnightblue;
        }

        nav {
            background-color: deepskyblue;
            padding: 15px 0;
            border-radius: 15px;
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

        form {
            background: powderblue;
            padding: 50px;
            border-radius: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            display: inline-block;
            text-align: left;
        }

        label {
            font-weight: bold;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: steelblue;
            color: white;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            border-radius: 4px;
        }
        input[type="submit"]:hover {
            background-color: deeppink;
        }
        p a {
            color: deepskyblue;
            text-decoration: none;
        }
        p a:hover {
            color: deeppink;
            text-decoration: underline;
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

<center>
    <h1> UPDATE PROFILE </h1>

        <form action="process.php?id=<?php echo $id; ?>" method="POST">

        <label> Full Name </label></br>
        <input type="text" name="up_name" value="<?php echo $name; ?>" required> </p>

        <label> Phone Number </label></br>
        <input type="text" name="up_pn" value="<?php echo $pn; ?>" required> </p>

        <label> Email Address </label></br>
        <input type="text" name="up_email" value="<?php echo $email; ?>" required> </p>

        <label> Password </label></br>
        <input type="text" name="up_pass" value="<?php echo $pass; ?>" required> </p>

        <input type= "submit" value="UPDATE PROFILE" name="update_account">
        </form>

</center>
</body>
</html>