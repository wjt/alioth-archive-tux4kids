<?php
include ('includes/pageheader.php');

echo'
	<title>Tux4kids - Developers</title>';

include ('includes/header.php');

echo'
			<div class="col1">
				<ul class="menu">
					<li><a href="index.php"><span>Home</span></a></li>
					<li><a href="projects.php"><span>Projects</span></a></li>
					<li><a href="" class="active"><span>For Developers</span></a></li>
					<li><a href="http://alioth.debian.org/mail/?group_id=31080"><span>Mailing Lists</span></a></li>
					<li><a href="svn.php"><span>SVN Repository</span></a></li>
					<li><a href="http://alioth.debian.org/forum/?group_id=31080"><span>Forums</span></a></li>
				</ul>
			</div>
			<div class="col2">
			<b>General information</b>
			Tux4Kids programs are written in C and use Simple DirectMedia Layer (SDL) for the graphics. The programs are portable, and run on Linux, Windows, Mac OSX, and BeOS. Most development happens on Linux, and the tools for development are readily available on any modern Linux distribution. However, it should also be possible to develop on other platforms.<br />
			<br />
			Here are the major development tools and libraries used by Tux4Kids programs:<br />
			<a href="http://www.libsdl.org/">SDL</a> (see in particular the DocWiki link)<br />
			<font style="font-size: 10px;">We also use SDL_image (graphics files), SDL_mixer (sound), SDL_ttf (fonts), and will soon add SDL_net (network). Documentation for these is available on the DocWiki.</font><br /> 
			<a href="http://svnbook.red-bean.com/">Subversion</a> (see in particular Chapter 2, "Basic Usage")<br />
			
			</div>
		</div>
	</div>
</body>
</html>';
?>