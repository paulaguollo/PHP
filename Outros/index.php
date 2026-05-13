<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulário de Envio de Email</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Enviar Email</h1>

        <?php if (isset($_GET['success']) && $_GET['success'] === 'true'): ?>
            <div class="alert sucesso">
                Mensagem enviada com sucesso!
            </div>
        <?php endif; ?>

        <?php if (isset($_GET['success']) && $_GET['success'] === 'false'): ?>
            <div class="alert erro">
                Ocorreu um erro ao enviar a mensagem.
            </div>
        <?php endif; ?>

        <form action="mail.php" method="post">

            <div class="form-group">
                <label for="nome">Nome do remetente</label>
                <input type="text" id="nome" name="nome" value="Nome do remetente" required />
            </div>

            <div class="form-group">
                <label for="email">Email do remetente</label>
                <input type="email" id="email" name="email" value="email@dominio.com" required />
            </div>

            <div class="form-group">
                <label for="assunto">Assunto</label>
                <input type="text" id="assunto" name="assunto" value="Assunto do email" required />
            </div>

            <div class="form-group">
                <label for="mensagem">Mensagem</label>
                <textarea id="mensagem" name="mensagem" required>Mensagem</textarea>
            </div>

            <button type="submit">Enviar</button>

        </form>
    </div>

</body>

</html>