

<?php
require_once('../db.php');
require_once('../header.php');

?>

<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-12">

       

<?php

$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);

echo '<table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Category ID</th>
            <th>Price</th>
        </tr>';

while ($row = mysqli_fetch_assoc($result)) {
    // $id = $row['id'];
    // $name = $row['name'];
    $description = $row['description'];
    $file = $row['file'];
    // $category_id = $row['category_id'];
    $price = $row['price'];

    echo '<tr>
            
            
            
            
             <td><img src="' . $file . '" /></td>
            
            <td>' . $description . '</td>
            
            <td>' . $price . '</td>
          </tr>';
}


echo '</table>';
?> 
    </div>
        </div>
    </div>
    </body>
</html>


<!-- <td><img src="' . $file . '" alt="' . $name . '"/></td> -->
<div class="container-fluid mt-5">
    <div class="row" style="background: linear-gradient(to bottom, black, transparent), url('./photo/pexels-adonyi-gábor-1400172.jpg'); background-size: cover;">
