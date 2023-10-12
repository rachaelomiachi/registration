<?php
require_once ('../db.php')
?>
<?php
$success=0;
$category=0;
 
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['name'];


    if(empty($name)){
        header("Location: cateory.php?error=emptyfield");
        exit();
    }

    elseif (!preg_match("/^[a-zA-Z0-9]*$/", $name) || !preg_match("/^[a-zA-Z0-9]*$/", $name)) {
        header("Location: category.php?error=invalidname");
        exit();
}else{
$sql = "INSERT INTO categories (name) VALUES (?)";
$stmt = mysqli_stmt_init($conn);

if(!mysqli_stmt_prepare($stmt, $sql)){
    header("Location:category.php?error=sqlerror");
    exit();
}else{
    
    mysqli_stmt_bind_param($stmt, "s", $name);
    mysqli_stmt_execute($stmt);
    header("Location:category.php?success=entered");
    exit();
   
    }
}



}
