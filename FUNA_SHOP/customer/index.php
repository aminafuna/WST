<?php
    include "../conn.php";
    session_start();

    $myemail = $_SESSION['myemail'];

    $get_name = mysqli_query($conn, "SELECT * FROM customers WHERE email = '$myemail' ");

    while($row = mysqli_fetch_object($get_name)){

        //name from the form = $row in db -> name of the row in db
        $fn = $row -> first_name;
        $ln = $row -> last_name;
        $name = $fn." ".$ln; //merging two strings

    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $name; ?> Landing Page</title>
</head>
<body>
    
    <h1>WELCOME CUSTOMER!</h1>

    <a href="logout.php">LOGOUT</a>


</body>
</html>