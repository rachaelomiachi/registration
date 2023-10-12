<?php
require_once('../db.php');
require_once('../header.php');

if(!$_SESSION['cart']){
    $_SESSION['cart'] = [];

}

?>
<script>
     document.cookie = `id=''`;
    document.cookie = `price=1`;
    document.cookie = `quantity=1`;
    document.cookie = `subtotal=1`;
    document.cookie = `description=''`;
    document.cookie = `file=''`;
</script>

<div class="container-fluid mt-5" style="background-color:lightblue">
    <!-- <div class="row" style="background:url('./photo/kili-phone1.png'); rgba(25, 25, 25, 0.5), rgba(25, 25, 25, 1));"> -->

        <div class="col-lg-12 col-sm-6 text-center"> 
            <?php
           
           $sql = "SELECT * FROM products";
           $result = mysqli_query($conn, $sql);
           ?>
           
           <div class="container">
               <table class="table " style="margin: 0 auto; color: black;">
                   <thead>
                       <tr>
                           <th>File</th>
                           <th>Description</th>
                           <th>Price</th>
                           <th>Quantity</th>
                           <th>Add to Cart</th>
                       </tr>
                   </thead>
                   <tbody>
           
                       <?php
                       while ($row = mysqli_fetch_assoc($result)) {
                           $description = $row['description'];
                           $price = $row['price'];
                           $file = $row['file'];
           
                           // Initialize quantity to 0
                           $quantity = 0;
                       ?>
                           <tr>
                               <td>
                                   <div class="card" style="width: 20rem; margin:auto;">
                                       <img src="<?php echo $file; ?>" class="card-img-top" style="width: 20rem; margin:auto; height:13rem; border-radius:12px " alt=""...>
                                   </div>
                               </td>
                               <td><?php echo $description; ?></td>
                               <td>$<?php echo $price; ?></td>
                               <td>
                                   <div class="quantity-controls">
                                       <i class="fas fa-minus decrement" data-id="<?php echo $row['id']; ?>"></i>
                                       <span id="quantity-<?php echo $row['id']; ?>"><?php echo $quantity; ?></span>
                                       <i class="fas fa-plus increment" data-id="<?php echo $row['id']; ?>"></i>
                                   </div>
                               </td>
                               <td>
                                   <button class="btn btn-dark addToCart" 
                                       data-description="<?php echo $description; ?>" 
                                       data-id="<?php echo $row['id']; ?>" 
                                       data-price="<?php echo $price; ?>" 
                                       data-file="<?php echo $file; ?>"><a href="./order.php" style="color:white; text-decoration:none;">Add to Cart</a></button>
                               </td>
                           </tr>
                       <?php
                       }
                       ?>
                   </tbody>
               </table>
           </div>
           
           
        </div>
    </div>
</div>

<!-- JavaScript to handle quantity and cart -->
<script>
    const incrementButtons = document.querySelectorAll('.increment');
    const decrementButtons = document.querySelectorAll('.decrement');
    const addToCartButtons = document.querySelectorAll('.addToCart');
    let totalBill = 0;
    
    incrementButtons.forEach(button => {
        button.addEventListener('click', () => {
            const id = button.getAttribute('data-id');
            const quantitySpan = document.getElementById(`quantity-${id}`);
            let quantity = parseInt(quantitySpan.innerText);
            quantity++;
            quantitySpan.innerText = quantity;
        });
    });
    
    decrementButtons.forEach(button => {
        button.addEventListener('click', () => {
            const id = button.getAttribute('data-id');
            const quantitySpan = document.getElementById(`quantity-${id}`);
            let quantity = parseInt(quantitySpan.innerText);
            if (quantity > 0) {
                quantity--;
                quantitySpan.innerText = quantity;
            }
        });
    });
    
    addToCartButtons.forEach(button => {
        button.addEventListener('click', () => {
            const id = button.getAttribute('data-id');
            const description = button.getAttribute('data-description');
            const file = button.getAttribute('data-file');
            const price = parseFloat(button.getAttribute('data-price'));
            const quantity = parseInt(document.getElementById(`quantity-${id}`).innerText);
            document.getElementById(`quantity-${id}`).innerText = 0;
            const subtotal = price * quantity;
            totalBill += subtotal;
            document.cookie = `id=${id}`;
            document.cookie = `price=${price}`;
            document.cookie = `quantity=${quantity}`;
            document.cookie = `subtotal=${subtotal}`;
            document.cookie = `description=${description}`;
            document.cookie = `file=${file}`;

            <?php 
            $cart = [...array_filter($_SESSION['cart'],fn($ele)=>($ele['id'] != $_COOKIE['id'])),
            [
                'id' => $_COOKIE['id'],
                'quantity' => $_COOKIE['quantity'],
                'price' => $_COOKIE['price'],
                'subtotal' => $_COOKIE['subtotal'],
                'description' => $_COOKIE['description'],
                'file' => $_COOKIE['file'],
            ]];
            
            $_SESSION['cart'] = $cart;  
            
            ?>
            alert(`Item added to cart!\nTotal Bill: $${totalBill.toFixed(2)}`);
        });
    });
</script>
