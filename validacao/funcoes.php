<?php

    // Limpar dados para evitar possíveis scripts
    function __e($input) {
        $input = trim($input); // tira os espaços
        $input = stripslashes($input); // escapa as barras
        $input = htmlspecialchars($input); // converte os caracteres especiais
        return $input;
    }
    function limparVetor($varPost) {
        $arrayLimpo = [];
        foreach ($varPost as $indice => $valor) {
            $arrayLimpo[$indice] = __e($valor);
        }
        return $arrayLimpo;
    }

    // Verificar se o formulário foi enviado
    function formEnviado($postArray) {
        global $dados;
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Limpar post
            $dados = limparVetor($postArray);
            return true;
        } else {
            header('Location: ../index.php');
            die();
        }
    }

    // Criar mensagem de erro (faz a validação com base nas condicionais)
    function gerarMensagensErro($postArray) {
        global $mensagem_erro;

        if ($postArray["requerente"] == "") {
            $mensagem_erro["requerente_vazio"] = "Informe o nome completo do Requerente";
        }
        if ($postArray["data_nascimento"] == "") {
            $mensagem_erro["data_nascimento_vazia"] = "Informe a data de nascimento";
        }
        if ($postArray["matricula"] == "") {
            $mensagem_erro["matricula_vazia"] = "Informe a matrícula do aluno";
        }
        if ($postArray["filiacao"] == "") {
            $mensagem_erro["filiacao_vazia"] = "Informe o nome do pai ou da mãe";
        }
        if ($postArray["naturalidade"] == "") {
            $mensagem_erro["naturalidade_vazia"] = "Informe a cidade natal";
        }
        if ($postArray["curso"] == "") {
            $mensagem_erro["curso_vazio"] = "Informe seu curso";
        }
        if ($postArray["periodo"] == "") {
            $mensagem_erro["periodo_vazio"] = "Informe que está cursando";
        }
        if ($postArray["turno"] == "") {
            $mensagem_erro["turno_vazio"] = "Informe o turno de suas aulas";
        }
        if ($postArray["telefone"] == "" && $postArray["telefone2"] == "") {
            $mensagem_erro["telefones_vazios"] = "Informe pelo menos 1 número de telefone";
        }
        if ($postArray["email"] == "") {
            $mensagem_erro["email_vazio"] = "Informe o seu email";
        }

        if(!isset($postArray["motivo_requerimento"])) {
            $mensagem_erro["motivo_requerimento_vazio"] = "Marque o motivo do requerimento";
        } else {
            // especificar
            if($postArray["motivo_requerimento"]==1 || $postArray["motivo_requerimento"]==6 || $postArray["motivo_requerimento"]==7 || $postArray["motivo_requerimento"]==10 || $postArray["motivo_requerimento"]==12 || $postArray["motivo_requerimento"]==15 || $postArray["motivo_requerimento"]==22) {

                if($postArray['especificacao'] == "") {
                    $mensagem_erro["motivo_requerimento_especificacao_vazia"] = "O motivo do requerimento precisa ser especificado";
                }

            }
            // justificar
            if($postArray["motivo_requerimento"]==3 || $postArray["motivo_requerimento"]==5 || $postArray["motivo_requerimento"]==10) {

                if($postArray['justificativa'] == "") {
                    $mensagem_erro["motivo_requerimento_justificativa_vazia"] = "O motivo do requerimento precisa ser justificado";
                }

            }
        }

        if($postArray["assinatura_requerente"] == "") {
            $mensagem_erro["assinatura_requerente_vazia"] = "Preencha o campo de assinatura do requerente";
        }
        if($postArray["assinatura_funcionario"] == "") {
            $mensagem_erro["assinatura_funcionario_vazia"] = "Preencha o campo de assinatura do funcionário";
        }

        if( !isset($postArray["visto_assitencia"]) ) {
            $mensagem_erro["visto_assitencia_vazio"] = "O visto da coordenação é Obrigatório";
        } else {
            if($postArray["visto_assitencia"] == 2 && $postArray["armario_devido"] == "") {
                $mensagem_erro["armario_devido_vazio"] = "Especifique o número da chave do armário pendente";
            }
        }

        if($postArray["assinatura_assistencia"] == "") {
            $mensagem_erro["assinatura_assistencia_vazia"] = "A assinatura da coordenação de assuntos estudantis é obrigatória";
        }

        if( !isset($postArray["visto_biblioteca"]) ) {
            $mensagem_erro["visto_biblioteca_vazio"] = "O visto da biblioteca é Obrigatório";
        } else {
            if($postArray["visto_biblioteca"] == 2 && $postArray["livro_devido"] == "") {
                $mensagem_erro["livro_devido_vazio"] = "Especifique o livro pendente";
            }
        }

        if($postArray["assinatura_biblioteca"] == "") {
            $mensagem_erro["assinatura_biblioteca_vazia"] = "A assinatura do(a) bibliotecário(a) é obrigatória";
        }

        return $mensagem_erro;
    }

?>