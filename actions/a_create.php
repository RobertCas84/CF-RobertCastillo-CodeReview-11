<?php
    require_once 'db_connect.php';
    

    if($_POST){
        $image= $_POST["image"];
        $name= $_POST["name"];
        $age= $_POST["age"];
        $breed= $_POST["breed"];
        $description= $_POST["description"];
        $hobbies= $_POST["hobbies"];
        $location= $_POST["location"];
        $type= $_POST["type"];
        
        
        $sql = "INSERT INTO `pets` (`image`, `name`, `age`,`breed`,
         `description`,`hobbies`, `location`, `type`) 
        VALUES ('$image','$name','$age','$breed','$description','$hobbies','$location','$type')";
        
        /*var_dump($sql);*/

        if(mysqli_query($conn,$sql)){
            echo "success
            <a href= '../index.php'>Back to the homepage </a>
            ";
        }else{ 
            echo "error";
         
    }
 }
?>