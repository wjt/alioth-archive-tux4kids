<?php include ('includes/pageheader.php');?>
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
						<th colspan="2" width="700px">Windows(tested on 2000, XP, Vista)</th>
						<td>
							<a href="https://alioth.debian.org/frs/download.php/file/3577/tuxmath-2.0.3-win32-installer.exe"><img src="images/dbutton.png" alt="Download"></a>
						</td>
					</tr>
					<tr>
						<td width="48px"><img src="images/windows.gif" alt="Windows Logo" align="top" /></td>
						<td>Executable installer for Windows 2000, XP, Vista (and probably other Windows versions).</td>
					</tr>
				</table><br /><br />
				<table class="dow">
					<tr>
						<th colspan="2" width="700px">Macintosh OS X</th>
						<td>	
							<a href="https://alioth.debian.org/frs/download.php/file/3272/tuxmath-1.8.0-macosx.dmg"><img src="images/dbutton.png" alt="Download"></a>
						</td>
					</tr>
					<tr>
						<td width="48px"><img src="images/macosx.gif" alt="Mac OS X Logo" align="top" /></td>
						<td>Mac OS X universal disk image (.dmg) file for Intel-based and PPC-based Macs running OS-X 10.4 ("Tiger") and later.<p>Alternatively, if you have <a href="http://www.macports.org">MacPorts</a> installed, the latest version of TuxMath can be installed by simply typing:<br />
						<kbd>sudo port install tuxmath</kbd></td>
					</tr>
				</table><br /><br />
				<table class="dow">
					<tr>
						<th colspan="2">
						Ubuntu and other Debian-based Linux
						</th>
					</tr>
					<tr>
						<td width="48px"><img src="images/linux-ubuntu.gif" alt="Ubuntu Logo" align="top" /></td>
						<td>If you run Debian simply open a terminal and run:<br />
						<kbd>sudo aptitude install tuxmath</kbd></td>
						<td>For Ubuntu users or anyone who prefers "apt-get" over "aptitude", the command is:<br />
						<kbd>sudo apt-get install tuxmath</kbd></td>
					</tr>
				</table><br /><br />
				<table class="dow">
					<tr>
						<th colspan="2">
						RPM-based Linux
						</th>
					</tr>
					<tr>
						<td width="80px"><img src="images/rpm_logo.png" alt="RPM Logo" align="top" /></td>
						<td>The Tux4Kids applications are available in the standard repositories of all major (GNU)-Linux distributions, and can be installed using the package manager.  For the latest versions, individual RPM packages for TuxMath and TuxType can be found by searching the <a href="http://software.opensuse.org/search">OpenSUSE Build Service</a>. 32-bit and 64-bit packages are available for all recent versions of Fedora, OpenSUSE, and Mandriva.</td>
					</tr>
				</table><br /><br />
				<table class="dow">
					<tr>
						<th colspan=2" width="700px">Source</th>
						<td>
							<a href="https://alioth.debian.org/frs/download.php/file/3561/tuxmath_w_fonts-2.0.1.tar.gz"><img src="images/dbutton.png" alt="Download"></a>
						</td>
					</tr>
					<tr>
						<td width="48px"><img src="images/gear.gif" alt="Gears" align="top" /></td>
						<td>Standard *.tar.gz "tarball" source archive, suitable for building using "./configure; make; sudo make install". IMPORTANT - now TuxMath requires that the t4k_common library be installed first (see below). See the README and INSTALL files for list of required libs.</td>
					</tr>
				</table><br /><br />
				<table class="dow">
					<tr>
						<th colspan=2" width="700px">t4k_common library</th>
						<td>
							<a href="https://alioth.debian.org/frs/download.php/file/3540/t4k_common-0.1.1.tar.gz"><img src="images/dbutton.png" alt="Download"></a>
						</td>
					</tr>
					<tr>
						<td width="48px"><img src="images/gear.gif" alt="Gears" align="top" /></td>
						<td>Standard *.tar.gz "tarball" source archive for the t4k_common library. This must be installed before building tuxmath-1.9.0 (or later) from source.  The Windows binary already has t4k_common included. The t4k_common libary can be built with "./configure; make; sudo make install" like other standard packages.  See README and INSTALL for details.</td>
					</tr>
				</table><br /><br />
				For other files (GPG signatures, hashes, and old releases), a complete listing is available on the <a href="https://alioth.debian.org/frs/?group_id=31080">released files</a> page.
			</div>
<?php include ('includes/header.php');?>
		</div>
	</div>
</body>
</html>
