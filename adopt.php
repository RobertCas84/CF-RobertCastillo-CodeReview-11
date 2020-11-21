<?php
    require_once 'actions/db_connect.php';
    if ($_GET['id']) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM user WHERE id=$id";
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
    <form action="actions/a_adopt.php" method="post">
        <h1>Send Adoption Request</h1>
        <input type="text" placeholder="Name" name="name" value="<?php echo $data['username']?>"><br>
        
        <input type="text" placeholder="e-mail" name="email" value="<?php echo $data['email']?>"><br>
        <input type="text" placeholder="Pet Name"name="name" value="<?php echo $data['name']?>"><br>
        <input type="submit" name="Send Request" >
        <input type="hidden" name="id" value="<?php echo $data['id'] ?>">

    </form>
    
</body>
</html>
<?php 
 }
?>
