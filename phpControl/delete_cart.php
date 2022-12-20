<?php
    include "./confit.php";
    if(isset($_REQUEST["id"])){
        $id = $_REQUEST["id"];
        $sql = "DELETE FROM cart WHERE id = {$id}";
        $result = mysqli_query( $conn , $sql );
        header("location:http://localhost/project-16-ecomin_shopping_site/vendor-dashboard.php");
        
        mysqli_close($conn);
    }
?>