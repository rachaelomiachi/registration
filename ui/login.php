                                    <!-- if user already exist do not sign them up -->
                                    <!-- if not sign up successfully i.e store data in the db -->
                                    <!-- FOR LOGIN, IF THE DATA MATCH WITH D ONE IN DB THEN THEY SHOULD LOGIN -->
                                    <!-- IF NOT DISPLAY ERROR MESSAGE -->

                                    

                                    <?php
                                    // require_once './includes/footer.php';
                                    // require_once 'layout/register-inc.php';
                                    require_once './../layout/header.php';
                                    // require_once './../food/login.php';
                                    ?>

                                    
                                        
                                    <div class="container d-flex justify-content-center align-items-center" style="margin-right:auto">
                                    <div class="row">
                                    <h1>Login</h1>
                                    <p>Already have an account? <a href="registration.php">Register Here</a></p>

                                    <form action="./../includes/login-inc.php" method="post">
                                        <div class="col-lg-12 col-sm-12 w-100% mb-3">
                                        <input type="email" name="email" placeholder="E-mail"  style="width:50%; box-shadow: 0 0 10px #000; padding:5px; border-radius:5px">
                                        </div>

                                        <div class="col-lg-12 col-sm-12 w-100% mb-3">
                                        <input type="password"name="password" placeholder=" Password"  style="width:50%; box-shadow: 0 0 10px #000; padding:5px; border-radius:5px">
                                        </div>
                                        <!-- <input type="password"name="cpassword" placeholder="Confirm Password"> -->
                                        <button type="submit" style="background-color:black; color:white; width:50%; padding:1%;">Login</button>

                                    </form>
                                    </div>
                                    </div>
                                    </body>
                                    </html>
