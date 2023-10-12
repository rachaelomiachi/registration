<?php

require_once ('../db.php')
?>

<?php
$success = 0;
$product = 0;
$error = 0;
$newFileName = 0;
$fileDestination = 0;
$temp_name = 0;
// echo php_ini_loaded_file();



 
if($_SERVER['REQUEST_METHOD']==='POST'){
    $name=$_POST['name'];
    $description=$_POST['description'];

    $file=$_FILES['file'];
    $name = $_FILES['file']['name'];
    $tmp_name = $_FILES['file']['tmp_name'];
    $size = $_FILES['file']['size'];
    $error = $_FILES['file']['error'];
    $type = $_FILES['file']['type'];

    $tempExtension = explode('.', $name);
    $fileExtension = strtolower(end($tempExtension));

    //allowed extensions
    $isAllowed = array('jpg', 'jpeg', 'png', 'pdf');

    if (!in_array($fileExtension, $isAllowed)) {
      header("Location: product.php?invalid type ");
      exit();
    }

      elseif ($error === 0) {
        header("Location: product.php?an error occured ");
        exit();

      }

        if ($size < 5000000) {
            $newfileName = uniqid('', true) . "." . $fileExtension;
            $fileDestination = "uploads/" . $newFileName;
            move_uploaded_file($temp_name, $fileDestination);
        }
            elseif(empty($name) || empty($description) || empty($file)|| empty($category_id) || empty($price)){
              header("Location: product.php?error=emptyfields");
              exit();
          }else

          $sql = "INSERT INTO products (name, description, file, category_id, price) 
    VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){
      header("Location:product.php?error=sqlerror");
      exit();

    }else{
    
  mysqli_stmt_bind_param($stmt, "sssis", $name, $description, $file, $category_id, $price);
  mysqli_stmt_execute($stmt);
  header("Location:product.php?success=entered");
  exit();
 
  }


    //         header("Location: product.php?uploaded success");
            
    //     }else {
    //         echo "sorry your file size is too big";
    //     }
       
    //   }else {
    //     echo "sorry,an error occured😠 try again!";
    //   }


    // }else {
    //     echo "sorry, file type not accepted";
    // }

    // $category_id=$_POST['category_id'];

    // $price=$_POST['price'];


    <?php
require_once('../db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $file = $_FILES['file'];
    $category_id = $_POST['category_id'];
    $price = $_POST['price'];

  //   if(empty($name) || empty($description) || empty($file)|| empty($category_id) || empty($price)){
  //     header("Location: product.php?error=emptyfields");
  //     exit();
  // }
  
    echo $name . "<br>";
    echo $description . "<br>";
    echo $category_id . "<br>";
    echo $price . "<br>";

    // Print the details of the uploaded file
    print_r($file);
    echo "<br>";

    $filename = $file['name'];
    echo "File name: " . $filename . "<br>";

    $filetmpname = $file['tmp_name'];
    echo "Temporary file name: " . $filetmpname . "<br>";

    $file_separate = explode('.', $filename);
    print_r($file_separate);
    echo "<br>";

    $file_error = $file['error'];
    print_r($file_error);
    echo "<br>";

    $filename_separate = explode('.', $filename);
    print_r($filename_separate);
    echo "<br>";

    // $file_extension = strtolower($filename_separate[1]);
    // print_r($file_extension);
  
    $isAllowed = array('jpg', 'jpeg', 'png', 'pdf');
    if (in_array($filename_separate, $isAllowed)) {
      $upload_images='images/'.$filename;
      move_uploaded_file($filetmpname,$upload_images);

      $sql = "INSERT INTO products (name, description, file, category_id, price) 
    VALUES (?, ?, ?, ?, ?,?)";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){
      header("Location:product.php?error=sqlerror");
      exit();

    }else{
    
  mysqli_stmt_bind_param($stmt, "sssis", $name, $description, $file, $category_id, $price);
  mysqli_stmt_execute($stmt);
  header("Location:product.php?success=entered");
  exit();
 
  }

     
    }
}
?>

    
    // elseif (!preg_match("/^[a-zA-Z0-9]*$/", $name) || !preg_match("/^[a-zA-Z0-9]*$/", $name)) {
    //     header("Location: product.php?error=invalidname");
    //     exit();
  //   elseif (!preg_match("/^[a-zA-Z0-9]*$/", $name)) {
  //     header("Location: product.php?error=invalidname");
  //     exit();
  // }
  
// }else {
  // SQL query to insert data into the 'products' table

  // echo PHP. INI File();

  
<?php

require_once ('../db.php')
?>

<?php
if($_SERVER['REQUEST_METHOD']==='POST'){
  $name=$_POST['name'];
  $description=$_POST['description'];
  $file = $_FILES['file'];
  $category_id=$_POST['category_id'];
  $price=$_POST['price'];

  echo $name;
  echo "<br>";
  echo $description;
  
  echo "<br>";
  echo $category_id;
  echo "<br>";
  echo $price;
  echo "<br>";
  //  $imagefilename = $file['name'];
   print_r($file);
   echo "<br>";

   $file = $file['name'];
   print_r($file);
   echo "<br>";

   $filetmpname = $file['tmp_name'];
   print_r($filetmpname);

   $file_seperate = explode('.', $filetmpname);
   print_r($file);

$fileerror = $file['error'];
print_r($fileerror);

$filename_seperate = explode('.',$image);
print_r($filename_seperate);

$file_extension=strtolower($filename_seperate[1]);
print_r($file_extension);
}
}
// fetching
<?php
require_once('../db.php');
$sql = "SELECT * FROM products";
$result=mysqli_query($conn,$sql);
while ($row=mysqli_fetch_assoc($result)) {
    $id=$row['id'];
    $name=$row['name'];
    $description=$row['description'];
    $file=$row['file'];
    $category_id=$row['category_id'];
    $price=$row['price'];

   
    echo '<tr>
    <td>'.$id.'</td> 
    "<br>";
    <td>'.$description.'</td>
    <td><img src='.$file.'/></td>
    <td>'.$category_id.'</td>
    <td>'.$price.'</td>
    </tr>';
}