<?php include '../../includes/components/input-group.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Password Recovery</title>
</head>
<body class=" login-page bg-gradient-blue-dark">
    <div class="login-box d-flex gap-3 flex-column">
        <div class="login-logo">
            <a href="../../index.php">
                <img src="<?php echo '../../img/icons/alexa.svg' ?>"
                    class="img-fluid" style='filter: invert(1); min-width: 5vh;'
                    alt="Logo do website">
            </a>
        </div>
        <div class="card">
            <div class="card-body rounded login-card-body">
                <p class="login-box-msg">Forgot your credentials?</p>
                <form action="/" method="post" class="d-flex justify-content-center  flex-column">
                    <?php inputGroup("email", "E-mail", "fas fa-envelope") ?>
                    <div class="row px-2">
                        <button type="submit" class="btn btn-primary btn-block">Request a new Password</button>
                    </div>
                </form>
                <p class="mb-1 mt-3">
                    <a href="./login.php">Log In</a>
                </p>
                <p class="mb-0">
                    <a href="./register.php" class="text-center">Register a new user</a>
                </p>
            </div>

        </div>
    </div>
    <?php include $_SERVER['DOCUMENT_ROOT']. '/AIwebsite/includes/components/linkedScripts.php'?>
</body>
</html>