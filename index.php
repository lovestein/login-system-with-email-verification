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

    <div class="main">
        <!-- Login Form -->
        <div class="login-container">
            <div class="login-form" id="loginForm">
                <h2 class="text-center fw-bold">Log in</h2>
                <p class="text-center">Sign in to start your session</p>
                <form action="./endpoint/login.php" method="POST">
                    <div class="form-group">
                        <label class="fw-bold" for="username">Username</label>
                        <input type="text" name="username" id="username" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                    <p>Don't have an account yet? Register <span class="switch-form-link" onclick="showRegistrationForm()">here.</span></p>
                    <button type="submit" class="btn btn-secondary login-btn form-control">Log in</button>
                </form>
            </div>
        </div>


        <!-- Registration Form -->
        <div class="registration-form" id="registrationForm">
            <h2 class="text-center">Sign up</h2>
            <p class="text-center">Fill in your personal details to register your account.</p>


            <form action="./endpoint/add-user.php" method="POST">
                <div class="form-group registration row">
                    <div class="col-6">
                        <label for="first_name">First Name</label>
                        <input type="text" id="first_name" name="first_name" class="form-control">
                    </div>
                    <div class="col-6">
                        <label for="last_name">Last Name</label>
                        <input type="text" id="last_name" name="last_name" class="form-control">
                    </div>
                </div>
                <div class="form-group registration row">
                    <div class="col-5">
                        <label for="contact_number">Contact Number</label>
                        <input type="number" id="contact_number" name="contact_number" class="form-control" maxlength="11">
                    </div>
                    <div class="col-7">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" class="form-control">
                    </div>
                </div>
                <div class="form-group registration">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" class="form-control">
                </div>
                <div class="form-group registration">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-control">
                </div>
                <p>Already have an account? <span class="switch-form-link" onclick="showLoginForm()">Log in.</span></p>
                <button type="submit" class="btn btn-dark login-register form-control" name="register">Register</button>
            </form>
        </div>

    </div>



    <!-- JQuery -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>       
    <!-- Functions -->
    <script src="main.js"></script>
</body>

</html>