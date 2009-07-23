<?php
include ('includes/pageheader.php');

echo'
	<title>Tux4kids &raquo; Tuxtype &raquo; Downloads</title>
	</head>
<body>
	<div  align="center">
		<div class="box">
			<div class="col1">
				<ul class="menu">
					<li><a href="index.php"><span>Home</span></a></li>
					<li><a href="" class="active"><span>Downloads</span></a></li>
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
				<table class="dow">
					<tr>
						<th colspan=2" width="700px">Source</th>
						<td>
							<a href="https://alioth.debian.org/frs/download.php/2971/tuxmath_w_fonts-1.7.2.tar.gz"><img src="images/dbutton.png" alt="Download"></a>
						</td>
					</tr>
					<tr>
						<td width="48px"><img src="images/gear.gif" alt="Gears" align="top" /></td>
						<td>For your frustration and enjoyment we give you the foundation of open source software, the source code itself.</td>
					</tr>
				</table><br /><br />
				
				
				<table class="dow">
					<tr>
						<th colspan="2" width="700px">Windows 2000, XP, Vista</th>
						<td>
							<a href="https://alioth.debian.org/frs/download.php/2972/tuxmath-1.7.2-win32-installer.exe"><img src="images/dbutton.png" alt="Download"></a>
						</td>
					</tr>
					<tr>
						<td width="48px"><img src="images/windows.gif" alt="Windows Logo" align="top" /></td>
						<td>Here you can download the installer for ever hated, and yet still most popular OS around, Windows.</td>
					</tr>
				</table><br /><br />
				
				
				<table class="dow">
					<tr>
						<th colspan="2" width="700px">Apple Mac OS X</th>
						<td>	
							<a href="https://alioth.debian.org/frs/download.php/3014/tuxmath-1.7.2-macosx.dmg"><img src="images/dbutton.png" alt="Download"></a>
						</td>
					</tr>
					<tr>
						<td width="48px"><img src="images/macosx.gif" alt="Mac OS X Logo" align="top" /></td>
						<td>Either you love it or your hate it, but it is unforgettable Mac OS X.</td>
					</tr>
				</table><br /><br />
				
				
				<table class="dow">
					<tr>
						<th colspan="2">
						Debian-based Linux
						</th>
					</tr>
					<tr>
						<td width="48px"><img src="images/linux-ubuntu.gif" alt="Ubuntu Logo" align="top" /></td>
						<td>If you run Debian simply open a terminal and run<br />
						<kbd>aptitude install tuxmath tuxtype tuxtype-data-nonfree</kbd></td>
					</tr>
				</table>
				<br />
				If you are looking for earlier releases check out our <a href="https://alioth.debian.org/frs/?group_id=31080">released files</a> page.
			</div>';
include ('includes/header.php');
echo'
		</div>
	</div>
</body>
</html>';
?>