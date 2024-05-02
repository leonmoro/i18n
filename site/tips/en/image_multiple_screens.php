<h1>Display different images on multiple screens</h1>

To display different images on different screens, use a naming rule in the files in the program's <b>image</b> folder.<br />
The beginning of the filename must be the same, adding the rule to the end of the filename.<br />
<br />
Example:<br />
image name.jpg<br />
image name__3x4.jpg<br />
image name__16x9.jpg<br />
image name__stream_html_1.jpg<br />
<br />
(There are 2 underscores separating the name and the rule)<br />
<br />
Available formats: <br />
1x1, 3x4, 16x9, 9x16, 4x3, stream_html_1, stream_html_2, stream_html_3, screen_2, screen_3, ... <br />
<br />
When displaying the file <b>image name.jpg</b>, the main file will be displayed on the main (public) screen.<br />
If you use other outputs in the program, the corresponding images will be displayed, if they exist in the folder.<br />
<br />
Example:<br />
If you have a second 4x3 projection screen and the file <b>image name__4x3.jpg</b> is in the folder, that image will be displayed on that 4x3 screen.<br />
<br />
If you use HTML 1 output for a live stream and the file <b>image name__stream_html_1.jpg</b> is in the folder, that image will be sent to HTML output 1<br />
<br />
This allows, for example, you to present an image in the projection and an alternative image in the transmission in an automatic and practical way.<br />
<br />
<b>Example in Windows folder:</b><br />
<img src='images/image_multiple_screens_img01.png' /><br />

<br />
<b>Note:</b><br />
As a matter of practicality, in the list of the program's images tab, only the main image will appear<br />
<br />
<br />