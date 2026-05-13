<?php

$corpoEmail = "
<!DOCTYPE html>
<html lang='pt'>

<head>
    <meta charset='UTF-8'>
    <title>Novo Contacto</title>
</head>

<body style='margin:0; padding:0; background-color:#f4f4f4; font-family:Arial,sans-serif;'>

    <table width='100%' cellpadding='0' cellspacing='0' style='background-color:#f4f4f4; padding:40px 0;'>
        <tr>
            <td align='center'>

                <table width='600' cellpadding='0' cellspacing='0' style='background-color:#ffffff; border-radius:10px; overflow:hidden; box-shadow:0 2px 8px rgba(0,0,0,0.1);'>

                    <tr>
                        <td style='background-color:#007bff; padding:20px; text-align:center; color:#ffffff;'>
                            <h1 style='margin:0; font-size:24px;'>Novo Pedido de Contacto</h1>
                        </td>
                    </tr>

                    <tr>
                        <td style='padding:30px;'>

                            <p style='font-size:16px; color:#333;'>
                                Recebeste uma nova mensagem através do formulário do website.
                            </p>

                            <table width='100%' cellpadding='10' cellspacing='0' style='border-collapse:collapse;'>

                                <tr>
                                    <td style='background:#f8f8f8; width:180px; font-weight:bold; border:1px solid #ddd;'>
                                        Nome
                                    </td>
                                    <td style='border:1px solid #ddd;'>
                                        {$nome}
                                    </td>
                                </tr>

                                <tr>
                                    <td style='background:#f8f8f8; font-weight:bold; border:1px solid #ddd;'>
                                        Email
                                    </td>
                                    <td style='border:1px solid #ddd;'>
                                        {$email}
                                    </td>
                                </tr>

                                <tr>
                                    <td style='background:#f8f8f8; font-weight:bold; border:1px solid #ddd;'>
                                        Assunto
                                    </td>
                                    <td style='border:1px solid #ddd;'>
                                        {$assunto}
                                    </td>
                                </tr>

                                <tr>
                                    <td style='background:#f8f8f8; font-weight:bold; border:1px solid #ddd; vertical-align:top;'>
                                        Mensagem
                                    </td>
                                    <td style='border:1px solid #ddd;'>
                                        {$mensagem}
                                    </td>
                                </tr>

                            </table>

                        </td>
                    </tr>

                    <tr>
                        <td style='background:#f0f0f0; padding:15px; text-align:center; font-size:12px; color:#777;'>
                            Mensagem enviada automaticamente através do formulário do website.
                        </td>
                    </tr>

                </table>

            </td>
        </tr>
    </table>

</body>

</html>
";
