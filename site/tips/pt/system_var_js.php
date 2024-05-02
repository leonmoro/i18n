A funcionalidade <b>Variáveis do Sistema</b> permite utilizar códigos que se transformam em um conteúdo específico no texto exibido na tela de projeção.<br />
Por exemplo, o código <code>@hora_minuto_segundo</code> se transforma na hora, minuto e segundo atual do sistema enquanto o texto estiver em exibição.<br />
<br />
Também é possível escrever métodos javascript para utilizar como uma variável do sistema dentro do próprio texto que será exibido na projeção, por exemplo: <br />
Você pode criar um método javascript chamado <b>saudacao</b> e colocar o código <code>@js{saudacao}</code> no texto de um slide, ou no painel de comunicação, ou numa mensagem de alerta.<br />
O código <code>@js{saudacao}</code> no texto será convertido em tempo real para o conteúdo retornado pelo método definido em javascript.<br />
É útil para criar slides com informações que podem ser atualizadas em tempo real, sem a intervenção do usuário.<br />
<br />
<br />
Exemplos: <br />
<br />
<?php
echo get_img_tag_popup("images/system_var_js_1.jpg");
echo get_img_tag_popup("images/system_var_js_2.jpg");