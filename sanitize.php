<html>
    <head>
        <title>Sanitização com PHP</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            $texto = '';
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                
                //Validar uma string (remove tags)
                //$texto = filter_input(INPUT_POST, 'texto', FILTER_SANITIZE_STRING);
                
                //Validar uma string (converte tags para entidades HTML)
                //$texto = filter_input(INPUT_POST, 'texto', FILTER_SANITIZE_SPECIAL_CHARS);
                        
                //Validar um numero inteiro (NUMBER_FLOAT + FILTER_FLAG_ALLOW_FRACTION, alternativa)
                //$texto = filter_input(INPUT_POST, 'texto', FILTER_SANITIZE_NUMBER_INT);
                
                //Validar um numero decimal
                //$float = ['decimal' => ','];
                //$texto = filter_input(INPUT_POST, 'texto', FILTER_SANITIZE_NUMBER_FLOAT, ['options' => $float]);
                
                //echo $texto;
                
                $texto = $_POST['texto'];
                
                //Validar uma variavel inteira
                if (filter_var($texto, FILTER_VALIDATE_INT)) {
                    echo 'Inteiro válido';
                }
                
                //Validar formato do e-mail
                if (filter_var($texto, FILTER_VALIDATE_EMAIL)) {
                    echo 'E-mail válido';
                }
                
                //Validar endereço IP
                if (filter_var($texto, FILTER_VALIDATE_IP)) {
                    echo 'IP válido';
                }
                
                //Validar uma URL (com http://)
                if (filter_var($texto, FILTER_VALIDATE_URL)) {
                    echo 'URL válida';
                }
                
                $int = [
                    'min_range' => -150,
                    'max_range' => 150
                ];
                
                if (filter_var($texto, FILTER_VALIDATE_INT, ['options' => $int])) {
                    echo 'Inteiro entre -150 e 150';
                }
            }
        ?>
        <br>
        <form method="POST">
            Texto: <input type="text" value="<?=$texto?>" name="texto">
            <button type="submit">Enviar</button>
        </form>
    </body>
</html>