A opção <b>Ambiente de Execução</b> serve para facilitar o gerenciamento de algumas outras funcionalidades no programa.<br />
<br />
Considere a situação: <br />
<br />
Existem três computadores diferentes (PC1, PC2 e PC3) na mesma rede.<br />
Os computadores PC1 e PC2 ficam no salão A e o PC3 no salão B.<br />
O programa Holyrics é executado nos computadores PC1 e PC3 e estão com a sincronização via Google Drive™ ativada entre eles.<br />
Nesse caso, os gatilhos criados no programa são sincronizados entre os dois computadores.<br />
Criamos um gatilho (receptor <b>OBS</b>) para o Holyrics aberto no PC1 (salão A) enviar comandos ao OBS Studio aberto no PC2 (salão A) que é o computador da transmissão.<br />
Mas ao executar o programa no PC3 (salão B) o Holyrics também envia comandos ao PC2 (salão A), porém não é isso que queremos.<br />
<br />
Podemos resolver isso criando ambientes de execução.<br />
<br />
No menu arquivo, configurações, avançado, crie um ambiente chamado <b>PC1</b> e um ambiente chamado <b>PC2</b>;<br />
Selecione no Holyrics de cada computador seu ambiente de execução correspondente;<br />
Defina nas configurações de execução do receptor <b>OBS</b> para ele executar somente no ambiente <b>PC1</b>.<br />
<br />
Dessa forma, o receptor <b>OBS</b> enviará os comandos dos gatilhos somente do computador <b>PC1</b>.<br />
<br />
<br />
Também é possível definir a execução baseado no <b>ambiente de execução</b> para cada gatilho individualmente.<br />
<br />
<br />
Exemplos: <br />
<br />
<?php
echo get_img_tag_popup("images/runtime_environment.jpg");
