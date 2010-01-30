<?php include ('includes/pageheader.php');?>
	<title>Tux4kids - Developers</title>
	</head>
<body>
	<div align="center">
		<div class="box">
			<div class="col1">
				<ul class="menu">
					<li><a href="index.php"><span>Home</span></a></li>
					<li><a href="tuxmath.php"><span>TuxMath</span></a></li>
					<li><a href="tuxpaint.php"><span>TuxPaint</span></a></li>
					<li><a href="tuxtyping.php"><span>TuxTyping</span></a></li>
					<li><a href="dev.php" class="active"><span>For Developers</span></a></li>
					<li><a href="mail.php"><span>Mailing Lists</span></a></li>
					<li><a href="git.php"><span>Git Repository</span></a></li>
					<li><a href="https://alioth.debian.org/forum/?group_id=31080"><span>Forums</span></a></li>
				</ul>
				<br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
				<br /><br /><br /><br /><br />
				<img src="images/pow-fusionforge.png" alt="Fusion Forge" />
			</div>
			<div class="col2">
			<b>General information</b><br />
			Tux4Kids programs are written in C and use Simple DirectMedia Layer (SDL) for the graphics. The programs are portable, running
			on Linux, Windows, Mac OSX, and BeOS/Haiku. They are internationalized into many languages, and developers should keep the needs of
			non-English speakers in mind.<br />
			Most development happens on Linux, and the tools for development are readily available on any modern Linux distribution.
			However, it should also be possible to develop on other platforms.<br />
			<br />
			
			<b>Documentation for major tools and libraries</b><br />
			<a href="http://www.libsdl.org/">SDL</a> (see in particular the DocWiki link)<br />
			<font style="font-size: 10px;">We also use SDL_image (graphics files), SDL_mixer (sound), SDL_ttf (fonts), and will soon add
			SDL_net (network). Documentation for these is available on the DocWiki.</font><br /> 
			<a href="http://book.git-scm.com/">Git</a> (The well-known "Git Community Book")<br />
			<a href="http://www.gnu.org/software/gettext/">libintl/gettext</a> (for internationalization, aka translation)<br />
			<a href="http://www.gnu.org/software/automake/">Automake</a> (build system)<br />
			<a href="http://www.cmake.org/cmake/help/documentation.html">CMake</a> (an alternative build system, used especially for our
			Mac OSX releases of TuxMath but working on other platforms, too)<br />
			<br />
			
			<b>Tux4Kids now uses Git for source code 
management</b><br />
			The git repositories for the Tux4Kids subprojects 
(tuxmath.git, tuxtype.git, tux4kids-admin.git, tux4kids-web.git, and t4kcommon.git) are located on the Alioth server
			under alioth.debian.org/git/tux4kids/ with the 
names as listed above.  See <li><a href="git.php"><span>Git Repository</span></a></li> for details.
			<br />
			<b>Copyright and License</b><br />
			Tux4kids software has historically been a "GPL2 or later" project. By commiting your code you agree to distribute your work under this
			license as well. All source files should have a copyright and license statement.  We are currently assessing whether to move to GPLv3+.
			<br />
			<br />
							
			<b>Development and coding tips</b><br />
			<ul>
			<li>Installing the required libraries (from distributor packages on Linux): be sure to install the "dev" versions as well, so
			that you have the header files.</li>
			<li>Documentation about compiling is available in the "doc" directory in trunk.</li>
			<li>Branches: Git supports branching and merging extremely well.  In particular, if you create your own branch for something major or disruptive, you can keep it current with other changes coming into the main trunk by frequent rebasing.  This greatly reduces the old problem with SVN-style branches where it could become very difficult to merge the branch back into the trunk. If you join the project, you will be able to push directly into our bare repositories. However, if you have something that could be disruptive, it is best to check with a maintainer first.
			<li>Please keep the changelog (in the doc/ directory) updated!</li>
			<li>For information about preparing strings appropriately for internationalization, see
			<a href="http://www.gnu.org/software/gettext/manual/html_node/Preparing-Strings.html#Preparing-Strings">these</a> <a href="http://techbase.kde.org/Development/Tutorials/Localization/i18n_Mistakes#Pitfall_.232:_Word_Puzzles">tips</a>. TuxMath now has built-in linebreaking code (adopted from gettext) in the "linewrap" source file.</li>
			</ul>
			
			<b>Graphics</b><br />
			Because of the impending support for <a href="http://en.wikipedia.org/wiki/Scalable_Vector_Graphics">SVG</a>, we <i>strongly</i> prefer that any new graphics files be created in SVG format. We can generate PNG files as needed from the SVGs.
			</div>
<?php include ('includes/header.php');?>
		</div>
	</div>
</body>
</html>
