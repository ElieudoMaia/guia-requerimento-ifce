<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="materialize/css/materialize.css">

    <title>Guia de Requerimento</title>

</head>
<body>
    
    <div class="container">
        <div class="row" style="padding: 50px 0;">
            
                <form action="validacao/validar-requerimento.php" method="post">
                    
                    <div class="col s2 m6">
                        <img src="imagens/ifce.png" height="90px" alt="logo ifce">
                    </div>
                    <div class="col s2 m6">
                        <h5 class="right-align"><strong>GUIA DE REQUERIMENTO</strong></h5>
                    </div>

                    <div class="col s8 offset-s4 m3 offset-m9">
                        <label for="protocolo">Protocolo nº:</label>
                        <input type="text" disabled name="protocolo" id="protocolo">
                    </div>
                    
                    <div class="col s12 m6">
                        <label for="requerente">Requerente:</label>
                        <input type="text" name="requerente" id="requerente" placeholder="Nome completo">
                    </div>
                    <div class="col s12 m3">
                        <label for="data-nascimento">Data Nascimento:</label>
                        <input type="text" name="data_nascimento" id="data-nascimento" placeholder="dd/mm/aaaa">
                    </div>
                    <div class="col s12 m3">
                        <label for="matricula">Nº Matrícula:</label>
                        <input type="text" name="matricula" id="matricula" placeholder="Matrícula">
                    </div>

                    <div class="col s12 m8">
                        <label for="filiacao">Filiação:</label>
                        <input type="text" name="filiacao" id="filiacao" placeholder="Nome do Pai ou Mãe">
                    </div>
                    <div class="col s12 m4">
                        <label for="naturalidade">Naturalidade:</label>
                        <input type="text" name="naturalidade" id="naturalidade" placeholder="Naturalidade">
                    </div>

                    <div class="col s12 m6">
                        <label for="curso">Curso:</label>
                        <input type="text" name="curso" id="curso" placeholder="Curso no IFCE">
                    </div>
                    <div class="col s12 m3">
                        <label for="periodo">Período:</label>
                        <input type="text" name="periodo" id="periodo" placeholder="Semestre atual">
                    </div>
                    <div class="col s12 m3">
                        <label for="turno">Turno:</label>
                        <input type="text" name="turno" id="turno" placeholder="Manhã/Tarde/Noite">
                    </div>

                    <div class="col s12 m3">
                        <label for="telefone">Telefone(s):</label>
                        <input type="text" name="telefone" id="telefone" placeholder="(00) 0 0000-0000">
                    </div>
                    <div class="col s12 m3">
                        <label for="telefone2">Telefone 2:</label>
                        <input type="text" name="telefone2" id="telefone2" placeholder="(00) 0 0000-0000">
                    </div>
                    <div class="col s12 m6">
                        <label for="email">E-mail:</label>
                        <input type="email" name="email" id="email" placeholder="exemplo@email.com">
                    </div>

                    <div class="col s12">
                        <div>
                            <p><strong>ASSINALE:</strong></p>
                        </div>
                    </div>

                    <div class="col s12 m6">
                        <div>
                            <label>
                                <input type="radio" class="with-gap" name="motivo_requerimento" value="1">
                                <span>2ª via (especificar) | CAA</span>
                            </label>
                        </div>
                        
                        <div>
                            <label>
                                <input type="radio" class="with-gap" name="motivo_requerimento" value="2">
                                <span>Aproveitamento de Disciplina (anexar Histórico Escolar e Programa da Disciplina) | Coordenação do Curso</span>
                            </label>
                        </div>
                        
                        <div>
                            <label>
                                <input type="radio" class="with-gap" name="motivo_requerimento" value="3">
                                <span>Matrícula fora do prazo (justificar) | CAA</span>
                            </label>
                        </div>
                        
                        <div>
                            <label>
                                <input type="radio" class="with-gap" name="motivo_requerimento" value="4">
                                <span>Cancelamento da Matrícula | CAA</span>
                            </label>
                        </div>
                        
                        <div>
                            <label>
                                <input type="radio" class="with-gap" name="motivo_requerimento" value="5">
                                <span>Colação de Grau / Colação Especial(justificar) | CAA</span>
                            </label>
                        </div>
                        
                        <div>
                            <label>
                                <input type="radio" class="with-gap" name="motivo_requerimento" value="6">
                                <span>Declaração (especificar) | CAA</span>
                            </label>
                        </div>
                        
                        <div>
                            <label>
                                <input type="radio" class="with-gap" name="motivo_requerimento" value="7">
                                <span>Diploma (especificar) | CAA</span>
                            </label>
                        </div>
                        
                        <div>
                            <label>
                                <input type="radio" class="with-gap" name="motivo_requerimento" value="8">
                                <span>Histórico Escolar | CAA</span>
                            </label>
                        </div>
                        
                        <div>
                            <label>
                                <input type="radio" class="with-gap" name="motivo_requerimento" value="9">
                                <span>Reabertura de Matrícula | CAA</span>
                            </label>
                        </div>
                        
                        <div>
                            <label>
                                <input type="radio" class="with-gap" name="motivo_requerimento" value="10">
                                <span>Segunda Chamada (anexar justificativa e especificar) | Coordenação do Curso</span>
                            </label>
                        </div>
                        
                        <div>
                            <label>
                                <input type="radio" class="with-gap" name="motivo_requerimento" value="11">
                                <span>Reingresso | CAA</span>
                            </label>
                        </div>
                    </div>

                    <div class="col s12 m6">
                        <div>
                            <label>
                                <input type="radio" class="with-gap" name="motivo_requerimento" value="12">
                                <span>Trancamento de Disciplina (especificar) | Coordenação dos Cursos</span>
                            </label>
                        </div>
                        
                        <div>
                            <label>
                                <input type="radio" class="with-gap" name="motivo_requerimento" value="13">
                                <span>Trancamento de Matrícula (anexar documentação comprobatória) | Coordenação Pedagógica</span>
                            </label>
                        </div>
                        
                        <div>
                            <label>
                                <input type="radio" class="with-gap" name="motivo_requerimento" value="14">
                                <span>Transferência para outra instituição | CAA</span>
                            </label>
                        </div>
                        
                        <div>
                            <label>
                                <input type="radio" class="with-gap" name="motivo_requerimento" value="15">
                                <span>Validação de Conhecimento(especificar) | Coordenação dos Cursos</span>
                            </label>
                        </div>
                        
                        <div>
                            <label>
                                <input type="radio" class="with-gap" name="motivo_requerimento" value="16">
                                <span>Reajuste | CAA</span>
                            </label>
                        </div>
                        
                        <div>
                            <label>
                                <input type="radio" class="with-gap" name="motivo_requerimento" value="17">
                                <span>Recorreção de Prova | Coordenação do Curso</span>
                            </label>
                        </div>
                        
                        <div>
                            <label>
                                <input type="radio" class="with-gap" name="motivo_requerimento" value="18">
                                <span>AUXÍLIO - Transporte | Serviço Social</span>
                            </label>
                        </div>
                        
                        <div>
                            <label>
                                <input type="radio" class="with-gap" name="motivo_requerimento" value="19">
                                <span>AUXÍLIO - Moradia | Serviço Social</span>
                            </label>
                        </div>
                        
                        <div>
                            <label>
                                <input type="radio" class="with-gap" name="motivo_requerimento" value="20">
                                <span>AUXÍLIO - Óculos | Serviço Social</span>
                            </label>
                        </div>
                        
                        <div>
                            <label>
                                <input type="radio" class="with-gap" name="motivo_requerimento" value="21">
                                <span>AUXÍLIO - Pais e Mães | Serviço Social</span>
                            </label>
                        </div>
                        
                        <div>
                            <label>
                                <input type="radio" class="with-gap" name="motivo_requerimento" value="22">
                                <span>Outros (especificar)</span>
                            </label>
                        </div>
                        
                    </div>

                    <div class="col s12">
                        <div>
                            <p><strong>ESPECIFICAR:</strong></p>
                        </div>
                    </div>
                    <div class="col s12">
                        <textarea name="especificacao"></textarea>
                    </div>

                    <div class="col s12">
                        <div>
                            <p><strong>JUSTIFICAR:</strong></p>
                        </div>
                    </div>
                    <div class="col s12">
                        <textarea name="justificativa"></textarea>
                    </div>

                    <div class="col s12 center-align">
                        <div>
                            <p><strong>DECLARO CONHECER O REGIMENTO DESTA IFE, BEM COMO O PRAZO NECESSÁRIO À TRAMITAÇÃO DO PROCESSO</strong></p>
                        </div>
                    </div>
                    <div class="col s12 m4 offset-m1 center-align">
                        <input type="text" name="assinatura_requerente" id="assinatura-requerente">
                        <label for="assinatura_requerente">REQUERENTE (ASS. LEGÍVEL)</label>
                    </div>
                    <div class="col s12 m4 offset-m2 center-align">
                        <input type="text" name="assinatura_funcionario" id="assinatura-funcionario">
                        <label for="assinatura_funcionario">FUNCIONÁRIO (ASS. LEGÍVEL)</label>
                    </div>

                    <div class="col s12 center-align">
                        <?php

                            $mes = date('m');
                            $desc_mes = '';

                            switch($mes) {
                                case '01': $desc_mes = 'Janeiro';
                                    break;
                                case '02': $desc_mes = 'Fevereiro';
                                    break;
                                case '03': $desc_mes = 'Março';
                                    break;
                                case '04': $desc_mes = 'Abril';
                                    break;
                                case '05': $desc_mes = 'Maio';
                                    break;
                                case '06': $desc_mes = 'Junho';
                                    break;
                                case '07': $desc_mes = 'Julho';
                                    break;
                                case '08': $desc_mes = 'Agosto';
                                    break;
                                case '09': $desc_mes = 'Setembro';
                                    break;
                                case '10': $desc_mes = 'Outubro';
                                    break;
                                case '11': $desc_mes = 'Novembro';
                                    break;
                                case '12': $desc_mes = 'Dezembro';
                            }

                            echo '<p>CEDRO, <strong>' . date('d') . '</strong> DE <strong>' . $desc_mes . '</strong> DE <strong>' . date('Y') . '</strong></p>';

                        ?>
                    </div>

                    <!-- Vistos -->
                    <div class="col s12 grey lighten-5">
                        
                        <div class="col s12 m6">
                            <p class="center-align"><strong>VISTO (COORDENAÇÃO DE ASSUNTOS ESTUDANTIS)</strong></p>
                            <p>
                                <label>
                                    <input class="with-gap" type="radio" name="visto_assitencia" value="1"/>
                                    <span>O requerente NÃO deve chave de armário</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input class="with-gap" type="radio" name="visto_assitencia" value="2"/>
                                    <span>O requerente deve chave do armário:</span>
                                </label>
                            </p>
                            <p>
                                <input type="text" name="armario_devido" id="armario-devido" placeholder="Nº Armário(s) (Caso haja débito)">
                            </p>
                            <p class="center-align">
                                <input type="text" name="assinatura_assistencia" id="assinatura_assistencia">
                                <label for="assinatura_assistencia">Responsável (ass. Legível)</label>
                            </p>
                        </div>

                        <div class="col s12 m6">
                            <p class="center-align"><strong>VISTO (BIBLIOTECA)</strong></p>
                            <p>
                                <label>
                                    <input class="with-gap" type="radio" name="visto_biblioteca" value="1"/>
                                    <span>O requerente NÃO deve livros na biblioteca</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input class="with-gap" type="radio" name="visto_biblioteca" value="2" />
                                    <span>O requerente deve livros na biblioteca:</span>
                                </label>
                            </p>
                            <p>
                                <input type="text" name="livro_devido" id="livro_devido" placeholder="Livros pendentes">
                            </p>
                            <p class="center-align">
                                <input type="text" name="assinatura_biblioteca" id="assinatura_biblioteca">
                                <label for="assinatura_biblioteca">Responsável (ass. Legível)</label>
                            </p>
                        </div>
                    </div>

                    <div class="col s12 right-align" style="margin: 20px 0;">
                        <input type="submit" value="Enviar Requerimento" class="btn cyan darken-1">
                    </div>

                </form>

        </div>
    </div>

    <script src="materialize/js/materialize.js"></script>
</body>
</html>