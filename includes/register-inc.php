<?php
require_once ('./../connection/db.php')
?>
<?php
$success=0;
$user=0;

if($_SERVER['REQUEST_METHOD']=='POST'){
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];

    //ERROR HANDLINGS AND EXCEPTIONS
if(empty($firstname) || empty($lastname) || empty($email)|| empty($password) || empty($cpassword)){
    header("Location: ./create-user.php?error=emptyfields");
    exit();

// ...
} elseif (!preg_match("/^[a-zA-Z0-9]*$/", $firstname) || !preg_match("/^[a-zA-Z0-9]*$/", $lastname)) {
    header("Location: ./create-user.php?error=invalidusername");
    exit();
    
} elseif ($password !== $cpassword) {
// ...

    header("location:./create-user.php?error=passwordsdonotmatch");
    exit();
  }

  else{
    $sql = "SELECT email FROM users WHERE  email = ?";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ./create-user.php?error=sqlerror");
        exit();
    
    }else {
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $rowCount = mysqli_stmt_num_rows($stmt);

        var_export($rowCount);
        // exit();
        if($rowCount > 0) {
            header("location:./create-user.php?error=emailtaken");
                exit();
            }

    else{
        $sql = "INSERT INTO users (firstname, lastname, email, password) VALUES (?,?,?, ?)";
        $stmt = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location:./create-user.php?error=sqlerror");
            exit();

             }
             else{
                // HASH PASSWORD AND STORE IT IN THE DB
                
                $hashedpass = password_hash($password, PASSWORD_BCRYPT);
                
                mysqli_stmt_bind_param($stmt, "ssss", $firstname,$lastname, $email, $hashedpass);
                mysqli_stmt_execute($stmt);
                header("Location:./../ui/login.php?success=registered");
                exit();
               
                }
             }
         }
    }
}

