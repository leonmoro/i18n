<h1>Create a WiFi network using the Notebook (Windows only)</h1>
<br />
<p>
    If you want to use the Holyrics app but do not have WiFi in your church, or if you do not want to use your own cell phone to get WiFi routing, you're in the right place!<br />
    You can make your Notebook a WiFi router, where everyone can connect to it.<br />
    No internet is required to make this setting and neither is internet required for the Holyrics application to communicate with the Holyrics program on the Notebook.<br />
    Let's learn now:<br />
</p>
<p style='color:black'>
    - Press the shortcut key WINDOWS + R<br /><br />
    <img src='images/windows-plus-r.png'/><br /><br /><br />
    - In the window that will open, type "cmd" (without quotes) and press ENTER<br /><br />
    <img src='images/type-cmd.png'/><br /><br /><br />
    - On the black screen, type the following command, Changind the words </b><code><i>nomedarede</i></code> and <code><i>senhadowifi</i></code> by the respective values ​​that you wish and after press ENTER:<br />
&nbsp;&nbsp;&nbsp;&nbsp;Command: <span class='no-wrap'><code>netsh wlan set hostednetwork mode=allow ssid=<i>minharede</i> key=<i>minhasenha</i></code></span><br />
&nbsp;&nbsp;&nbsp;&nbsp;If you want to copy the command and paste in this black window, you need to right-click on the window to paste the copied command, the CTRL + V shortcut will not work in Windows 7.<br />
&nbsp;&nbsp;&nbsp;&nbsp;<span style='color:red'>Attention! If you want to put space in the network name or in the password you will need to put quotation marks, example: <span class='no-wrap'><code>ssid="minha rede" key="minha senha"</code></span></span><br /><br />
<img src='images/prompt.png'/><br /><br />
- After doing this, the messages will appear that the configuration was successful (hopefully).</b><br /><br />
- READY! The setup is finished, but you would have to do all this step-by-step again (changing only the command used) to enable the WiFi network every time you turn on the notebook. But you can make this easier.<br/>
Download file <a href='/download/file/start-wifi.bat' target='_blank'><b>start-wifi.bat</b></a> and run it.<br />
Run the file <b>start-wifi.bat</b> whenever you connect or restart the notebook to enable WiFi.<br />
Also download the file <a href='/download/file/stop-wifi.bat' target='_blank'><b>stop-wifi.bat</b></a> and run it if you need to temporarily disable WiFi.<br /><br />
<b>IMPORTANT REMARKS:</b><br/>
<ul>
    <li>Disable your data package (3g/4g) when communicating with Holyrics on the notebook.</li><br />
    <li>
        <b>.bat</b> Files are <b>dangerous</b>, do not run such files without you trusting the source that made the file available to you. You can <b>check</b> the contents of the files available here by right clicking on the downloaded file and selecting the option <b>edit</b>.<br />
        See that the content is a simple command line: <br />
        <b>start-wifi.bat</b> <span class='no-wrap'><code>netsh wlan start hostednetwork</code></span><br />
        <b>stop-wifi.bat</b> <span class='no-wrap'><code>netsh wlan stop hostednetwork</code></span>
    </li>
</ul>				    
</p>