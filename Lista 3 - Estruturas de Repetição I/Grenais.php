<?php
    // Inicializa as variáveis para contar vitórias do Inter, do Grêmio e empates
    $inter_wins = 0;
    $gremio_wins = 0;
    $draws = 0;

    // Inicializa o contador de Grenais
    $grenais = 0;

    // Loop infinito para a entrada de resultados dos Grenais
    while (true) {
        // Lê os gols marcados pelo Inter e pelo Grêmio
        list($inter_goals, $gremio_goals) = explode(" ", fgets(STDIN));

        // Compara os gols marcados para contar vitórias e empates
        if ($inter_goals > $gremio_goals) {
            $inter_wins++;
        } elseif ($gremio_goals > $inter_goals) {
            $gremio_wins++;
        } else {
            $draws++;
        }

        // Incrementa o contador de Grenais
        $grenais++;

        // Pergunta se deseja continuar com outro Grenal ou não
        echo "Novo grenal (1-sim 2-nao)\n";
        $choice = (int) fgets(STDIN);

        // Se a resposta for 2, encerra o loop
        if ($choice == 2) {
            break;
        }
    }

    // Exibe o número total de Grenais, vitórias do Inter, vitórias do Grêmio e empates
    echo $grenais . " grenais\n";
    echo "Inter:" . $inter_wins . "\n";
    echo "Gremio:" . $gremio_wins . "\n";
    echo "Empates:" . $draws . "\n";

    // Compara as vitórias do Inter e do Grêmio para determinar o vencedor ou se houve empate
    if ($inter_wins > $gremio_wins) {
        echo "Inter venceu mais\n";
    } elseif ($gremio_wins > $inter_wins) {
        echo "Gremio venceu mais\n";
    } else {
        echo "Nao houve vencedor\n";
    }
?>
