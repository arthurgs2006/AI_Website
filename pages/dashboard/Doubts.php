<?php
include $_SERVER['DOCUMENT_ROOT'] . '/AIwebsite/includes/sections/smallcards.php';
?>
<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth;">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doubts</title>
</head>

<body class=" bg-gradient-blue-dark vh-100">
    <div class="wrapper d-flex flex-column" style="font-family: 'SF Pro Display'; gap: 3vh;">
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/AIwebsite/includes/sections/navbarDashboard.php'; ?>

        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center mb-4 text-white">Common Doubts About LLMs</h1>
                    <?php include $_SERVER['DOCUMENT_ROOT'] . '/AIwebsite/includes/sections/doubtsCards.php' ?>
                </div>
            </div>
        </div>

        <div class="mt-auto py-0">
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/AIwebsite/includes/sections/footer.php'; ?>
        </div>
    </div>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/AIwebsite/includes/components/linkedScripts.php' ?>
</body>

</html>