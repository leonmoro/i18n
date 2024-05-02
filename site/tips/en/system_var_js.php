The <b>System Variables</b> functionality allows you to use codes that transform into specific content in the text displayed on the projection screen.<br />
For example, the code <code>@hour_minute_second</code> becomes the current system hour, minute and second while the text is displayed.<br />
<br />
It is also possible to write javascript methods to use as a system variable within the text that will be displayed in the projection, for example: <br />
You can create a javascript method called <b>saudacao</b> and place the code <code>@js{saudacao}</code> in the text of a slide, or in the communication panel, or in an alert message.<br />
The code <code>@js{saudacao}</code> in the text will be converted in real time to the content returned by the method defined in javascript.<br />
It is useful for creating slides with information that can be updated in real time, without user intervention.<br />
<br />
<br />
Examples: <br />
<br />
<?php
echo get_img_tag_popup("images/system_var_js_1.jpg");
echo get_img_tag_popup("images/system_var_js_2.jpg");