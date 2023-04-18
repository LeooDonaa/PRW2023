<?php

while ($senha = rtrim(fgets(STDIN))) { // leitura de várias senhas, terminando com EOF

    // Verifica o comprimento da senha
    if (strlen($senha) < 6 || strlen($senha) > 32) { // verifica se a senha tem entre 6 e 32 caracteres
        echo "Senha invalida.\n"; // se a senha estiver fora do intervalo, exibe mensagem de erro
        continue; // passa para a próxima senha
    }

    // Verifica se a senha contém apenas letras, números e sem espaços
    if (!ctype_alnum($senha)) { // verifica se a senha contém caracteres diferentes de letras e números
        echo "Senha invalida.\n"; // se a senha contiver caracteres inválidos, exibe mensagem de erro
        continue; // passa para a próxima senha
    }

    // Verifica se a senha contém pelo menos uma letra maiúscula, uma letra minúscula e um número
    if (!preg_match('/[A-Z]/', $senha) || !preg_match('/[a-z]/', $senha) || !preg_match('/[0-9]/', $senha)) {
        // verifica se a senha contém pelo menos uma letra maiúscula, uma letra minúscula e um número usando expressões regulares
        echo "Senha invalida.\n"; // se a senha não atender a todas as condições, exibe mensagem de erro
        continue; // passa para a próxima senha
    }

    // Se todas as verificações passarem, a senha é válida
    echo "Senha valida.\n"; // se a senha atender a todas as condições, exibe mensagem de sucesso
}

?>