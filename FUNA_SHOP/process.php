<?php
include "conn.php";

//this is for the registration, $ = variable
if(isset($_POST ['reg'])) {

    $fn = $_POST['fn'];
    $ln = $_POST['ln'];
    $gd = $_POST['gd'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    //insert data
    $insert = mysqli_query($conn, "INSERT INTO customers VALUES('0', '$fn', '$ln', '$gd' '$email', '$pass')");

    if($insert == TRUE) {
        ?>
            <script>
                alert("Submitted Successfully!");
                window.location.href = "index.php";
            </script>
        
        <?php
    } else {
        ?>

            <script>
                alert("Error! try Again");
                window.location.href = "index.php";
            </script>
        <?php
    }
}
   
?>
