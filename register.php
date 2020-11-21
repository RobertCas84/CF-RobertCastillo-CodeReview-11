<?php 
ob_start();
session_start();
if(isset($_SESSION['user'])!=""){
    header("Location: index.php");
}
include_once 'actions/db_connect.php';
$error = false;
if(isset($_POST['btn-signup'])){
 // sanitize user input to prevent sql injection
 $name = trim($_POST['name']);
  //trim - strips whitespace (or other characters) from the beginning and end of a string
  $name = strip_tags($name);
  // strip_tags — strips HTML and PHP tags from a string
  $name = htmlspecialchars($name);
 // htmlspecialchars converts special characters to HTML entities
 $email = trim($_POST[ 'email']);
 $email = strip_tags($email);
 $email = htmlspecialchars($email);
 $pass = trim($_POST['pass']);
 $pass = strip_tags($pass);
 $pass = htmlspecialchars($pass);
 if (empty($name)) {
    $error = true ;
    $nameError = "Please enter your full name.";
   } else if (strlen($name) < 3) {
    $error = true;
    $nameError = "Name must have at least 3 characters.";
   } else if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
    $error = true ;
    $nameError = "Name must contain alphabets and space.";
   }
//basic email validation
if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
    $error = true;
    $emailError = "Please enter valid email address." ;
   } else {
    // checks whether the email exists or not
    $query = "SELECT email FROM user WHERE email='$email'";
    $result = mysqli_query($conn, $query);
    $count = mysqli_num_rows($result);
    if($count!=0){
     $error = true;
     $emailError = "Provided Email is already in use.";
    }
   }
   // password validation
  if (empty($pass)){
    $error = true;
    $passError = "Please enter password.";
   } else if(strlen($pass) < 6) {
    $error = true;
    $passError = "Password must have atleast 6 characters." ;
   }
// password hashing for security
$password = hash('sha256' , $pass);
// if there's no error, continue to signup
if( !$error ) {
    $query = "INSERT INTO user(username,email,pass) VALUES('$name','$email','$password')";
    $res = mysqli_query($conn, $query);
    if ($res) {
     $errTyp = "success";
     $errMSG = "Successfully registered, you may login now";
     unset($name);
      unset($email);
     unset($pass);
    } else  {
     $errTyp = "danger";
     $errMSG = "Something went wrong, try again later..." ;
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
            <h2>Register</h2>
            <hr />
<input type ="text"  name="name"  class="form-control"  placeholder="Enter Name" maxlength="50" value="<?php echo $name ?>"  />
               <span class="text-danger"> <?php echo $nameError; ?> </span>
            <input type="email" name="email" class="form-control" placeholder="Enter Your Email" maxlength="40" value ="<?php echo $email ?>"  />
               <span  class="text-danger"> <?php echo $emailError; ?> </span>
            <input type="password" name="pass" class="form-control" placeholder="Enter Password" maxlength="15"  />
               <span class="text-danger"> <?php echo $passError; ?> </span>
            <hr />
            <button type="submit" class="btn btn-block btn-primary" name="btn-signup">Sign Up</button>
            <hr  />
            <a href="login.php"><button type='button' class='btn btn-primary'>Sign in Here...</button></a></a>
  </form>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
<?php ob_end_flush(); ?>
