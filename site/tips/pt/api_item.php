<h1>API Item</h1>

É possível criar itens para adicionar na barra de favoritos ou na lista de reprodução que executam requisições HTTP, enviam códigos MIDI para outros disposivos ou executam um código JavaScript.<br />
Isso permite executar ações em outros programas e dispositivos, como OBS Studio, programa de iluminação, câmeras PTZ, etc., ou executar scripts que interagem com o programa, podendo executar ações ou uma lista de ações de forma programática e precisa.<br />
Por exemplo, é possível criar um item que, quando executado, altera uma cena no seu programa de transmissão, ou um item que seleciona um preset de uma câmera PTZ na rede, etc.<br />
Essas ações podem ser executadas clicando no item ou também executadas automaticamente através da funcionalidade <b>Gatilhos</b> do programa.<br />
Por exemplo, é possível criar um gatilho para que sempre que o Holyrics apresentar a imagem X na projeção, altera automaticamente para a cena Y no seu programa de transmissão.<br />
Ou sempre que apresentar um versículo da Bíblia, altera automaticamente para a cena Z no seu programa de transmissão.<br />
São muitas possibilidades de automatização que facilitam e economizam trabalho da equipe de multimídia.<br />
<br />
<br />
<b>TUTORIAL</b><br />
<br />
<b>Exemplo de como criar um item API que altera uma cena do OBS Studio:</b>
<ul>
    <li>
        Menu ferramentas > diversos > API<br />
        Botão <b>Adicionar</b>.<br />
        <img src='images/api_item_img01.png' /><br />
        <br />
    </li>
    <li>
        Defina um nome para o item e selecione a opção para criar um receptor.<br />
        <img src='images/api_item_img02.png' /><br />
        <br />
    </li>
    <li>
        Crie um receptor URL com o nome que desejar.<br />
        <img src='images/api_item_img03.png' /><br />
        <br />
    </li>
    <li>
        Configure a URL com o IP do equipamento onde o programa OBS Studio é executado.<br />
        Você pode definir o campo como <b>localhost</b> caso esteja sendo executado no mesmo computador.<br />
        Altere o campo <b>Tipo</b> para <b>OBS Studio WebSocket</b>.<br />
        Configure a senha de acesso webservice do OBS Studio no item <b>configurações</b>.<br />
        A senha definida no OBS Studio, menu ferramentas, item <b>WebSockets WebService Settings</b>.<br />
        <img src='images/api_item_img04.png' /><br />
        <br />
    </li>
    <li>
        Depois de criar o receptor, volte à janela anterior e altere o campo <b>Receptor</b> do item API para o receptor que acabou de criar.<br />
        Selecione o item <b>Alterar Cena com Transição</b> e defina o nome da cena e o nome da transição conforme desejar.<br />
        <img src='images/api_item_img05.png' /><br />
        <br />
    </li>
    <li>
        Depois de criar o item API, você pode adicioná-lo à barra de favoritos ou na lista de reprodução de mídia.<br />
        <img src='images/api_item_img06.png' /><br />
        <br />
    </li>
</ul>
<br />
<b>Observação:</b><br />
Não é necessário criar um receptor para cada item API.<br />
Se quiser criar outro item API para controlar o OBS Studio, basta apenas selecionar o mesmo receptor.<br />
<br />
<br />
<hr />
<b>Exemplo de como configurar gatilhos de automatização:</b><br />
No exemplo a seguir, sempre que a imagem <b>Oferta.jpg</b> for projetada, será enviada uma requisição para alterar a cena do OBS Studio para a cena com o nome <b>Oferta</b>.<br />
E sempre que encerrar a apresentação da imagem <b>Oferta.jpg</b> na projeção, será enviada uma requisição para alterar para a cena <b>Cena 1</b>.<br />
<br />
Sempre que um versículo da Bíblia for projetado, será enviada uma requisição para alterar para a cena <b>Bíblia</b>.<br />
E sempre que remover um versículo da projeção, será enviada uma requisição para alterar para a cena <b>Cena 1</b>.<br />
<br />
<img src='images/api_item_img07.png' /><br />
<br />
<b>Observação:</b><br />
A lista de receptores criados para um item API e para um item de gatilho são independentes, então será necessário criar o receptor novamente para uso na funcionalidade gatilhos.<br />
O procedimento é o mesmo já explicado anteriormente para o item API.<br />
<br />
<br />
