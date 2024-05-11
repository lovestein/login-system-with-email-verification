<?php
    include('./conn/conn.php');
    session_start();

    if(isset($_SESSION['user_verification_id'])) {
        $userVerificationID = $_SESSION['user_verification_id'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verification</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <!-- CSS Design -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main">
        <div class="verification-container">
            <div class="verification-form" id="loginForm">
                <h2 class="text-center">Email Verification</h2>
                <p class="text-center">Please check your email for verification code.</p>
                <form action="./endpoint/add-user.php" method="POST">
                    <input type="text" name="user_verification_id" value="<?= $userVerificationID ?>" hidden>
                    <input type="number" name="verification_code" id="verification_code" class="form-control text-center">
                    <button type="submit" class="bt btn-secondary login-btn form-control mt-4" name="verify">Verify</button>
                </form>
            </div>
        </div>
    </div>
    <!-- JQuery -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
    <!-- Functions -->
    <script src="main.js"></script>
</body>
</html>