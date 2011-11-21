<?php include ('includes/pageheader.php');?>
	<title>Tux4Kids - Home</title>
	</head>
<body>
	<div align="center">
		<div class="box">
			<div class="col1">
				<ul class="menu">
					<li><a href="index.php" 
class="active"><span>Home</span></a></li>
					<li><a 
href="tuxmath.php"><span>TuxMath</span></a></li>
					<li><a 
href="tuxpaint.php"><span>TuxPaint</span></a></li>
					<li><a 
href="tuxtyping.php"><span>TuxTyping</span></a></li>
					<li><a 
href="dev.php"><span>For Developers</span></a></li>
					<li><a 
href="mail.php"><span>Mailing Lists</span></a></li>
					<li><a 
href="git.php"><span>Git Repository</span></a></li>
					<li><a 
href="https://alioth.debian.org/forum/?group_id=31080"><span>Forums</span></a></li>
				</ul>
	<!-- Facebook Badge START --><a href="http://www.facebook.com/pages/Tux4Kids/148165518572421" target="_TOP" style="font-family: &quot;lucida grande&quot;,tahoma,verdana,arial,sans-serif; font-size: 11px; font-variant: normal; font-style: normal; font-weight: normal; color: #3B5998; text-decoration: none;" title="Tux4Kids">Tux4Kids</a><br/><a href="http://www.facebook.com/pages/Tux4Kids/148165518572421" target="_TOP" title="Tux4Kids"><img src="http://badge.facebook.com/badge/148165518572421.1140.258633898.png" width="180" height="173" style="border: 0px;" /></a><br/><a href="http://www.facebook.com/business/dashboard/" target="_TOP" style="font-family: &quot;lucida grande&quot;,tahoma,verdana,arial,sans-serif; font-size: 11px; font-variant: normal; font-style: normal; font-weight: normal; color: #3B5998; text-decoration: none;" title="Make your own badge!">Promote Your Page Too</a><!-- Facebook Badge END -->

				<br /><br /><br /><br /><br />
				<img src="images/pow-fusionforge.png" 
alt="Fusion Forge" />

			</div>
			<div class="col2">
				<font style="font-size: 18px;">Welcome 
to Tux4Kids!</font><br />
				Tux4Kids develops high-quality 
software for kids, with the goal of combining fun and learning into an 
irresistable package.
				Our software is free: you can download 
it for use at home or onto hundreds of computers in a school. We 
support all major
				platforms, including Windows, 
Macintosh, and Linux/Unix. Our programs are used by people around the 
globe, and they have
				been translated into dozens of 
different languages. As open-source software, these programs can be 
freely extended or
				customized, and they are supported by 
active communities of volunteer developers.<br />
				Whether you're a parent, a teacher, or 
a kid, give Tux4Kids software a try!<br />
				<br />

				<table class="front">
					<tr>
						<th><b>NEWS, 2011-11-20: Tux4Kids participating in Google Code-In 2011, starts tomorrow!</b></th>
					</tr>
					<tr>
						<td>
				<br>
Tux4Kids is once again participating in <a href="http://google-melange.appspot.com/gci"/>Google Code-In</a> (GCI) for 2011-12. GCI is a contest for pre-university students ages 13-17 that is aimed at getting young people involved in the creation of Free/Open Source software such as our programs.  The contest involves completion of multiple brief tasks (comparable to school projects or homework assignments), as opposed to a single major project as in GSoC.  The tasks include not only programming, but also non-code contributions such as documentation, artwork, training, and community outreach.  Full rules are available at the GCI website.  It should be noted that GCI students are not tied to a single mentoring organization.
<br>
IMPORTANT: for all code tasks, you will need to work from our git repositories (see links on this page).  Create a local clone on your machine, create a feature branch for your task, and get to work.  Completed code tasks will be submitted as patches ("git diff" is your friend).  Note - if you work on tuxmath, use tuxmath's "master" branch as your base, which depends on t4k_common-0.1.1 (the latest tarball).Don't install t4k_common from git unless you are working on the common library itself.  The latest git build of t4k_common is incompatible with tuxmath's master branch.  If you need to work on t4k_common, there is a tuxmath branch called "t4k-1.0.0" that is compatible with the latest git build of t4k_common. Simple, right?
				<br>
						</td>
					</tr>
				</table>
				<table class="front">
					<tr>
						<th><b>NEWS, 2011-05-09: Tux Math 2.0.3 for Win32, OS-X, and as Source!</b></th>
					</tr>
					<tr>
						<td>
				<br>
TuxMath-2.0.3 has been released in source code form, as a Win32 binary installer, and as a program in MacPorts (<a href="http://www.macports.org"/>www.macports.org</a>).  This fixes a bug in the Windows release (turn-based multiplayer not starting) and addresses some Mac-specific issues, but is otherwise very similar to version 2.0.2. The OS-X version is a big upgrade over 1.7.2, but does contain two known bugs involving features that are new to the Mac version.  First, there is a cosmetic display problem with some of the images if the game is played in a 640x480 window.  The default fullscreen mode displays correctly.  Second, the LAN game appears to only work correctly if the client and server programs are running on the same machine.  If you can help debug or fix these problems, your help is greatly welcomed!  However, the standard single-player game and lessons work correctly, as does the newly enhanced Factoroids game.<br><br>
As of yet, there is no standalone Mac binary ready for download.  I have been able to build a Snow Leopard TuxMath-2.0.3 dmg using MacPorts, but it is an extremely large (> 100 MB) file as it contains a very large number of dependency libraries.  I'm currently investigating whether the size of the image can be reduced.
				<br>
						</td>
					</tr>
				</table>
				<table class="front">
					<tr>
						<th><b>NEWS, 2011-01-16: Tux4Kids is on Facebook</b></th>
					</tr>
					<tr>
						<td>
				<br>
To help promote our educational software, we have created a Tux4Kids Facebook page.  The box on the left links to our page and allows you to "like" it.  Please help spread the word to any of your Facebook-using friends!
				<br>
				David Bruce<br />
						</td>
					</tr>
				</table>




				<br />

				<br />
				

				<br />
				<br />
			</div>
			<?php include ('includes/header.php');?>
		</div>
	</div>


</body>

</html>
