<?php
include "conn.php";
session_start();

//this code is for registration
if(isset($_POST['reg'])) {

    
    $fn = $_POST['fn'];
    $ln = $_POST['ln'];
    $gd = $_POST['gd'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    //VALIDATE
    $check_email = mysqli_query($conn, "SELECT * FROM customers WHERE email ='$email' ");
    $num_email = mysqli_num_rows($check_email);

    if($num_email <= 0){

    //INSERT DATA
    $insert = mysqli_query($conn, "INSERT INTO customers VALUES('0','$fn','$ln','$gd','$email','$pass')");
    
    
    if($insert == TRUE){
    ?>

    <script>
    alert ("Successful Registration!");
    window.location.href="index.php";
    </script>
    
    <?php

    }else{
    ?>

    <script>
    alert ("Error in Registration!");
    window.location.href="index.php";
    </script>

    <?php
}

    }else{
        ?>

    <script>
    alert ("Email already exist!");
    window.location.href="index.php";
    </script>

    <?php

    }  
}
//closing for registration


//code for login
if(isset($_POST['log'])){

    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $check_login = mysqli_query($conn, "SELECT * FROM customers WHERE email='$email' && pass='$pass' ");
    $num_login = mysqli_num_rows($check_login);

    if($num_login >= 1){
        $_SESSION['myemail'] = $email;

        ?>

        <script>
        alert ("Login Successful! \nWELCOME CUSTOMER!");
        window.location.href="customer/index.php";
        </script>
        
        <?php

    }else{

        ?>

    <script>
    alert ("Wrong Email/Password! \nTry Again!");
    window.location.href="index.php";
    </script>

    <?php

    }

}
?>