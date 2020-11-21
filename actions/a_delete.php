<?php
    require_once 'db_connect.php';

    if($_POST["id"]){
        $id=$_POST["id"];
        $image= $_POST["image"];
        $name= $_POST["name"];
        $name= $_POST["name"];
        $age= $_POST["age"];
        $breed= $_POST["breed"];
        $description= $_POST["description"];
        $hobbies= $_POST["hobbies"];
        $location= $_POST["location"];
        $type= $_POST["type"];
        
        $sql = "DELETE FROM media WHERE id={$id}";

        var_dump($sql);

        if($conn->query($sql)){
           
        }
    }
