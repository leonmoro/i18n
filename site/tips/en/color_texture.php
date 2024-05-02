You can set a texture for some display items.<br />
<br />
Available textures: <br />
<br />
• Solid color <br />
The item will be rendered using the defined color.<br />
<br />
• Transparent <br />
(Available for font/text)<br />
Texture to be used in conjunction with an outline or background color.<br />
Transparency will be applied to the text location.<br />
<br />
• Gradient <br />
The item will be rendered with the defined color gradient, horizontal or vertical.<br />
<br />
• Image <br />
Allows you to select an image as a base to render the item using the image as a texture.<br />
<br />
<br />
Examples: <br />
<br />
<?php
for ($i = 1; $i <= 6; $i++) {
    echo get_img_tag_popup("images/color_texture_$i.jpg");
}