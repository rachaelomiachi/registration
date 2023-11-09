                                    <!-- if user already exist do not sign them up -->
                                    <!-- if not sign up successfully i.e store data in the db -->
                                    <!-- FOR LOGIN, IF THE DATA MATCH WITH D ONE IN DB THEN THEY SHOULD LOGIN -->
                                    <!-- IF NOT DISPLAY ERROR MESSAGE -->

                                    <?php
                                    // require_once '../includes/header.php';
                                    ?>
                                   


                                    <?php
                                    
                                    require_once './../connection/db.php';
                                    require_once './../layout/header.php';
                                    require_once './../layout/footer.php';
                                    ?>

                                    
                                        <?php
                                        // if ($user) {
                                        //    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        //    <strong>oh sorry!</strong> Email is already taken.
                                        //    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        //  </div>';
                                        // }
                                        ?>


                                    <div class="container d-flex justify-content-center align-items-center" style="margin-right:auto">
                                        <div class="row">
                                    <h1>Register</h1>
                                    <p>Already have an account? <a href="login.php">Login Here</a></p>

                                    <form action="./../includes/register-inc.php" method="post">

                                        <div class= "col-lg-12 col-sm-12 w-100% mb-3">
                                    <input type="text" name="firstname" placeholder="Firstname" style="width:50%; box-shadow: 0 0 10px #000; padding:5px; border-radius:5px">
                                    </div>

                                    <div class="mb-3">
                                    <input type="text" name="lastname" placeholder="Lasname" style="width:50%; box-shadow: 0 0 10px #000; padding:5px; border-radius:5px"> 
                                    </div>

                                    <div class="mb-3">
                                        <input type="email" name="email" placeholder="E-mail" style="width:50%; box-shadow: 0 0 10px #000; padding:5px; border-radius:5px">
                                        </div>

                                        <div class="mb-3">
                                        <input type="password"name="password" placeholder=" Password" style="width:50%; box-shadow: 0 0 10px #000; padding:5px; border-radius:5px">
                                        </div>

                                        <div class="mb-3">
                                        <input type="password"name="cpassword" placeholder="Confirm Password" style="width:50%; box-shadow: 0 0 10px #000; padding:5px; border-radius:5px">
                                        </div>

                                        <button type="submit" style="background-color:black; color:white; width:50%; padding:1%;">Register</button>

                                    </form>
                                    </div>
                                    </div>
                                    </body>
                                    </html>
