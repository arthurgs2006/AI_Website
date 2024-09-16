<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>404: Page not Found</title>
</head>

<body class="bg-gradient-blue-dark vh-100 d-flex justify-content-center align-items-center">
    <div class="card text-center p-4">
        <h2 class="headline text-warning">404</h2>

        <div class="error-content">
            <h3><i class="fas fa-exclamation-triangle text-warning"></i> Oops! Page not found.</h3>

            <p>
                We could not find the page you were looking for.
                Meanwhile, you may <a href="../../index.php">return to dashboard</a> or try using the search form.
            </p>
        </div>
    </div>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/AIwebsite/includes/components/linkedScripts.php' ?>
</body>

</html>