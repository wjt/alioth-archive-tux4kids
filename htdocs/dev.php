<?php
include ('includes/pageheader.php');
echo'
	<title>Tux4kids - Developers</title>
	</head>
<body>
	<div align="center">
		<div class="box">
			<div class="col1">
				<ul class="menu">
					<li><a href="index.php"><span>Home</span></a></li>
					<li><a href="projects.php"><span>Projects</span></a></li>
					<li><a href="dev.php" class="active"><span>For Developers</span></a></li>
					<li><a href="mail.php"><span>Mailing Lists</span></a></li>
					<li><a href="svn.php"><span>SVN Repository</span></a></li>
					<li><a href="https://alioth.debian.org/forum/?group_id=31080"><span>Forums</span></a></li>
				</ul>
				<br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
				<br /><br /><br /><br /><br /><br /><br /><br />
				<img src="images/pow-fusionforge.png" alt="Fusion Forge" />
			</div>
			<div class="col2">
			<b>General information</b><br />
			Tux4Kids programs are written in C and use Simple DirectMedia Layer (SDL) for the graphics. The programs are portable, running on Linux, Windows, Mac OSX, and BeOS. They are internationalized into many languages, and developers should keep the needs of non-English speakers in mind.<br />
			Most development happens on Linux, and the tools for development are readily available on any modern Linux distribution. However, it should also be possible to develop on other platforms.<br />
			<br />
			
			<b>Documentation for major tools and libraries</b><br />
			<a href="http://www.libsdl.org/">SDL</a> (see in particular the DocWiki link)<br />
			<font style="font-size: 10px;">We also use SDL_image (graphics files), SDL_mixer (sound), SDL_ttf (fonts), and will soon add SDL_net (network). Documentation for these is available on the DocWiki.</font><br /> 
			<a href="http://svnbook.red-bean.com/">Subversion</a> (see in particular Chapter 2, "Basic Usage")<br />
			<a href="http://www.gnu.org/software/gettext/">libintl/gettext</a> (for internationalization, aka translation)<br />
			<a href="http://www.gnu.org/software/automake/">Automake</a> (build system)<br />
			<a href="http://www.cmake.org/cmake/help/documentation.html">CMake</a> (an alternative build system, used especially for our Mac OSX releases of TuxMath but working on other platforms, too)<br />
			<br />
			
			<b>SVN checkout (TuxMath and TuxTyping)</b><br />
			The SVN site is hosted on <a href="http://tux4kids.alioth.debian.org/">Alioth</a> (please do not download the SourceForge SVN tree, it could be out of date). You can do an "anonymous" checkout in the following way:<br />
			<kbd>svn co svn://svn.debian.org/tux4kids/</kbd><br />
			This will get you the source code, but you won\'t be able to check in your modifications, because you need to have an account on Alioth.<br /><br />
			To get a fully-functional SVN checkout, <a href="http://alioth.debian.org">apply for an Alioth account</a> and wait for administrator approval. Once you have approval, do the checkout in the following way:<br />
			<kbd>svn co svn+ssh://fred-guest@svn.debian.org/svn/tux4kids</kbd><br />
			assuming your user name is "fred-guest". You will have to supply your password (perhaps more than once; note you can upload an SSH key to Alioth and bypass the requirement to type the password each time you make a commit).<br />
			With this checkout, you can use the full functionality of SVN and distribute your improvements to all the developers. If you started developing with an anonymous checkout, you can manually copy any changes over to the new directory created with your Alioth account and check them in.<br />
			<br />

               <b>Copyright</b><br />
               Tux4kids software is released under the GPL2. By commiting your code you agree to distribute your work under this license as well. Please state so in the headers of the source files, including svg images. Thanks!
               <br />
			<br />
			
			<b>Mailing lists</b><br />
			In addition to the mailing lists available from the link to the left, note that the TuxMath mailing list is hosted <a href="https://lists.sourceforge.net/lists/listinfo/tuxmath-devel">here</a>.<br />
			<br />
			
			<b>Development and coding tips</b><br />
			<ul>
			<li>Installing the required libraries (from distributor packages on Linux): be sure to install the "dev" versions as well, so that you have the header files.</li>
			<li>Documentation about compiling is available in the "doc" directory in trunk.</li>
			<li>SVN branches: if your work is "disruptive" (meaning it\'s a fairly large change in core aspects of the code), consider working in a branch.  You can then make regular commits without disrupting trunk.<br />
			However, it is dangerous to work for very long in a branch:  odds are high that your work will be incompatible (in either small or large ways) with other ongoing development, your work will not get the kind of oversight that trunk gets, and in any event your work is not useful until you merge to trunk.  For these reasons you should merge to trunk at any available opportunity.<br />
			If your work is not disruptive, it may be advisable to work directly in trunk.</li>
			<li>Please keep the changelog (in the doc/ directory) updated!</li>
			<li>For information about preparing strings appropriately for internationalization, see
			<a href="http://www.gnu.org/software/gettext/manual/html_node/Preparing-Strings.html#Preparing-Strings">these</a> <a href="http://techbase.kde.org/Development/Tutorials/Localization/i18n_Mistakes#Pitfall_.232:_Word_Puzzles">tips</a>. TuxMath now has built-in linebreaking code (adopted from gettext) in the "linewrap" source file.</li>
			</ul>
			
			<b>Graphics</b><br />
			Because of the impending support for <a href="http://en.wikipedia.org/wiki/Scalable_Vector_Graphics">SVG</a>, we <i>strongly</i> prefer that any new graphics files be created in SVG format. We can generate PNG files as needed from the SVGs.
			</div>';
include ('includes/header.php');
echo'
		</div>
	</div>
</body>
</html>';
?>
