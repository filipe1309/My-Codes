<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>WS PHP - Objeto Dinamico</title>
    </head>
    <body>
        <?php
        require './inc/Config.inc.php';
        echo '<pre>';
        $filipe = new AssociacaoCliente('Filipe', 'flipe@teste.com');
        //$filipe = new stdClass();
        //$filipe->nome = 'Filipe';
        //$filipe->email = 'Filipe@teste.com';
        $login = new AssociacaoLogin($filipe);

        if ($login->getLogin()):
            echo "Gerenciando o cliente id: {$login->getCliente()->getCliente()}<br>";
            echo "{$login->getCliente()->getNome()} logou com sucesso usando o e-mail {$login->getCliente()->getEmail()}<hr>";
        else:
            echo 'Erro ao logar!';
        endif;

        var_dump($filipe, $login);
        ?>
    </body>
</html>
