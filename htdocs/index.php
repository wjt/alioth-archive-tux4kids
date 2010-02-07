<?php include ('includes/pageheader.php');?>
	<title>Tux4Kids - Home</title>
	</head>
<body>
	<div align="center">
		<div class="box">
			<div class="col1">
				<ul class="menu">
					<li><a href="index.php" class="active"><span>Home</span></a></li>
					<li><a href="tuxmath.php"><span>TuxMath</span></a></li>
					<li><a href="tuxpaint.php"><span>TuxPaint</span></a></li>
					<li><a href="tuxtyping.php"><span>TuxTyping</span></a></li>
					<li><a href="dev.php"><span>For Developers</span></a></li>
					<li><a href="mail.php"><span>Mailing Lists</span></a></li>
					<li><a href="git.php"><span>Git Repository</span></a></li>
					<li><a href="https://alioth.debian.org/forum/?group_id=31080"><span>Forums</span></a></li>
				</ul>
				<br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
				<br /><br /><br /><br /><br />
				<img src="images/pow-fusionforge.png" alt="Fusion Forge" />
			</div>
			<div class="col2">
				<font style="font-size: 18px;">Welcome to Tux4Kids!</font><br />
				Tux4Kids develops high-quality software for kids, with the goal of combining fun and learning into an irresistable package.
				Our software is free: you can download it for use at home or onto hundreds of computers in a school. We support all major
				platforms, including Windows, Macintosh, and Linux/Unix. Our programs are used by people around the globe, and they have
				been translated into dozens of different languages. As open-source software, these programs can be freely extended or
				customized, and they are supported by active communities of volunteer developers.<br />
				Whether you're a parent, a teacher, or a kid, give Tux4Kids software a try!<br />
				<br />
				<table class="front">
					<tr>
						<th><b>NEWS, 2010-02-07: Project update</b></th>
					</tr>
					<tr>
						<td>
						From the surrogate webmaster:<br />
						Tux4Kids has switched from Subversion to Git for its file repositories, including
						the files storing the content for this website. There is still a lot of great new
						code from last summer that needs some finishing touches. As the lack of recent
						releases seems to be an obstacle to further progress, I intend to post "as is"
						builds for TuxType and TuxMath.  For TuxType, 1.8.1 should be very feature-similar
						to 1.8.0, with several rough edges fixed.  For TuxMath, 1.8.0 will include a
						complete overhaul of the menu code with SVG-based graphics, as well as the first
						public view of LAN-based multiplayer support.  There will certainly be some rough
						spots, but I think we need to "release early and often" to keep the project moving.<br /><br />
						David Bruce<br />
						</td>
					</tr>
				</table>
				<br />
				<table class="front">
					<tr>
						<th><b>NEWS, 2009-11-10: New Tux Type release!</b></th>
					</tr>
					<tr>
						<td>
						Version 1.8.0 of Tux Typing has 
						been released and is available for download at this site. This release includes 
						many new word lists and lessons, as well as all-new high-resolution background 
						images and new music files for the "fish" game.  Additionally, Tux Typing 1.8.0 
						includes the first public release of the new word list editor from GSoC 2009 - 
						it is now possible to create custom word lists from within Tux Typing 
						itself.<br />
												The source code and a Windows 
						installer are available here at Alioth, and RPM packages can be obtained via 
						the openSUSE build service <a href="http://software.opensuse.org/search">search 
						page</a>.  Mac users are encouraged to check back for the OS-X build, which 
						hopefully will be available in the next few days.
						</td>
					</tr>
				</table>
				<br />
			</div>
			<?php include ('includes/header.php');?>
		</div>
	</div>
</body>
</html>
