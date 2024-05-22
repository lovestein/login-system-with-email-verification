<?php
include('./conn/conn.php');
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

    <!-- Add User Modal -->
    <div class="modal fade" id="userAddModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title w-100 text-center fs-5" id="exampleModalLabel"><strong>Add User</strong></h1>
                </div>
                <div class="modal-body">
                    <form action="./endpoint/add-user.php" method="POST">
                        <div class="form-group registration row">
                            <div class="col-6">
                                <label for="first_name"><strong>First Name</strong></label>
                                <input type="text" id="first_name" name="first_name" class="form-control">
                            </div>
                            <div class="col-6">
                                <label for="last_name"><strong>Last Name</strong></label>
                                <input type="text" id="last_name" name="last_name" class="form-control">
                            </div>
                        </div>
                        <div class="form-group registration row">
                            <div class="col-5">
                                <label for="contact_number"><strong>Contact Number</strong></label>
                                <input type="number" id="contact_number" name="contact_number" class="form-control" maxlength="11">
                            </div>
                            <div class="col-7">
                                <label for="email"><strong>Email</strong></label>
                                <input type="email" id="email" name="email" class="form-control">
                            </div>
                        </div>
                        <div class="form-group registration">
                            <label for="username"><strong>Username</strong></label>
                            <input type="text" id="username" name="username" class="form-control">
                        </div>
                        <div class="form-group registration">
                            <label for="password"><strong>Password</strong></label>
                            <input type="text" id="password" name="password" class="form-control">
                        </div>
                        <div class="d-flex gap-2 justify-content-end mt-2">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-success" name="register">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Users Table -->
    <div class="container-lg">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            Users Table
                            <div class="float-end">
                                <div class="d-flex gap-2">
                                    <a href="http://localhost/login-system-with-email-verification/">
                                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#userAddModal">
                                            <i class="fa-solid fa-right-to-bracket"></i>
                                        </button>
                                    </a>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#userAddModal">
                                        <i class="fa-solid fa-square-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </h4>
                    </div>
                    <div class="card-body table-responsive">
                        <table id="myTable" class="table table-striped table-bordered">
                            <thead class="text-center">
                                <tr>
                                    <th>ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Contact Number</th>
                                    <th>Email</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Verification Code</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $stmt = $conn->prepare("SELECT * FROM `tbl_user`");
                                $stmt->execute();
                                $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

                                if (count($users) > 0) {
                                    foreach ($users as $user) {
                                ?>
                                        <tr>
                                            <td><?= $user['tbl_user_id']; ?></td>
                                            <td><?= $user['first_name']; ?></td>
                                            <td><?= $user['last_name']; ?></td>
                                            <td><?= $user['contact_number']; ?></td>
                                            <td><?= $user['email']; ?></td>
                                            <td><?= $user['username']; ?></td>
                                            <td><?= $user['password']; ?></td>
                                            <td><?= $user['verification_code']; ?></td>
                                            <td class="d-flex gap-2">
                                                <a href="http://localhost/login-system-with-email-verification/update.php?id=<?= $user['tbl_user_id'] ?>">
                                                    <button type="button" value="<?= $user['tbl_user_id']; ?>" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i></button>
                                                </a>
                                                <a href="http://localhost/login-system-with-email-verification/delete.php?id=<?= $user['tbl_user_id'] ?>">
                                                    <button type="button" value="<?= $user['tbl_user_id']; ?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                                                </a>
                                            </td>
                                        </tr>
                                <?php
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
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