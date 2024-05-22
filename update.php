<?php
include('./conn/conn.php');
$tbl_user_id = $_GET['id'];
$stmt = $conn->prepare("SELECT * FROM `tbl_user` WHERE `tbl_user_id` = $tbl_user_id");
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);
if (count($user) > 0) {
    $first_name = $user['first_name'];
    $last_name = $user['last_name'];
    $contact_number = $user['contact_number'];
    $email = $user['email'];
    $username = $user['username'];
    $password = $user['password'];
} else {
    echo "
    <script>
        alert('User Not Found');
        window.location.href = 'http://localhost/login-system-with-email-verification/home.php';
    </script>
    ";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratory Work #4</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <!-- CSS Design -->
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <!-- User Card -->
    <div class="container-lg">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center">
                            Edit User
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="./endpoint/update-user.php" method="POST">
                            <input type="hidden" name="tbl_user_id" value="<?= $tbl_user_id ?>">
                            <div class="form-group registration row">
                                <div class="col-6">
                                    <label for="first_name"><strong>First Name</strong></label>
                                    <input type="text" id="first_name" name="first_name" class="form-control" value="<?= $first_name ?>">
                                </div>
                                <div class="col-6">
                                    <label for="last_name"><strong>Last Name</strong></label>
                                    <input type="text" id="last_name" name="last_name" class="form-control" value="<?= $last_name ?>">
                                </div>
                            </div>
                            <div class="form-group registration row">
                                <div class="col-5">
                                    <label for="contact_number"><strong>Contact Number</strong></label>
                                    <input type="number" id="contact_number" name="contact_number" class="form-control" maxlength="11" value="<?= $contact_number ?>">
                                </div>
                                <div class="col-7">
                                    <label for="email"><strong>Email</strong></label>
                                    <input type="email" id="email" name="email" class="form-control" value="<?= $email ?>">
                                </div>
                            </div>
                            <div class="form-group registration">
                                <label for="username"><strong>Username</strong></label>
                                <input type="text" id="username" name="username" class="form-control" value="<?= $username ?>">
                            </div>
                            <div class="form-group registration">
                                <label for="password"><strong>Password</strong></label>
                                <input type="text" id="password" name="password" class="form-control" value="<?= $password ?>">
                            </div>
                            <div class="d-flex gap-2 justify-content-end mt-2">
                                <a href="http://localhost/login-system-with-email-verification/home.php">
                                    <button type="button" class="btn btn-secondary">Cancel</button>
                                </a>
                                <button type="submit" class="btn btn-success" name="update">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Users Table -->


    <!-- JQuery -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/1f05df24ae.js"></script>
    <!-- Functions -->
    <script src="main.js"></script>
</body>

</html>