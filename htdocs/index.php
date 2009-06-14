<?php
include ('includes/pageheader.php');
echo'
	<title>Tux4kids - Home</title>
	</head>
<body>
	<div  align="center">
		<div class="box">
			<div class="col1">
				<ul class="menu">
					<li><a href="index.php" class="active"><span>Home</span></a></li>
					<li><a href="projects.php"><span>Projects</span></a></li>
					<li><a href="dev.php"><span>For Developers</span></a></li>
					<li><a href="mail.php"><span>Mailing Lists</span></a></li>
					<li><a href="svn.php"><span>SVN Repository</span></a></li>
					<li><a href="https://alioth.debian.org/forum/?group_id=31080"><span>Forums</span></a></li>
				</ul>
				<br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
				<br /><br /><br /><br /><br /><br /><br /><br />
				<img src="images/pow-fusionforge.png" alt="Fusion Forge" />
			</div>
			<div class="col2">
				<font style="font-size: 18px;">Welcome to Tux4kids project!</font><br /><br />
				<table class="front">
					<tr>
						<th><b>NEWS, 2009-03-19: Tux4Kids accepted for GSoC 2009!</b></th>
					</tr>
					<tr>
						<td>
						Tux4Kids has been accepted as a participating organization for this year\'s Google Summer of Code. We are very excited
						about another phase of productive coding. All three Tux4Kids programs (Tux Paint, Tux Math and Tux Typing) will take part
						again this year. The GSoC site has full information, including the list of particating organizations and their applications for
						students. The list of "Ideas" for Tux4Kids is on the GSoC site. The student application period is 23 March to 03 April.
						</td>
					</tr>
				</table>
				<br />
				<table class="front">
					<tr>
						<th><b>NEWS, 2009-03-14: Tux4Kids planning to participate in GSoC 2009</b></th>
					</tr>
					<tr>
						<td>
						Tux4Kids has submitted its application to participate in Google\'s Summer of Code again for 2009. We will be informed on
						March 18 whether our application has been accepted. Further information will be posted at that time.
						</td>
					</tr>
				</table>
				<br />
				<table class="front">
					<tr>
						<th><b>NEWS, 2009-02-26: Current RPMs available for multiple distros!</b></th>
					</tr>
					<tr>
						<td>
						Tux4Kids is now an active participant in the OpenSUSE Build Service, which provides the infrastructure for automated package
						building for most linux distributions. Tuxmath and Tuxtype packages can be located through the build service search page. This
						search page will locate both the most recent stable releases, located in the OpenSUSE Education project, as well as "preview"
						releases, located in my home project but available to anyone. The "preview" packages are now generated almost automatically
						and will track the status of the Subversion repository quite closely.<br />
						<br />
						Currently supported distributions include OpenSUSE (10.3, 11.0, 11.1, Factory); Fedora 9 and 10; and Mandriva 2008 and 2009.
						All of these packages have been built for both i586 and x86_64 architectures. Testing is needed for all of the preview packages -
						please report any issues to tuxmath-devel@lists.sourceforge.net. The Build System also supports .deb packaging for recent Debian
						and Ubuntu releases, but these builds have not yet been implemented.
						</td>
					</tr>
				</table>
			</div>';
include ('includes/header.php');
echo'
		</div>
	</div>
</body>
</html>';
?>