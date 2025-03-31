<?php
    include "../conn.php";
    session_start();

    $email= $_SESSION['email'];
    $getadminname = mysqli_query($conn, "SELECT * FROM admin WHERE email='$email' ");

    while($row=mysqli_fetch_object($getadminname)){
        $admin_name = $row -> admin_name;
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $admin_name; ?></title>

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
    
</head>
<body>

    <h1>Welcome Admin, <?php echo $admin_name; ?>! </h1>

    <hr> </hr>

    <a href="adminhome.php"> HOME </a> |
    <a href="user_post.php"> USER'S POST </a> |
    <a href="index.php"> LOGOUT </a> 
    
</body>
</html>