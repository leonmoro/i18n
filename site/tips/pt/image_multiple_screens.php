<h1>Exibir diferentes imagens em múltiplas telas</h1>

Para exibir imagens diferentes em telas diferentes, utilize uma regra de nomenclatura nos arquivos da pasta <b>imagem</b> do programa.<br />
O início nome do arquivo deve ser igual, adicionando a regra no final do nome do arquivo.<br />
<br />
Exemplo:<br />
nome da imagem.jpg<br />
nome da imagem__3x4.jpg<br />
nome da imagem__16x9.jpg<br />
nome da imagem__stream_html_1.jpg<br />
<br />
(São 2 underscores separando o nome e a regra)<br />
<br />
Possíveis formatos: <br />
1x1, 3x4, 16x9, 9x16, 4x3, stream_html_1, stream_html_2, stream_html_3, screen_2, screen_3, ... <br />
<br />
Ao exibir o arquivo <b>nome da imagem.jpg</b>, o arquivo principal será exibido na tela principal (público).<br />
Caso você utilize outras saídas no programa, as imagens correspondentes serão exibidas, caso existam na pasta.<br />
<br />
Exemplo:<br />
Se você tem uma segunda tela de projeção 4x3 e o arquivo <b>nome da imagem__4x3.jpg</b> estiver na pasta, essa imagem será exibida nessa tela 4x3.<br />
<br />
Se você utiliza a saída HTML 1 para uma transmissão ao vivo e o arquivo <b>nome da imagem__stream_html_1.jpg</b> estiver na pasta, essa imagem será enviada para a saída HTML 1<br />
<br />
Isso permite, por exemplo, que você apresente uma imagem na projeção e uma imagem alternativa na transmissão de forma automática e prática.<br />
<br />
<b>Exemplo na pasta do Windows:</b><br />
<img src='images/image_multiple_screens_img01.png' /><br />

<br />
<b>Observação:</b><br />
Por questão de praticidade, na lista da aba de imagens do programa aparecerá somente a imagem principal <br />
<br />
<br />