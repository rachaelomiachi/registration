                                    <!-- if user already exist do not sign them up -->
                                    <!-- if not sign up successfully i.e store data in the db -->
                                    <!-- FOR LOGIN, IF THE DATA MATCH WITH D ONE IN DB THEN THEY SHOULD LOGIN -->
                                    <!-- IF NOT DISPLAY ERROR MESSAGE -->

                                    <?php
                                    // require_once '../includes/header.php';
                                    ?>
                                   


                                    <?php
                                    // require_once './../includes/footer.php';
                                    require_once 'register-inc.php';
                                    ?>

                                    <!DOCTYPE html>
                                    <html lang="en">
                                    <head>
                                        <meta charset="UTF-8">
                                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                        <title>LOGIN</title>
                                        <link rel="stylesheet" href="style.css">
                                    </head>
                                    <body>
                                        
                                    <div>
                                    <h1>Login</h1>
                                    <p>Already have an account? <a href="registration.php">Register Here</a></p>

                                    <form action="login-inc.php" method="post">
                                     
                                        <input type="email" name="email" placeholder="E-mail">
                                        <input type="password"name="password" placeholder=" Password">
                                        <!-- <input type="password"name="cpassword" placeholder="Confirm Password"> -->
                                        <button type="submit">Login</button>

                                    </form>
                                    </div>
                                    </body>
                                    </html>
