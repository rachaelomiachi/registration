<?php
require_once('../db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $file = $_FILES['file'];
    $category_id = $_POST['category_id'];
    $price = $_POST['price'];

    // Validation checks here (if needed)

    // Extract the file extension
    // $filename_separate = explode('.', $file['name']);
    // $file_extension = strtolower(end($filename_separate));

    // $isAllowed = array('jpg', 'jpeg', 'png', 'pdf');
    // if (in_array($file_extension, $isAllowed)) {
    //     $upload_path = 'images/' . $file['name']; // Define the upload path
    //     move_uploaded_file($file['tmp_name'], $upload_path);

    // Extract the file extension
$filename_separate = explode('.', $file['name']);
$file_extension = strtolower(end($filename_separate));

$isAllowed = array('jpg', 'jpeg', 'png', 'pdf');
$maxFileSize = 5 * 1024 * 1024; // 5MB in bytes

// if (
//   !empty($file_extension) && // Check if the file has an extension
//   in_array($file_extension, $isAllowed) && // Check if the extension is allowed
//   $file['size'] <= $maxFileSize // Check if the file size is within the limit
// ) {

  if (!empty($_FILES['file']['name'])) {
    $upload_path = 'images/' . $_FILES['file']['name'];
    move_uploaded_file($_FILES['file']['tmp_name'], $upload_path);
} else {
    // Handle the case where no file was uploaded
    header("Location: product.php?error=nofile");
    exit();
}

        $sql = "INSERT INTO products (name, description, file, category_id, price) 
                VALUES (?, ?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: product.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "ssssi", $name, $description, $upload_path, $category_id, $price);
            mysqli_stmt_execute($stmt);
            header("Location: product.php?success=entered");
            exit();
        }
    } else {
        // Invalid file extension
        header("Location: product.php?error=invalidfile");
        exit();
    }

?>
