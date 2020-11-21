<?php 
ob_start();
session_start();
if(isset($_SESSION['user'])!=""){
    header("Location: index_user.php");
}
include_once 'actions/db_connect.php';
$error = false;
if(isset($_POST['btn-login'])){
 $email = trim($_POST[ 'email']);
 $email = strip_tags($email);
 $email = htmlspecialchars($email);
 $pass = trim($_POST['pass']);
 $pass = strip_tags($pass);
 $pass = htmlspecialchars($pass);
//basic email validation
if(empty($email)){
    $error = true;
    $emailError = "Please enter your email address.";
   } else if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
    $error = true;
    $emailError = "Please enter valid email address.";
   }
   if (empty($pass)){
    $error = true;
    $passError = "Please enter your password." ;
   }
// password hashing for security
$password = hash('sha256' , $pass);
// if there's no error, continue to signup
if (!$error) {
    $password = hash( 'sha256', $pass); // password hashing
    $res=mysqli_query($conn, "SELECT Id, username, pass FROM user WHERE email='$email'" );
    $row=mysqli_fetch_array($res, MYSQLI_ASSOC);
    $count = mysqli_num_rows($res); // if uname/pass is correct it returns must be 1 row
    if( $count == 1 && $row['pass' ]==$password ) {
     $_SESSION['user'] = $row['Id'];
     header( "Location: index_user.php");
    } else {
     $errMSG = "Incorrect Credentials, Try again..." ;
  }
   }
  }
?>

<!DOCTYPE html>
<html>
<head>
<title>Login & Registration System</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
   <form method="post"  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"  autocomplete="off" >
            <h2>Login.</h2>
            <hr />
            <input type="email" name="email" class="form-control" placeholder="Enter Your Email" maxlength="40" value ="<?php echo $email ?>"  />
               <span  class="text-danger"> <?php echo $emailError; ?> </span>
            <input type="password" name="pass" class="form-control" placeholder="Enter Password" maxlength="15"  />
               <span class="text-danger"> <?php echo $passError; ?> </span>
            <hr />
            <button type="submit" class="btn btn-block btn-primary" name="btn-login">Login</button>
            <hr  />
            
  </form>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
<?php ob_end_flush(); ?>
