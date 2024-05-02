É possível definir uma textura para alguns itens de exibição.<br />
<br />
Texturas disponíveis: <br />
<br />
• Cor sólida <br />
O item será renderizado utilizando a cor definida.<br />
<br />
• Transparente <br />
(Disponível para fonte/texto)<br />
Textura para ser utilizada em conjunto com um contorno ou cor de fundo.<br />
Será aplicada uma transparência no local do texto.<br />
<br />
• Gradiente <br />
O item será renderizado com o gradiente de cores definido, horizontal ou vertical.<br />
<br />
• Imagem <br />
Permite selecionar uma imagem como base para renderizar o item utilizando a imagem como textura.<br />
<br />
<br />
Exemplos: <br />
<br />
<?php
for ($i = 1; $i <= 6; $i++) {
    echo get_img_tag_popup("images/color_texture_$i.jpg");
}