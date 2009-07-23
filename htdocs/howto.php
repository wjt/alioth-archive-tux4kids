<?php
include ('includes/pageheader.php');

echo'
	<title>Tux4kids - Home</title>';

include ('includes/header.php');

echo'
			<div class="col1">
				<ul class="menu">
					<li><a href="index.php"><span>Home</span></a></li>
					<li><a href="projects.php"><span>Projects</span></a></li>
					<li><a href="dev.php"><span>For Developers</span></a></li>
					<li><a href="mail.php"><span>Mailing Lists</span></a></li>
					<li><a href="svn.php"><span>SVN Repository</span></a></li>
					<li><a href="https://alioth.debian.org/forum/?group_id=31080"><span>Forums</span></a></li>
				</ul>
			</div>
			<div class="col2">
				<font style="font-size: 14px;">This is not a tutorial on webdesign, if you want to actually learn, check out <a href="http://www.w3schools.com/">w3schools</a>,
				they have some good info. This is just to help the developers know the syntax and basics to put content on the pages
				without messing up the rest of the page.<br />
				<br />
				
				<font style="font-size: 10px;">Note - Please DO NOT use a WYSIWYG program. Those add bloat to the code and
				they would not work well with what I\'ve
				written into the site so far.</font><br />
				<br />
				We are using PHP to generate the xhtml code. Because of this please note that any use of the \' in text must be
				preceeded by a \ to display properly. Watch for the contractions. Also, unless you are running a web server
				with php enabled, you will need to upload it to test it, since a browser cannot handle php on it\'s own. Also
				for the record, most of the formatting is done by CSS in the css directory.<br />
				<br />
				
				You will need a text editor of some kind to open the files. I am partial to <a href="http://www.scintilla.org/SciTE.html">SciTE</a>,
				which gives color highlighting for different languages, and has a windows version that can read unix/linux line breaks.<br />
				<br />
				
				Open the php file you want to modify. Find these tags:<br />
					&lt;div class=&quot;col2&quot;&gt;<br />
					<br />
					&lt;/div&gt;<br />
					<br /><br />
				All the content that you want to add will go between those.<br />
				<br />
				<b>How to add text:</b><br />
				Copy and paste between the two tags. That will get it up there. If you want to format it you will need
				to add some tags around what you want formatted. <br />
				&lt;br /&gt; Line break<br />
				&lt;b&gt;&lt;/b&gt; Bold<br />
				&lt;i&gt;&lt;/i&gt; Italics<br />
				&lt;u&gt;&lt;/u&gt; Underline<br />
				&lt;font style=&quot;font-size: 12px;&quot;&gt;&lt;/font&gt; Font size <br />
				There are many many others, but those should at least get you going.<br />
				<br />
				
				<b>Creating a link:</b><br />
				This - &lt;a href=&quot;index.php&quot;&gt;Click Here!&lt;/a&gt; - becomes <a href="index.php">Click Here!</a><br />
				<br />
				The href points to the file and anything between the tags becomes a link. Text will turn blue and underlined,
				and pictures will let you click on them. You can use a relative file path or an asolute file path here, relative
				is prefered. If you do not know what a relative file path is, please don\'t change anything on the website, 
				just email me what you want up there. <br />
				<br />
				
				<b>Adding a picture (other than screenshots:)</b><br />
				Just copy this code and change the file name.<br />
				&lt;img src=&quot;images/imagename.jpg&quot; /&gt;<br />
				<br />
				img obviously tells that it is an image, and the src is where the image is.<br />
				<br />
				
				<b>Adding a screenshot from Tux Type or TuxMath:</b><br />
				Coming Soon.</font>
			</div>
		</div>
	</div>
</body>
</html>';
?>