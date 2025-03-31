<?php
    include "conn.php";

    var_dump($_GET);
    
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $id = mysqli_real_escape_string($conn, $id);

        $delete = mysqli_query($conn, "DELETE FROM items WHERE ID = '$id'");

        if ($delete) {
 
            ?>
            <script>
                alert("Product deleted successfully!");
                window.location.href = "view_item.php";
            </script>
            <?php
        } else {
            
            $error = mysqli_error($conn);
            echo "Error in Deleting Product: " . $error;
        }
    }
?>