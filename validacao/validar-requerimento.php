<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../materialize/css/materialize.css">

    <title>Guia de Requerimento</title>

</head>
<body>

    <?php

        // Importar funcoes e variaveis
        require_once ( "variaveis.php" );
        require_once ( "funcoes.php" );

        // Validar se o usuário chegou a página via formulário
        // e limpar post
        if(formEnviado($_POST)) {

            // Faz a verificação dos campos e rotorna o vetor de erros
            $vet_erros = gerarMensagensErro($dados);
            

            if(empty($vet_erros)) {
                
                echo '<div style="padding: 30px 20px;">';
                echo '<h4>REQUERIMENTO ENVIADO COM <span style="color: lightgreen;">SUCESSO</span></h4>';
                    echo '<h5>Dados Pessoais:</h5>';
                        echo '<span>Número do protocolo: </span>' . rand() . '<br>';
                        echo '<span>Nome: </span>' . $_POST['requerente'] . '<br>';
                        echo '<span>Matrícula: </span>' . $_POST['matricula'] . '<br>';
                        echo '<span>Data nascimento: </span>' . $_POST['data_nascimento'] . '<br>';
                        echo '<span>Naturalidade: </span>' . $_POST['naturalidade'] . '<br>';
                        echo '<span>Filiação: </span>' . $_POST['filiacao'] . '<br>';
                        echo '<span>Curso: </span>' . $_POST['curso'] . '<br>';
                        echo '<span>Período: </span>' . $_POST['periodo'] . '<br>';
                        echo '<span>Turno: </span>' . $_POST['turno'] . '<br>';
                        echo '<span>Telefone 1: </span>' . $_POST['telefone'] . '<br>';
                        echo '<span>Telefone 2: </span>' . $_POST['telefone2'] . '<br>';
                        echo '<span>Email: </span>' . $_POST['email'] . '<br>';
                    echo '<h5>Motivo do requerimento:</h5>';

                        $op = $_POST['motivo_requerimento'];
                        $desc = '';

                        switch($op) {
                            case '1': $desc = '2ª via';
                                break;
                            case '2': $desc = 'Aproveitamento de Disciplina';
                                break;
                            case '3': $desc = 'Matrícula fora do prazo';
                                break;
                            case '4': $desc = 'Cancelamento da Matrícula';
                                break;
                            case '5': $desc = 'Colação de Grau / Colação Especial';
                                break;
                            case '6': $desc = 'Declaração';
                                break;
                            case '7': $desc = 'Diploma';
                                break;
                            case '8': $desc = 'Histórico Escolar';
                                break;
                            case '9': $desc = 'Reabertura de Matrícula';
                                break;
                            case '10': $desc = 'Segunda Chamada';
                                break;
                            case '11': $desc = 'Reingresso';
                                break;
                            case '12': $desc = 'Trancamento de Disciplina';
                                break;
                            case '13': $desc = 'Trancamento de Matrícula';
                                break;
                            case '14': $desc = 'Transferência para outra instituição';
                                break;
                            case '15': $desc = 'Validação de Conhecimento';
                                break;
                            case '16': $desc = 'Reajuste';
                                break;
                            case '17': $desc = 'Recorreção de Prova';
                                break;
                            case '18': $desc = 'AUXÍLIO - Transporte';
                                break;
                            case '19': $desc = 'AUXÍLIO - Moradia';
                                break;
                            case '20': $desc = 'AUXÍLIO - Óculos';
                                break;
                            case '21': $desc = 'AUXÍLIO - Pais e Mães';
                                break;
                            case '22': $desc = 'Outros';
                                break;
                        }
                        echo '<span>Motivo: </span>' . $desc . '<br>';

                        echo '<span>Especificação: </span>' . $_POST['especificacao'] . '<br>';
                        echo '<span>justificativa: </span>' . $_POST['justificativa'] . '<br>';

                        echo '<h5>Vistos de validação:</h5>';

                        echo '<span>Deve chave de armário?: </span>';
                        echo $_POST['visto_assitencia'] == 2 ? 'Sim' : 'Não' . '<br>';

                        if($_POST['visto_assitencia'] == 2) {
                            echo '<br><span>Armário: </span>' . $_POST['armario_devido'] . '<br>';
                        }

                        echo '<span>Deve livro na biblioteca?: </span>';
                        echo $_POST['visto_biblioteca'] == 2 ? 'Sim' : 'Não' . '<br>';

                        if($_POST['visto_biblioteca'] == 2) {
                            echo '<br><span>Livro(s): </span>' . $_POST['livro_devido'] . '<br>';
                        }

                echo '<div>';

            } else {
                // mostra as mensagens de erro
                echo '<div style="padding: 30px 20px;">';
                echo '<h4>OS CAMPOS A SEGUIR <span style="color: red; font-weight: bolder;">NÃO</span> FORAM PREENCHIDOS CORRETAMENTE</h4>';
                    foreach($vet_erros as $erro) {
                        echo $erro . '<br>';
                    }
                echo '<div>';

                echo '<br><br>';

                echo '<a href="../index.php">Voltar para o formulário</a>';
                
            }
            


        }






        /* var_dump( $dados );
        var_dump( $mensagem_erro ); */

    ?>

</body>
</html>