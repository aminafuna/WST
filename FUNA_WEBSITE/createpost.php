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
    <title><?php echo $name; ?> </title>

    <style>
        /* General Styles */
body {
    font-family: 'Poppins', sans-serif;
    background-color:rgb(158, 197, 245);
    margin: 30px;
    padding: 20px;
    text-align: center;
}

/* Header Styles */
h1 {
    color:rgb(31, 47, 126);
    margin-top: 20px;
    font-size: 28px;
    font-weight: bold;
}

/* Navigation Styles */
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

/* Form Styles */
.container {
    width: 50%;
    margin: 20px auto;
    background: white;
    padding: 20px;
    border-radius: 15px;
    box-shadow: 0px 0px 15px rgba(255, 102, 178, 0.3);
}

h2 {
    color:rgb(50, 12, 130);
    font-size: 24px;
    font-weight: bold;
}

label {
    font-size: 16px;
    font-weight: bold;
    display: block;
    margin-top: 15px;
    color: #ff3399;
}

input, textarea {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    border: 2px solid #ff99cc;
    border-radius: 10px;
    font-size: 14px;
    background-color: #fff0f5;
}

textarea {
    height: 100px;
    resize: none;
}

button {
    margin-top: 15px;
    padding: 12px 25px;
    background-color:rgb(55, 174, 253);
    color: white;
    border: none;
    border-radius: 15px;
    font-size: 16px;
    cursor: pointer;
    transition: 0.3s;
}

button:hover {
    background-color:rgb(47, 100, 246);
}
    </style>
</head>

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

    <h1> CREATE POST </h1>

    <form action="process.php" method="POST">

        <label> Title of Your Post </label> </br>
        <input type="text" name="title" required placeholder="Add Title Here . . ."> </p>

        <label> Posted Date </label> </br>
        <input type="date" name="mydate" required> </p>

        <label> Add Description </label> </br>
        <textarea cols="50" rows="10" name="desc"> </textarea> </p>

        <input type="hidden" name="posted_by" value="<?php echo $name; ?>">

        <input type="submit" name="create_post" value="POST">


    </form>

    
</body>
</html>