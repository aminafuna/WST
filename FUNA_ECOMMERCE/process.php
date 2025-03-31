<?php
    include "conn.php";

    //this code is to upload picture
    if(isset($_POST['add_item'])){

        $fileName = $_FILES['pic']['name'];
        $fileTmpName = $_FILES['pic']['tmp_name'];

        $itemName = $_POST['in'];
        $insert = mysqli_query($conn, "INSERT INTO items VALUES('0','$fileName','$itemName')");

        if($insert==TRUE){

                $fileDestination = 'items_pic/'.$fileName;
                move_uploaded_file($fileTmpName, $fileDestination);

                ?>
                    <script>
                        alert("Item Added Successfully!");
                        window.location.href="view_item.php";
                    </script>
                <?php

        }else{

            ?>
                    <script>
                        alert("Item Did Not Added. \n Try Again!");
                        window.location.href="index.php";
                    </script>
                <?php

        }
    }


    //for delete button

    if(isset($_POST['delete'])){

        $id = $_POST['ID'];
    
        $deleteitem = "DELETE FROM products WHERE ID='$id'";
    
        if($deleteitem == TRUE){
    
            ?>
            <script>
                alert("Product Delete Successfully!");
                window.location.href = "view_item.php";
            </script>
    
            <?php
        }else{
            ?>
            <script>
                alert("Error in Deleting!");
                window.location.href = "view_item.php";
            </script>
    
            <?php
        }
    }
?>