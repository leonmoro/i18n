The <b>Title</b> item of the media playlist has special behavior, being able to hide/expand the list of items below it, like a group of items.<br />
<br />
Right-click on the 3 dots in the <b>media</b> tab (or an empty area in the list), miscellaneous submenu, to add a title.<br />
You can also right-click on an already created title and select the <b>clone</b> option.<br />
<br />
It is possible to define a background color for each title.<br />
<br />
Examples: <br />
<br />
<?php
for ($i = 1; $i <= 4; $i++) {
    echo get_img_tag_popup("images/playlist_title_$i.jpg");
}