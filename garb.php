<?php
/**
 * 
 * GARB - GERADOR DE ARQUIVOS DE REMESSA BRADESCO
 * 
 * @author Thiago Henrique
 * 
 * PATA TESTE
 * Para a realiza��o do teste, poder� ser transmitido quantos Arquivos Remessa lhes convier,
 * por�m, gravados com todos os dados fict�cios, exigidos no Lay-out, e dever� conter no
 * m�ximo 10 registros a vencer. Ap�s a oficializa��o, os Arquivos Remessa poder�o conter
 * quantos registros lhes convier. Os arquivos n�o devem em hip�tese alguma seres compactados
 * e sim zonados, bem como os registros devem ser de acordo com as especifica��es do Lay-out.
 * 
 * CBDDMM??.REM
 *	CB � Cobran�a Bradesco
 *	DD � O Dia gera��o do arquivo
 *	MM � O M�s da gera��o do Arquivo
 *	?? - vari�veis alfanum�rico-Num�ricas
 *	Ex.: 01, AB, A1 etc.
 * Nota: Quando se tratar de arquivo remessa para teste, a extens�o dever� ser TST.
 */

//REALIZANDO TESTES
include 'src/HeaderLabel.php';
include 'src/Detalhes.php';
include 'src/Trailler.php';

$cabecalho = new HeaderLabel();

//TESTANDO O HEADERLABEL
$cabecalho->setCodigo_empresa('105508');
$cabecalho->setNome_empresa('Agnetech Solu��es empresariais');
$cabecalho->setNumero_sequencial_remessa('0000219');
$cabecalho->setData_gravacao('280815'); 

echo "<pre>";
echo $cabecalho->montar_linha() . '<br>';

//FIM DO TESTE HEADERLABEL

//TESTANDO DETALHES
$detalhes = new Detalhes();



//preenchendo dados dos detalhes
$detalhes->setAgencia_debito(9999);
$detalhes->setDigito_debito_debito(9);
$detalhes->setRazao_conta_corrente(99999);
$detalhes->setConta_corrente(999);
$detalhes->setDigito_conta_corrente(9);
$detalhes->setIdentificacao_empresa_benificiario_banco(9999999999999);
$detalhes->setNumero_controle_participante(36541695163);
$detalhes->setCodigo_banco_debito_compensacao(true);
$detalhes->setCampo_multa(true);
$detalhes->setPercentual_multa(9);
$detalhes->setIdentificacao_titulo_banco(999999999);
$detalhes->setDigito_auto_consferencia_bancaria('P');
$detalhes->setDesconto_bonificacao_dia(99999999);
$detalhes->setIndicador_rateio_credito(false);
$detalhes->setNumero_documento(9999999);
$detalhes->setData_vencimento_titulo('201015');
$detalhes->setValor_titulo(99999999999);
$detalhes->setData_emissao_titulo('101015');
$detalhes->setValo_cobrado_dia_atraso(5550);
$detalhes->setData_limite_desconto('251015');
$detalhes->setValor_desconto(9999999999);
$detalhes->setValor_iof(99999999);
$detalhes->setValor_abatimento_concedido_cancelado(9999999999);
$detalhes->setIdentificacao_tipo_incricao_pagador('CPF');
$detalhes->setNumero_inscricao_pagador('09191332400');
$detalhes->setNome_pagador('Thiago Henrique Pequeno  Silvaxxxxxxxx');
$detalhes->setEndereco_pagador('RUA FULA NO TAL');
$detalhes->setPrimeira_mensagem('OLA');
$detalhes->setCep(99999);
$detalhes->setSufixo_cep(999);
$detalhes->setSacador_segunda_mensagem('OLA ESSA � UMA MENSAGEM');
$detalhes->setNumero_sequencial_registro(99999);

$linha = $detalhes->montar_linha();

for ($i = 0; $i < 25; $i++) {
	echo $linha . '<br>';
}

//FIM DE TESTES DE DETALHES
echo '<br> Quantidade de caracteres dos detalhes: ' . strlen($linha);


//TESTANDO O TRAILLER
$trailler = new Trailler();

echo '<br>';
$trailler->setNumero_sequencial_regsitro('132');

echo $trailler->montar_linha();
echo '</pre>';
//FIM DO TESTE TRAILLER
