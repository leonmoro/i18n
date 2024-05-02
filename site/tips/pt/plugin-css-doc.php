<h2>Documentação CSS Plugin</h2>

<div>
    <table class="table table-striped table-bordered">
        <tr>
            <th style="white-space: nowrap;">Nome da classe</th>
            <th>Tipo</th>
            <th>Descrição</th>
        </tr>
        <tr>
            <td>screen-custom</td>
            <td>&lt;div&gt;</td>
            <td>&lt;div&gt; geral que contém todos os elementos</td>
        </tr>
        <tr>
            <td>text-custom</td>
            <td>&lt;div&gt;</td>
            <td>Texto do slide (texto de qualquer apresentação)</td>
        </tr>
        <tr>
            <td>alert-custom</td>
            <td>&lt;div&gt;</td>
            <td>Alerta do slide</td>
        </tr>
        <tr>
            <td>bible-header-custom</td>
            <td>&lt;div&gt;</td>
            <td>Cabeçalho do versículo de um slide da Bíblia</td>
        </tr>
        <tr>
            <td>page-count-custom</td>
            <td>&lt;span&gt;</td>
            <td>Contagem de página (se ativado nas configurações de exibição, configurações HTML)</td>
        </tr>
        <tr>
            <td>image-custom</td>
            <td>&lt;img&gt;</td>
            <td>Exibição de slide de imagens (anúncio, imagem, etc...)</td>
        </tr>
        <tr>
            <td>music_slide</td>
            <td>&lt;span&gt;</td>
            <td>Apresentação de letra de música</td>
        </tr>
        <tr>
            <td>text_slide</td>
            <td>&lt;span&gt;</td>
            <td>Apresentação de textos</td>
        </tr>
        <tr>
            <td>bible_slide</td>
            <td>&lt;span&gt;</td>
            <td>Apresentação de versículos da Bíblia</td>
        </tr>
        <tr>
            <td>announcement_slide</td>
            <td>&lt;span&gt; e &lt;img&gt;</td>
            <td>Apresentação de anúncio</td>
        </tr>
        <tr>
            <td>image_slide</td>
            <td>&lt;span&gt; e &lt;img&gt;</td>
            <td>Apresentação de imagem</td>
        </tr>
        <tr>
            <td>empty_slide</td>
            <td>&lt;span&gt;</td>
            <td>Quando não há texto em exibição</td>
        </tr>
        <tr>
            <td style="white-space: nowrap;">communication_panel_slide</td>
            <td>&lt;span&gt;</td>
            <td>Exibição do conteúdo do Painel de Comunicação (menu janelas)</td>
        </tr>
        <tr>
            <td style="white-space: nowrap;">comment</td>
            <td>&lt;span&gt;</td>
            <td>Comentário <code>v2.21.0+</code></td>
        </tr>
        <tr>
            <td style="white-space: nowrap;">slide_description</td>
            <td>&lt;span&gt;</td>
            <td>Descrição do slide <code>v2.21.0+</code></td>
        </tr>
    </table>
    Exemplos: <a href="https://www.holyrics.com.br/tips/plugin-css" target="_blank">holyrics.com.br/tips/plugin-css</a><br />
    <br />
    <h3 style="margin: 0; padding: 0">Configurar efeito de transição</h3>
    <br />
    <div style="white-space: pre-line">Adicione a variável <code>animation_out_delay</code> no início do <b>CSS Personalizado</b> e defina o tempo de animação (em milissegundos) com a mesma duração da animação de saída (que será definida na classe <code>animation_out</code>).
<pre>:root {
    --animation_out_delay: 300;
}</pre>
Crie os efeitos de entrada e saída através de keyframes, exemplo:
<pre>@keyframes nome_da_animacao_de_entrada {
    from {opacity: 0.0}
    to   {opacity: 1.0}
}

@keyframes nome_da_animacao_de_saida {
    from {opacity: 1.0}
    to   {opacity: 0.0}
}</pre>
        Defina o efeito de entrada na classe <code>text-custom span</code>, exemplo:
<pre>.text-custom span {
    animation-name: nome_da_animacao_de_entrada;
    animation-duration: 0.3s;
    animation-fill-mode: forwards;
}</pre>
        Defina o efeito de saída na classe <code>animation_out</code>, exemplo:
<pre>.animation_out {
    animation-name: nome_da_animacao_de_saida;
    animation-duration: 0.3s;
    animation-fill-mode: forwards;
}</pre>
        Exemplo completo (fade-in / fade-out):
<pre>:root {
    --animation_out_delay: 300;
}

@keyframes nome_da_animacao_de_entrada {
    from {opacity: 0.0}
    to   {opacity: 1.0}
}

@keyframes nome_da_animacao_de_saida {
    from {opacity: 1.0}
    to   {opacity: 0.0}
}

.text-custom span {
    animation-name: nome_da_animacao_de_entrada;
    animation-duration: 0.3s;
    animation-fill-mode: forwards;
}

.animation_out {
    animation-name: nome_da_animacao_de_saida;
    animation-duration: 0.3s;
    animation-fill-mode: forwards;
}</pre>
    </div>
    <h3 id='presentation_info'>Informações da apresentação:</h3>
    Em uma apresentação de música ou texto, a página HTML carregará as informaçõe do item em elementos <b>div</b> individuais.<br />
    Informações disponíveis: <?php echo "<code>" . join("</code>&nbsp;&nbsp;<code>", ["music_title", "music_author", "music_artist", "music_copyright", "text_title"]) . "</code>"; ?><br />
    Os elementos ficam dentro do elemento <code>slide_info</code> que é definido como <code>display: none</code> por padrão.<br />
    Altere o CSS via classe ou id para exibir as informações no HTML, exemplo:<br />
<pre>.slide_info {
    display: block;
}
.music_title {
    position: absolute;
    left: 0px;
    top: 0px;
    color: white;
    font-size: 5vh;
}</pre>
    <br>
    <h3>Informações:</h3>
    Tamanho de fonte e tipo de fonte são alterados no programa Holyrics.<br />
    Configurações de exibição, respectiva aba HTML, configurações HTML.<br />
    <br />
    Para adicionar imagem de plano de fundo:<br />
    Obs.: Apenas links da internet, não funciona com arquivos do computador.<br />
    <pre>.screen-custom {
    background: url('link_da_imagem');
}
.text-custom {
    background-color: transparent !important;
}</pre>
    
</div>