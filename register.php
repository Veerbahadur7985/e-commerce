<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Login and Register</title>
    <style>
        body {
            background-color: #f8f9fa;
        }

        .panel-login {
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
            margin-top: 50px;
        }

        .panel-heading {
            background-color: #007bff;
            color: #ffffff;
        }

        @media (max-width: 576px) {
            .panel-login {
                margin-top: 20px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-login">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-6">
                                <a href="#" class="active" id="login-form-link" onclick="showLoginForm()">Login</a>
                            </div>
                            <div class="col-xs-6">
                                <a href="#" id="register-form-link" onclick="showRegisterForm()">Register</a>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form id="login-form" method="post" role="form">
                                    <div class="form-group">
                                        <input type="text" name="email" id="username" tabindex="1" class="form-control" placeholder="Email" value="">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6 col-sm-offset-3">
                                                <input type="submit" name="login" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                <form id="register-form" action="" method="post" role="form" style="display: none;">
                                    <div class="form-group">
                                        <input type="text" name="name" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="mobile" id="password" tabindex="2" class="form-control" placeholder="Mobile">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" id="confirm-password" tabindex="2" class="form-control" placeholder="Password">
                                    </div>
                                    <div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="register" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
											</div>
										</div>
									</div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function showLoginForm() {
            document.getElementById("login-form").style.display = "block";
            document.getElementById("register-form").style.display = "none";
            document.getElementById("login-form-link").classList.add("active");
            document.getElementById("register-form-link").classList.remove("active");
        }

        function showRegisterForm() {
            document.getElementById("login-form").style.display = "none";
            document.getElementById("register-form").style.display = "block";
            document.getElementById("login-form-link").classList.remove("active");
            document.getElementById("register-form-link").classList.add("active");
        }
    </script>
</body>

</html>
