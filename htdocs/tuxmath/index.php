<?php
include ('includes/pageheader.php');

echo'
	<title>Tux4kids &raquo; Tuxmath &raquo; Home</title>
</head>
<body>
	<div  align="center">
		<div class="box">
			<div class="col1">
				<ul class="menu">
					<li><a href="index.php" class="active"><span>Home</span></a></li>
					<li><a href="download.php"><span>Downloads</span></a></li>
					<li><a href="screens.php"><span>Screenshots</span></a></li>
					<li><a href="help.php"><span>Get help</span></a></li>
					<li><a href="other.php"><span>Other Projects</span></a></li>
					<li><a href="http://www.tux4kids.com"><span>About Tux4Kids</span></a></li>
				</ul>
				<br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
				<br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
				<br /><br /><br /><br /><br /><br /><br /><br /><br />
				<img src="images/pow-fusionforge.png" alt="Fusion Forge" />
			</div>
			<div class="col2">
				<font class="heading">Welcome to Tux, of Math Command!</font><br />
				<br />
				TuxMath is an arcade game that helps kids practice their math facts. The main goal is to make it effective and fun! <br />
				<br />
				<table class="front">
					<tr>
						<th>NEWS 2009-03-14: New release of TuxMath</th>
					</tr>
					<tr>
						<td>
						 TuxMath 1.7.2 is available for download on our downloads page as source tarballs and Win32 installer builds.
						RPM packages for most GNU/Linux distributions can be found via this search page. For Mac users, the new packages
						should be in MacPorts shortly, and dmg files will be posted here when built. These releases mostly reflect underlying
						code cleanup in advance of this year\'s Google Summer of Code, with only minor user-visible changes.
						</td>
					</tr>
				</table>
				<br />
				<table class="front">
					<tr>
						<th>NEWS 2008-12-08: Updated release of TuxMath</th>
					</tr>
					<tr>
						<td>
						TuxMath 1.7.1 is available for download. For TuxMath, 1.7.1 includes a number of less critical fixes and enhancements. 
						The most important change is correction of many of the lesson files so they should now reliably generate the intended questions.
						</td>
					</tr>
				</table>
				<br />
				<table class="front">
					<tr>
						<th>NEWS 2008-12-08: TuxMath 1.7.0 Released!</th>
					</tr>
					<tr>
						<td>
						Source tar.gz archives and executable Win32 installer for TuxMath 1.7.0 are available for download on our Released Files
						page. See below for a description of the new features. Tux Typing 1.7.0 should be released within the next day or so.
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