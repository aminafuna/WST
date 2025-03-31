<?php
include "conn.php";

if(isset($_POST['add_product'])) {

    $pn = $_POST['pn'];
    $pr = $_POST['pr'];
    $qty = $_POST['qty'];

    $insert = mysqli_query($conn, "INSERT INTO products VALUES('0','$pn','$pr','$qty')");

    if($insert == TRUE) {
        ?>
        <script>
            alert("Account Added Successfully!");
            window.location.href = "view.php";
        </script>

        <?php
    }else{
        ?>
        <script>
            alert("Error in Adding!");
            window.location.href = "index.php";
        </script>

        <?php
    }
}

if(isset($_POST['update'])) {

    $id = $_POST['id'];
    $upn = $_POST['updpn'];
    $upr = $_POST['price'];
    $uqty = $_POST['updqty'];

    $updateitem = "UPDATE products SET product_name='$upn', price='$upr', quanity='$uqty' WHERE id='$id'";

    if($updateitem == TRUE){

        ?>
        <script>
            alert("Product Update Successfully!");
            window.location.href = "view.php";
        </script>

        <?php
    }else{
        ?>
        <script>
            alert("Error in Updating!");
            window.location.href = "view.php";
        </script>

        <?php

    }
}

if(isset($_POST['delete'])){

    $id = $_POST['id'];

    $deleteitem = "DELETE FROM products WHERE id='$id'";

    if($deleteitem == TRUE){

        ?>
        <script>
            alert("Product Delete Successfully!");
            window.location.href = "view.php";
        </script>

        <?php
    }else{
        ?>
        <script>
            alert("Error in Deleting!");
            window.location.href = "view.php";
        </script>

        <?php
    }
}


?>