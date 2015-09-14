# GARB---Gerador-de-Arquivos-de-Remessa-Bradesco
Gerador de arquivos de remessa CNAB 400p para o banco Bradesco

## Introdu��o
Essa biblioteca foi desenvolvida com a finalidade de ser integrada ao sistema de asseguradoras e
cooperativas SAV, no qual tem como objetivo principal criar Arquivos de Remessa CNAB 400 posi��es Bradesco, para que seja
processados todos os boletos de cobran�a pelo banco.

##Descri��o do arquivo de remessa Formato CNAB
 - Registro 0 : Header Label
 - Registro 1 : Transa��o
 - Registro 2 : Mensagem (opcional)
 - Registro 3 : Rateio de Cr�dito (opcional)
 - Registro 7 : Pagador Avalista (opcional)
 - Registro 9 : Trailler
 
 ##Procedimentos para cria��o do arquivo e envio
 ###Procedimentos da Empresa
 Para a realiza��o do teste, poder� ser transmitido quantos Arquivos Remessa lhes convier, 
 por�m, gravados com todos os dados fict�cios, exigidos no Lay-out, e dever� conter no m�ximo 
 10 registros a vencer. Ap�s a oficializa��o, os Arquivos Remessa poder�o conter quantos 
 registros lhes convier. Os arquivos n�o devem em hip�tese alguma seres compactados e sim 
 zonados, bem como os registros devem ser de acordo com as especifica��es do Lay-out.

 ###Procedimentos do Banco
 Independentemente da quantidade de Arquivos Remessa transmitidos, referente a um �nico c�digo 
 de Empresa (Pos. 27 a 46 Reg. Header Label), ser� gerado somente um arquivo retorno.
Mesmo que no dia anterior n�o tenha sido enviado nenhum Arquivo Remessa, ser� gerado um Arquivo 
Retorno contendo as ocorr�ncias sobre os T�tulos registrados anteriormente. Ex.: T�tulos pagos, 
baixados por decurso de prazo, com instru��o de protesto, enviados para cart�rio etc..

###Nome dos Arquivos Remessa 
Bradesco Net Empresa/Webta: O Arquivo Remessa dever� ter a seguinte formata��o:
CBDDMM??.REM
CB : Cobran�a Bradesco
DD : O Dia gera��o do arquivo
MM : O M�s da gera��o do Arquivo
?? : vari�veis alfanum�rico-Num�ricas
Ex.: 01, AB, A1 etc.

.Rem : Extens�o do arquivo.

Exemplo: CB010501. REM ou CB0105AB. REM ou CB0105A1.REM
Nota: Quando se tratar de arquivo remessa para teste, a extens�o dever� ser TST.

Exemplo: CB010501. TST, o retorno ser� disponibilizado como CB010501. RST.
