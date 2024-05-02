<h2>Documentation CSS Plugin</h2>

<div>
    <table class="table table-striped table-bordered">
        <tr>
            <th style="white-space: nowrap;">Classe name</th>
            <th>Type</th>
            <th>Description</th>
        </tr>
        <tr>
            <td>screen-custom</td>
            <td>&lt;div&gt;</td>
            <td>General &lt;div&gt; that contains all the elements</td>
        </tr>
        <tr>
            <td>text-custom</td>
            <td>&lt;div&gt;</td>
            <td>Slide text (text from any presentation)</td>
        </tr>
        <tr>
            <td>alert-custom</td>
            <td>&lt;div&gt;</td>
            <td>Slide alert</td>
        </tr>
        <tr>
            <td>bible-header-custom</td>
            <td>&lt;div&gt;</td>
            <td>Verse header for a Bible slide</td>
        </tr>
        <tr>
            <td>page-count-custom</td>
            <td>&lt;span&gt;</td>
            <td>Page count (if enabled in display settings, HTML settings)</td>
        </tr>
        <tr>
            <td>image-custom</td>
            <td>&lt;img&gt;</td>
            <td>Slide show of images (advertisement, image, etc ...)</td>
        </tr>
        <tr>
            <td>music_slide</td>
            <td>&lt;span&gt;</td>
            <td>Song presentation</td>
        </tr>
        <tr>
            <td>text_slide</td>
            <td>&lt;span&gt;</td>
            <td>Text presentation</td>
        </tr>
        <tr>
            <td>bible_slide</td>
            <td>&lt;span&gt;</td>
            <td>Bible verse presentation</td>
        </tr>
        <tr>
            <td>announcement_slide</td>
            <td>&lt;span&gt; e &lt;img&gt;</td>
            <td>Announcement display</td>
        </tr>
        <tr>
            <td>image_slide</td>
            <td>&lt;span&gt; e &lt;img&gt;</td>
            <td>Image presentation</td>
        </tr>
        <tr>
            <td>empty_slide</td>
            <td>&lt;span&gt;</td>
            <td>When there is no text on display</td>
        </tr>
        <tr>
            <td style="white-space: nowrap;">communication_panel_slide</td>
            <td>&lt;span&gt;</td>
            <td>Display of the contents of the Communication Panel (windows menu)</td>
        </tr>
        <tr>
            <td style="white-space: nowrap;">comment</td>
            <td>&lt;span&gt;</td>
            <td>Comment <code>v2.21.0+</code></td>
        </tr>
        <tr>
            <td style="white-space: nowrap;">slide_description</td>
            <td>&lt;span&gt;</td>
            <td>Slide description <code>v2.21.0+</code></td>
        </tr>
    </table>
    Examples: <a href="https://www.holyrics.com.br/tips/plugin-css" target="_blank">holyrics.com.br/tips/plugin-css</a><br />
    <br />
    <h3 style="margin: 0; padding: 0">Configure transition effect</h3>
    <br />
    <div style="white-space: pre-line">Add the <code>animation_out_delay</code> variable at the beginning of <b>Custom CSS</b> and set the animation time (in milliseconds) to the same duration as the output animation (which will be defined in the <code>animation_out</code> class).
<pre>:root {
    --animation_out_delay: 300;
}</pre>
Create the input and output effects using keyframes, example:
<pre>@keyframes input_animation_name {
    from {opacity: 0.0}
    to   {opacity: 1.0}
}

@keyframes output_animation_name {
    from {opacity: 1.0}
    to   {opacity: 0.0}
}</pre>
        Define the input effect in the <code>text-custom span</code> class, example:
<pre>.text-custom span {
    animation-name: input_animation_name;
    animation-duration: 0.3s;
    animation-fill-mode: forwards;
}</pre>
        Define the output effect in the <code> animation_out </code> class, example:
<pre>.animation_out {
    animation-name: output_animation_name;
    animation-duration: 0.3s;
    animation-fill-mode: forwards;
}</pre>
        Full example (fade-in / fade-out):
<pre>:root {
    --animation_out_delay: 300;
}

@keyframes input_animation_name {
    from {opacity: 0.0}
    to   {opacity: 1.0}
}

@keyframes output_animation_name {
    from {opacity: 1.0}
    to   {opacity: 0.0}
}

.text-custom span {
    animation-name: input_animation_name;
    animation-duration: 0.3s;
    animation-fill-mode: forwards;
}

.animation_out {
    animation-name: output_animation_name;
    animation-duration: 0.3s;
    animation-fill-mode: forwards;
}</pre>
    </div>
    <h3 id='presentation_info'>Presentation info:</h3>
    In a music or text presentation, the HTML page will load item information into individual <b>div</b> elements.<br />
    Available info: <?php echo "<code>" . join("</code>&nbsp;&nbsp;<code>", ["music_title", "music_author", "music_artist", "music_copyright", "text_title"]) . "</code>"; ?><br />
    The elements are inside the <code>slide_info</code> element which is set to <code>display: none</code> by default.<br />
    Change the CSS via class or id to display information in HTML, example:<br />
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
    <h3>Information:</h3>
    Font size and font type are changed in the Holyrics program.<br />
    Display settings, respective HTML tab, HTML settings.<br />
    <br />
    To add a background image:<br />
    Obs.: Internet links only, does not work with computer files.<br />
    <pre>.screen-custom {
    background: url('link_da_imagem');
}
.text-custom {
    background-color: transparent !important;
}</pre>
    
</div>