The <b>Runtime Environment</b> option serves to facilitate the management of some other functionalities in the program.<br />
<br />
Consider the situation: <br />
<br />
There are three different computers (PC1, PC2 and PC3) on the same network.<br />
Computers PC1 and PC2 are in hall A and PC3 in hall B.<br />
The Holyrics program runs on PC1 and PC3 computers and they have Google Drive™ synchronization activated between them.<br />
In this case, the triggers created in the program are synchronized between the two computers.<br />
We created a trigger (<b>OBS</b> receiver) for Holyrics opened on PC1 (hall A) to send commands to OBS Studio open on PC2 (hall A) which is the transmission computer.<br />
But when running the program on PC3 (hall B) Holyrics also sends commands to PC2 (hall A), but this is not what we want.<br />
<br />
We can solve this by creating runtime environments.<br />
<br />
In the file, settings, advanced menu, create an environment called <b>PC1</b> and an environment called <b>PC2</b>;<br />
Select the corresponding runtime environment in Holyrics on each computer;<br />
Set the execution settings of the <b>OBS</b> receiver to run only in the <b>PC1</b> environment.<br />
<br />
This way, the <b>OBS</b> receiver will only send trigger commands from the computer <b>PC1</b>.<br />
<br />
<br />
It is also possible to define execution based on the <b>runtime environment</b> for each trigger individually.<br />
<br />
<br />
Examples: <br />
<br />
<?php
echo get_img_tag_popup("images/runtime_environment.jpg");
