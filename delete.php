<?php
    require_once 'actions/db_connect.php';
    if ($_GET['id']) {
        $id = $_GET['id'];
        $sql = "DELETE FROM pets WHERE id=$id";
        var_dump($sql);
        if(mysqli_query($conn,$sql)){
            echo "success <br> <a href='index.php'>Back to homepage </a>";
        }else{ 
            echo"error";
 }
        
}
        
?>
