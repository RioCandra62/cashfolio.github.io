<?php
include "../connect.php";
$id = $_GET['id'];
$del = mysqli_query($connect, "DELETE FROM purchaselog WHERE id_purchase = '$id'");
if ($del){
    ?>
    <script>
        alert("Data Deleted Successfully!")
        window.location.href = "index.php"
    </script>
    <?php
} 
?>