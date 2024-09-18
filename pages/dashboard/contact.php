<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth;">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../adminlte/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="../../style/style.css">
</head>

<body class="bg-dark">
    <div class="wrapper bg-gradient-blue-dark d-flex flex-column gap-5"
        style="font-family: 'SF Pro Display';">
        <?php include '../../includes/sections/navbarDashboard.php'; ?>
        <div class="container m-5">
            <h1>Suporte ou alguma dúvida a mais?</h1>
            <p>Entre em contato conosco por meio deste formulário abaixo,
                iremos te responder assim que possível.</p>
            <div class="d-flex justify-content-center align-items-center mt-3"
                style="gap: 5vh;">
                <div class=" w-50">
                    <?php include $_SERVER["DOCUMENT_ROOT"] . "/AIwebsite/includes/components/form.php";
                    renderForm(); ?>
                </div>

                <div class="d-flex justify-content-end">
                    <?php
                    include $_SERVER["DOCUMENT_ROOT"] . "/AIwebsite/includes/components/card.php";
                    renderCard(
                        false,
                        false,
                        "Information",
                        "   
                    <p><strong>Endereço:</strong> Rua Exemplo, 123, São Paulo, SP, Brasil</p>
                    <p><strong>Telefone:</strong> +55 (11) 1234-5678</p>
                    <p><strong>Email:</strong> contato@exemplo.com</p>
                    <p><strong>Horário de Funcionamento:</strong> Seg - Sex, 9h - 18h</p>
                    <p>Estamos aqui para ajudar! Entre em contato conosco usando o formulário ao lado ou pelos meios de contato abaixo.</p>"
                    );
                    ?>
                </div>
            </div>
        </div>

        <?php include '../../includes/sections/footer.php'; ?>
    </div>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/AIwebsite/includes/components/linkedScripts.php' ?>
</body>

</html>