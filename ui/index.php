<?php
require_once ('./../connection/db.php');
require_once './../layout/header.php';
require_once './../layout/footer.php';

?>


<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12 col-sm-12">
<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <div class="carousel-overlay"></div>
      <!-- style="background:url('./food/photo/pexels-adonyi-gábor-1400172.jpg')" -->
      <img src="./../food/photo/gem-background1.jpg" class="d-block w-100" style="height: 35rem; margin-top: 17px;" alt="...">
      <!-- Add the welcome text -->
      <div class="welcome-text col-sm-12">
        <span>Welcome to</span>
        <span>Rachael's Restaurant</span>
        <span>Your home away from home</span>
      <!-- </div> -->
    <!-- </div>
  </div>
</div>  -->

    <!-- <div class="carousel-item" data-bs-interval="2000">
      <div class="carousel-overlay"></div>
      <img src="./food/photo/gem5.jpg" class="d-block w-100" alt="...">
    </div>

    <div class="carousel-item">
      <div class="carousel-overlay"></div>
      <img src="./food/photo/gem6.jpg" class="d-block w-100" alt="...">
    </div>
  </div> -->
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
  </div>
</div>
</div>

<!--  -->

<!--  -->

<!-- <div class="container mt-5">
    <div class="row"> -->
    <!-- style="background:url('./food/photo/pexels-adonyi-gábor-1400172.jpg')" -->

        <!-- <div class="col"></div> -->

        <!-- dropdown starts -->
        <h1 style="text-align: center;">Enjoy tasty meals, <br> wherever you are <span>&#127791;</span> <br> <span style="font-size: 20px;">ordering from</span> </h1>';

<div class="d-flex justify-content-center">
<select name="location" class="custom-dropdown mx-auto mt-3 border-primary p-2" style="width: 50%; border-radius:5px">
<h1>select location</h1>
<option value="Jos">Jos</option>
<option value="abuja">Abuja</option>
<option value="Jos">NTA</option>
</select>
</div>


<?php
if(isset($_SESSION['sessionId'])){
    echo " $firstname,You are logged in!";
}else {
   echo "Home";
}



$sql = "SELECT * FROM categories";
$result = mysqli_query($conn, $sql);
?>

<div class="d-flex justify-content-center mt-3">
  <!-- <h3 class="d-flex justify-content-center ms-5">ordering from</h3> -->
  <select name="category" class="custom-dropdown mx-auto border-primary p-2" style="width: 50%; border-radius:5px">

  <!-- <div class="mb-5">order</div> -->
    <?php
    while ($row = mysqli_fetch_assoc($result)) {
      $name = $row['name'];
      $categoryId = $row['id'];
      echo "<option value='{$categoryId}'>{$name}</option>";
    }
    ?>
  </select>
</div>

<!-- dropdown starts -->
<!-- <div class="d-flex justify-content-center">
<select name="location" class="custom-dropdown mx-auto mt-3 border-primary p-2" style="width: 50%; border-radius:5px">
<h1>select location</h1>
<option value="Jos">Jos</option>
<option value="abuja">Abuja</option>
<option value="Jos">NTA</option>
</select>
</div> -->
<!-- end -->


<!-- the three images here -->
<!-- the three images here -->
<div class="kili-bg" style="margin-top:10%; width:100%;">
<div class="container mx-auto kili-images d-flex justify-content-center" >
  <div class="row justify-content-center">
    <h1 class="text-center" style="margin-top: 40px;">Just how it works</h1>

    <div class="col-lg-4 col-sm-12">
      <div class="card" style="">
        <img src="./../food/photo/kili-location.png" class="card-img-top mx-auto d-block" alt="...">
        <div class="card-body text-center">
          <h3 style="color: blue;">Select nearest location</h3>
          <h6>Select the state and restaurant closest to your pick-up/delivery location.</h6>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-sm-12 mt-2">
      <div class="card" style="">
        <img src="./../food/photo/kili-menu.png" class="card-img-top mx-auto d-block" alt="...">
        <div class="card-body text-center">
          <h3 style="color: blue;">Select nearest location</h3>
          <h6>Select the state and restaurant closest to your pick-up/delivery location.</h6>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-sm-12 mt-2">
      <div class="card" style="">
        <img src="./../food/photo/kilidelivery.png" class="card-img-top mx-auto d-block" alt="...">
        <div class="card-body text-center">
          <h3 style="color: blue;">Select nearest location</h3>
          <h6>Select the state and restaurant closest to your pick-up/delivery location.</h6>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

    <!-- the end -->
   

<!-- footer -->
<div class="container-fluid bg-dark  pb-5">
  <div class="row d-flex justify-content-center align-items-center"  >

    <div class="col-12 d-flex justify-content-center align-items-center">
      <!-- <div class="col-4">
    <img src="./food/photo/kili-google.png" style="width:100%" alt="">
    </div> -->
  
   
    <!-- <div class="col-lg-2 col-sm-6" style="margin-top:3%">
    <img src="./../food/photo/kili-apple.png" style="width:100%; margin-right:auto" alt="">
    </div> -->

   

    <img src="./../food/images/5365678_fb_facebook_facebook logo_icon.png"  class="mx-1" style="margin-top:5rem" alt="">
   

    <img src="./../food/images/5296516_tweet_twitter_twitter logo_icon (1).png"  class="mx-1"  style="margin-top:5rem" alt="">
    

    <img src="./../food/images/5296765_camera_instagram_instagram logo_icon.png" class="mx-1" style="margin-top:5rem" alt="">
    
      
      <img src="./../food/images/5296521_play_video_vlog_youtube_youtube logo_icon.png" class="mx-1" style="margin-top:5rem" alt="">
    </div>

    <div class=" mt-5 col-12 d-flex justify-content-center align-items-center">
    <!-- <div class="row">
      <div class="col-2"> -->
        <img src="food/images/5365678_fb_facebook_facebook logo_icon.png" alt="">
        <div class="  text-center">
          <input type="text" class="form-control mb-3" placeholder="Email required for extra cullinary services" style="width: 50vw; color:blue;">
          <input type="text" class="form-control" placeholder="Send" style="width: 50vw; background-color:blue; color:white; margin-top:0;">
        </div>
      </div>
</div>
<!-- </div> -->

<!-- <div class="container d-flex justify-content-center align-items-center" style="height: 10vh;">
    <div class="text-center">
        <input type="text" class="form-control" placeholder="Email required" style="width: 20rem; background-color:blue">
    </div>
</div> -->
    
  


  

<!-- <div class="col-2">
    <img src="./food/photo/kili-phone1.png" style="width:38%" alt="">
    <h3 class="text-light">Enjoy our mobile app</h3>
    </div>
  </div>
</div> -->






 <!-- <td><img src="' . $file . '" alt="' . $name . '"/></td> -->


<!-- // Prepare the statement
// $stmt = mysqli_prepare($conn, $sql);
// if ($stmt) {
//     mysqli_stmt_execute($stmt);
//     mysqli_stmt_bind_result($stmt, $category_id, $category_name);
//     while (mysqli_stmt_fetch($stmt)) {
//         // $category_id and $category_name now contain the values for each row
//         echo $category_id; 
//         echo $category_name . "<br>";
//         echo "<hr>";
//     }

//     // Close the statement
//     mysqli_stmt_close($stmt);
// } else {
//     echo "Error: " . mysqli_error($conn);
// }

// // Close the connection
// mysqli_close($conn); -->

<!-- </div>
</div>
</div> -->


 
<!-- </body>
</html>


 -->
