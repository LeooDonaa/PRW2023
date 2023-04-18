<?php
    // loop principal
    while (true) {
        // inicializa variáveis de contagem e soma das notas
        $count = 0;
        $sum = 0;

        // loop para leitura das notas
        while ($count < 2) {
            // leitura da nota
            $grade = (float) fgets(STDIN);
            
            // verifica se a nota é válida e soma
            if ($grade >= 0 && $grade <= 10) {
                $sum += $grade;
                $count++;
            } else {
                // nota inválida, exibe mensagem de erro
                echo "nota invalida\n";
            }
        }
        
        // calcula e exibe a média das notas
        echo "media = " . number_format($sum / 2, 2) . "\n";
        
        // loop para leitura da escolha do usuário
        do {
            // exibe mensagem e lê a escolha
            echo "novo calculo (1-sim 2-nao)\n";
            $choice = (int) fgets(STDIN);
        } while ($choice != 1 && $choice != 2);
        
        // verifica se o usuário deseja continuar
        if ($choice == 2) {
            break;
        }
    }
?>
