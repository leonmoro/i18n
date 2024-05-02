<h1>Criar uma rede WiFi utilizando o Notebook</h1>
<br />
<p>
    Se você deseja utilizar o aplicativo Holyrics mas não tem WiFi na sua igreja, ou se você não quer ficar utilizando o seu próprio celular para ficar roteando WiFi, está no lugar certo!<br />
    É possível fazer do Notebook um roteador WiFi, onde todos poderão se conectar a ele.<br />
    Não é necessário internet para fazer esta configuração e também não é necessário internet para o aplicativo Holyrics se comunicar com o programa Holyrics no Notebook.<br />
    Vamos aprender agora:<br />
</p>
<p style='color:black'>
    - Pressione a tecla de atalho WINDOWS + R<br /><br />
    <img src='images/windows-plus-r.png'/><br /><br /><br />
    - Na janela que vai abrir, digite "cmd" (sem aspas) e aperte ENTER<br /><br />
    <img src='images/type-cmd.png'/><br /><br /><br />
    - Na tela preta, digite o comando a seguir, ALTERANDO as palavras </b><code><i>nomedarede</i></code> e <code><i>senhadowifi</i></code> pelos respectivos valores que desejar e depois pressione ENTER:<br />
&nbsp;&nbsp;&nbsp;&nbsp;Comando: <span class='no-wrap'><code>netsh wlan set hostednetwork mode=allow ssid=<i>minharede</i> key=<i>minhasenha</i></code></span><br />
&nbsp;&nbsp;&nbsp;&nbsp;Caso queira copiar o comando e colar nessa janela preta, você precisa clicar com o botão direito do mouse na janela para colar o comando copiado, o atalho CTRL+V não irá funcionar.<br />
&nbsp;&nbsp;&nbsp;&nbsp;<span style='color:red'>Atenção! Se você quiser colocar espaço no nome da rede ou na senha você vai precisar colocar entre aspas, exemplo: <span class='no-wrap'><code>ssid="minha rede" key="minha senha"</code></span></span><br /><br />
<img src='images/prompt.png'/><br /><br />
- Após feito isso, aparecerão as mensagens de que a configuração foi bem-sucedida (assim esperamos).</b><br /><br />
- PRONTO! A configuração terminou, mas você precisaria fazer todo esse passo a passo novamente (mudando apenas o comando utilizado) para habilitar a rede WiFi sempre que ligasse o notebook. Mas é possível facilitar isso.<br/>
Baixe o arquivo <a href='/download/file/start-wifi.bat' target='_blank'><b>start-wifi.bat</b></a> e execute-o.<br />
Execute o arquivo <b>start-wifi.bat</b> sempre que ligar ou reiniciar o notebook para habilitar o WiFi.<br />
Baixe também o arquivo <a href='/download/file/stop-wifi.bat' target='_blank'><b>stop-wifi.bat</b></a> e execute-o caso precise desabilitar temporariamente o WiFi.<br /><br />
<b>OBSERVAÇÕES IMPORTANTES:</b><br/>
<ul>
    <li>Desative seu pacote de dados (3g/4g) quando for se comunicar com Holyrics no notebook. Não por conta da economia de dados (afinal não irá gastar nada), mas porque, com o pacote de dados ativado, provavelmente o APP não vai conseguir se comunicar com o programa no notebook, pois o notebook cria uma rede WiFi que não tem internet e o sistema Android irá dar preferência automaticamente a tentar se comunicar com o Holyrics no notebook através do pacote de dados (internet), o que obviamente não dará certo.</li><br />
    <li>
        Arquivos <b>.bat</b> são <b>perigosos</b>, não execute arquivos desse tipo sem que você confie na fonte que disponibilizou o arquivo a você. Você pode <b>conferir</b> o conteúdo dos arquivos aqui disponibilizados clicando com o botão direito em cima do arquivo baixado e selecionando a opção <b>editar</b>.<br />
        Veja que o conteúdo é uma simples linha de comando: <br />
        <b>start-wifi.bat</b> <span class='no-wrap'><code>netsh wlan start hostednetwork</code></span><br />
        <b>stop-wifi.bat</b> <span class='no-wrap'><code>netsh wlan stop hostednetwork</code></span>
    </li>
</ul>				    
</p>