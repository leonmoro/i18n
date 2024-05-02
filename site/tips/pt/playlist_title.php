O item <b>Título</b> da lista de reprodução de mídia tem comportamento especial, podendo ocultar/expandir a lista de itens abaixo dele, como um grupo de itens.<br />
<br />
Clique com o botão direito do mouse nos 3 pontinhos da aba <b>mídia</b> (ou numa área vazia da lista), submenu diversos, para adicionar um título.<br />
Você também pode clicar com o botão direito do mouse em cima de um título já criado e selecionar a opção <b>clonar</b>.<br />
<br />
É possível definir uma cor de fundo para cada título.<br />
<br />
Exemplos: <br />
<br />
<?php
for ($i = 1; $i <= 4; $i++) {
    echo get_img_tag_popup("images/playlist_title_$i.jpg");
}