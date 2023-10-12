<?php
require_once('../db.php');
require_once('../header.php');
?>


    
    <div class="container">
        <div class="row ms-5">
            

            <!-- <div class="col-8"> -->
        <h2>Add a New Product</h2>

           
    <form action="product-inc.php" method="POST" enctype="multipart/form-data" style="margin:auto">

        <div class="col-4 mb-2" style="width:px">
        <!-- <label for="name">Product Name:</label> -->
        <input type="text"  name="name" id="form-style" required placeholder="name" style="width:20rem; background-color:#f2f2f2; padding:7px; border:0; border-radius:4px; color:red; box-shadow: 0 0 10px #000;">
        <!-- <br><br> -->
        </div>

        <div class="col-4 mb-2" style="width:">
        <!-- <label for="description">Description:</label> -->
        <textarea name="description"  id="form-style" rows="1" cols="50" placeholder="description" required style="width:20rem; background-color:#f2f2f2; padding:6px; border:0; border-radius:4px; box-shadow: 0 0 10px #000;"></textarea>
        <!-- <br><br> -->
        </div>

        <div class="col-4 mb-2">
        <!-- <label for="file">Food Image URL:</label> -->
        <input type="file"  name="file" id="form-style" required style="width:20rem; background-color:#f2f2f2; padding:7px; border:0; border-radius:4px; box-shadow: 0 0 10px #000;">
        <!-- <br><br> -->
        </div>

        <div class="col-4 mb-2">
        <!-- <label for="category_id">Category:</label> -->
        <select name="category_id"  id="form-style" required style="width:20rem; background-color:#f2f2f2; padding:7px; border:0; border-radius:4px; box-shadow: 0 0 10px #000;">
        </div>

            <?php
            $sql = "SELECT*FROM categories";
            $result = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value='{$row['id']}'>{$row['name']}</option>";
                
            }
            ?>
        </select>
        <!-- <br><br> -->
        </div>

        <div class="col-4 mb-2">
        <!-- <label for="price">Price:</label><br> -->
        <input type="number" name="price" id="form-style" step="0.01" placeholder="Price" required style="width:20rem; background-color:#f2f2f2; padding:7px; border:0; border-radius:4px; box-shadow: 0 0 10px #000;">
        <!-- <br><br> -->
        </div>

        <div class="col-4 mb-3">
        <input type="submit" name="submit"  value="Add Product" style="width:20rem; background-color:black; padding:15px; border:0; border-radius:4px; color:white; box-shadow: 0 0 10px #000;">
        </div>
    </form>

    </div>
        </div>
    </div>
</body>
</html>
