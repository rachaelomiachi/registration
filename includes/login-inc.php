

<?php
require_once './../connection/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        header("Location: ./../ui/login.php?error=emptyfields");
        exit();

    } else {
        $sql = "SELECT  *  FROM users WHERE email = ?";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ./../ui/login.php?error=sqlerror");
            exit();

        } else {
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if ($row = mysqli_fetch_assoc($result)) {
                $passcheck = password_verify($password,$row['password']);
               
                // if ($passcheck == false) {
                //     header("Location: login.php?error=wrongpass");
                //     exit();
                // } elseif ($passcheck == true) {
                    session_start();
                    $_SESSION['sessionID'] = $row['id'];
                    $_SESSION['sessionUser'] = $row['email'];
                    header("Location: ./../ui/index.php?success=loggedin");
                    exit();
                // }
            } else {
                header("Location: ./../ui/login.php?error=nouserfound");
                exit();
            }
        }
    }
} else {
    header("Location: ./../ui/login.php?error=accessforbidden");
    exit();
}

