<h1>API Item</h1>

It is possible to create items to add to the favorites bar or playlist that execute HTTP requests, send MIDI code to other devices or execute JavaScript code.<br />
This allows executing actions in other programs and devices, such as OBS Studio, lighting program, PTZ cameras, etc., or executing scripts that interact with the program, being able to execute actions or a list of actions programmatically and accurately.<br / >
For example, you can create an item that, when executed, changes a scene in your broadcast program, or an item that selects a preset from a PTZ camera on the network, etc.<br />
These actions can be performed by clicking on the item or performed automatically through the program's <b>Triggers</b> functionality.<br />
For example, you can create a trigger so that whenever Holyrics presents the X image in the projection, it automatically changes to the Y scene in your broadcast program.<br />
Or whenever you present a Bible verse, it automatically switches to the Z scene in your broadcast program.<br />
There are many possibilities for automation that facilitate and save the work of the multimedia team.<br />
<br />
<br />
<b>TUTORIAL</b><br />
<br />
<b>Example of how to create an API item that changes an OBS Studio scene:</b>
<ul>
    <li>
        Tools menu > several > API<br />
        <b>Add</b> button.<br />
        <img src='images/api_item_img01.png' /><br />
        <br />
    </li>
    <li>
        Set a name for the item and select the option to create a receiver.<br />
        <img src='images/api_item_img02.png' /><br />
        <br />
    </li>
    <li>
        Create a URL receiver with the name you want.<br />
        <img src='images/api_item_img03.png' /><br />
        <br />
    </li>
    <li>
        Configure the URL with the IP of the equipment where the OBS Studio program is executed.<br />
         You can set the field to <b>localhost</b> if running on the same computer.<br />
         Change the <b>Type</b> field to <b>OBS Studio WebSocket</b>.<br />
         Configure the OBS Studio webservice password in the <b>settings</b> item.<br />
         The password defined in OBS Studio, Tools menu, item <b>WebSockets WebService Settings</b>.<br />
        <img src='images/api_item_img04.png' /><br />
        <br />
    </li>
    <li>
        After creating the receiver, go back to the previous window and change the <b>Receiver</b> field of the API item to the receiver you just created.<br />
        Select the <b>Change Scene with Transition</b> item and set the scene name and transition name as desired.<br />
        <img src='images/api_item_img05.png' /><br />
        <br />
    </li>
    <li>
        After creating the API item, you can add it to the favorites bar or the media playlist.<br />
        <img src='images/api_item_img06.png' /><br />
        <br />
    </li>
</ul>
<br />
<b>Note:</b><br />
It is not necessary to create a receiver for each API item.<br />
If you want to create another API item to control OBS Studio, just select the same receiver.<br />
<br />
<br />
<hr />
<b>Example of configuring automation triggers:</b><br />
In the following example, whenever the <b>Oferta.jpg</b> image is projected, a request will be sent to change the OBS Studio scene to the scene named <b>Oferta</b>.<br />
And whenever you finish the presentation of the image <b>Oferta.jpg</b> in the projection, a request will be sent to change to the scene <b>Cena 1</b>.<br />
<br />
Whenever a Bible verse is projected, a request will be sent to change to the <b>Bible</b> scene.<br />
And whenever you remove a verse from the projection, a request will be sent to change to scene <b>Cena 1</b>.<br />
<br />
<img src='images/api_item_img07.png' /><br />
<br />
<b>Note:</b><br />
The list of receivers created for an API item and a trigger item are independent, so you will need to create the receiver again for use in the triggers functionality.<br />
The procedure is the same as previously explained for the API item.<br />
<br />
<br />
