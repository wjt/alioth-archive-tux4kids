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
			
			<b>Mailing lists</b><br />
			In addition to the mailing lists available from the link to the left, note that the TuxMath mailing list is hosted <a href="https://lists.sourceforge.net/lists/listinfo/tuxmath-devel">here</a>.<br />
			<br />
			
			<b>Development and coding tips</b><br />
			Installing the required libraries (from distributor packages on Linux): be sure to install the "dev" versions as well, so that you have the header files.<br />
			Documentation about compiling is available in the "doc" directory in trunk.<br />
			We prefer that most development (particular for GSoC) happens in trunk, because of the difficulty of merging later; disruptive changes can have their own branch, but your work is not useful until you have merged to trunk.<br />
			For information about preparing strings appropriately for internationalization, see
			<a href="http://www.gnu.org/software/gettext/manual/html_node/Preparing-Strings.html#Preparing-Strings">these</a> <a href="http://techbase.kde.org/Development/Tutorials/Localization/i18n_Mistakes#Pitfall_.232:_Word_Puzzles">tips</a>. TuxMath now has built-in linebreaking code (adopted from gettext) in the "linewrap" source file.<br />
			<br />
			
			<b>Graphics</b><br />
			Because of the impending support for <a href="http://en.wikipedia.org/wiki/Scalable_Vector_Graphics">SVG</a>, we <i>strongly</i> prefer that any new graphics files be created in SVG format. We can generate PNG files as needed from the SVGs.
			</div>
		</div>
	</div>
</body>
</html>';
?>