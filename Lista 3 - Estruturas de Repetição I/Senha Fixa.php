<?php
    // Define a senha correta como 2002.
    $senha_correta = 2002;
    // Loop infinito para solicitar a senha e verificar se ela é correta.
    while (true) {
        // Lê um inteiro da entrada padrão e armazena em $senha.
        $senha = intval(fgets(STDIN));
        // Verifica se $senha é igual à senha correta.
        if ($senha == $senha_correta) {
            // Se sim, imprime "Acesso Permitido" na tela e encerra o loop.
            echo "Acesso Permitido\n";
            break;
        } else {
            // Caso contrário, imprime "Senha Invalida" na tela.
            echo "Senha Invalida\n";
        }
    }
?>
