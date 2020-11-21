
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index_user.php">Take me with you</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index_small.php">Small Pets <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="index_large.php">Large Pets <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item active">
        <a class="nav-link" href="index_senior.php">Senior Pets <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    
  </div>
</nav>

    <?php
        include ("actions/db_connect.php");

        $sql = "SELECT * FROM pets WHERE type='Small'";
        $result = mysqli_query($conn, $sql);
            /*var_dump($sql);*/
        if($result->num_rows== 0){
            echo "No result";
            
        }else {
            $rows = $result->fetch_all(MYSQLI_ASSOC);
            foreach ($rows as $key => $value){
                echo "
                <div class='container '>
                    <div class='row  mt-2'>
                <div class='card'>
                <div class='card-header'>
                ".$value["type"]."<br>
                <img src=' ".$value["image"]."'>
                </div>
                <div class='card-body'>
                <h5 class='card-title'>Name:".$value["name"]."</h5>
                <p class='card-text'>Age:".$value["age"]."</p>
                <p class='card-text'>Description:".$value["description"]."</p>
                <p class='card-text'>Hobbies:".$value["hobbies"]."</p>
                <a href='adopt.php?id=".$value['id']."'><button type='button' class='btn btn-primary'>Adopt</button></a>
  </div>
</div>
</div>
</div>";
                
               
                
                                
    }  
}   
           
?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

