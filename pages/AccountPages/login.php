<?php include '../../includes/components/input-group.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log in</title>
</head>

<body class=" login-page  bg-gradient-blue-dark">
    <div class="login-box d-flex gap-3 flex-column">
        <div class="login-logo">
            <a href="../../index.php">
                <img src="<?php echo '../../img/icons/alexa.svg' ?>"
                    class="img-fluid" style='filter: invert(1); min-width: 5vh;'
                    alt="Logo do website">
            </a>
        </div>
        <div class="card ">
            <div class="card-body rounded login-card-body">
                <p class="login-box-msg">Come explore the AI world!</p>
                <form action="/AIwebsite/pages/dashboard/main.php" method="post">
                    <?php inputGroup("email", "E-mail", "fas fa-envelope") ?>
                    <?php inputGroup("password", "Password", "fas fa-lock") ?>
                    <div class="row">
                        <div class="col-8">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault">Remember me?</label>
                            </div>
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                    </div>
                </form>
                <p class="mb-1">
                    <a href="./passwordRecovery.php">Forgot my password</a>
                </p>
                <p class="mb-0">
                    <a href="./register.php" class="text-center">Register a new membership</a>
                </p>
            </div>

        </div>
    </div>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/AIwebsite/includes/components/linkedScripts.php' ?>
</body>

</html>