<?php
    require_once 'actions/db_connect.php';
    if ($_GET['id']) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM pets WHERE id=$id";
        $result = mysqli_query($conn,$sql);
        $data = $result->fetch_assoc();
        
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

</head>
<body>
    <form action="actions/a_update.php" method="post">
        <input type="text" name="image" value="<?php echo $data['image']?>"><br>
        <input type="text" name="name" value="<?php echo $data['name']?>"><br>
        <input type="text" name="age" value="<?php echo $data['age']?>"><br>
        <input type="text" name="breed" value="<?php echo $data['breed']?>"><br>
        <input type="text" name="description" value="<?php echo $data['description']?>"><br>
        <input type="text" name="hobbies" value="<?php echo $data['hobbies']?>"><br>
        <input type="text" name="location" value="<?php echo $data['location']?>"><br>
        <input type="text" name="type" value="<?php echo $data['type']?>"><br>
        <input type="submit" name="submit" >
        <input type="hidden" name="id" value="<?php echo $data['id'] ?>">

    </form>
    
</body>
</html>
<?php 
 }
?>
