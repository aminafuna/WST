<?php
    include "conn.php";
    session_start();

    //code of reg
    if(isset($_POST['reg_button'])){

        $name=$_POST['nm'];
        $pn=$_POST['pn'];
        $email=$_POST['email'];
        $pass=$_POST['pass'];

        
        $inserusers=mysqli_query($conn, "INSERT INTO users VALUES('0','$name','$pn','$email','$pass')");
    
        if($inserusers==TRUE){
            ?>

            <script>
            alert("Registration Added Successfully!");
            window.location.href="index.php";
            </script>

                <?php
        }else{

            ?>

            <script>
            alert("Error in Register. \n Please Try Again!");
            window.location.href="index.php";
            </script>

                <?php
        }
    
    }
    //end of registration

    //code for login

    if(isset($_POST['login'])){
        
        $email=$_POST['login_email'];
        $pass=$_POST['login_pass'];
    
        $check=mysqli_query($conn, "SELECT * FROM users WHERE Email_Address='$email' AND Password='$pass' ");

        $num=mysqli_num_rows($check);



        if($num==1){

            $_SESSION['email']=$email;
            ?>

            <script>
            alert("Account Accepted! Welcome Users!");
            window.location.href="userhome.php";
            </script>

                <?php
        }else{
            ?>

            <script>
            alert("Email or Password is Not Found! \n Try Again!");
            window.location.href="index.php";
            </script>

            <?php
        }

    }

    //this is for update_profile / account

    if(isset($_POST['update_account'])) {

        $id = $_GET['id'];

        $upname = $_POST['up_name'];
        $uppn = $_POST['up_pn'];
        $upemail = $_POST['up_email'];
        $uppass = $_POST['up_pass'];

        $updateaccount = mysqli_query($conn, "UPDATE users SET FullName='$upname', Phone_Number='$uppn', Email_Address='$upemail', Password='$uppass' WHERE ID='$id' ");
    
    if($updateaccount==TRUE){

        ?>

            <script>
            alert("Data was updated!");
            window.location.href="userhome.php";
            </script>

            <?php

    }else{

        ?>

            <script>
            alert("Data was not change! \n Try Again!");
            window.location.href="userhome.php";
            </script>

            <?php
    }
    }

    //this code is for createpost.php

    if(isset($_POST['create_post'])){

        $title = $_POST['title'];
        $date = $_POST['mydate'];
        $desc = $_POST['desc'];
        $posted_by =$_POST['posted_by'];

        $insertpost = mysqli_query($conn, "INSERT INTO post VALUE('0','$title','$date','$desc','$posted_by')");

        if($insertpost==true) {

            ?>

            <script>
            alert("Post was Inserted Successfully!");
            window.location.href="userhome.php";
            </script>

            <?php
        }else{

            ?>

            <script>
            alert("Post was Inserted Unsuccessfully! \n Try Again!");
            window.location.href="createpost.php";
            </script>

            <?php
        }
    }

?>