<?php include ('includes/pageheader.php');?>
	<title>Tux4kids - Git</title>
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
					<li><a href="dev.php"><span>For Developers</span></a></li>
					<li><a href="mail.php"><span>Mailing Lists</span></a></li>
					<li><a href="git.php" class="active"><span>Git Repository</span></a></li>
					<li><a href="https://alioth.debian.org/forum/?group_id=31080"><span>Forums</span></a></li>
				</ul>
				<br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
				<br /><br /><br /><br /><br />
				<img src="images/pow-fusionforge.png" alt="Fusion Forge" />
			</div>
			<div class="col2">
				Tux4kids has now officially switched from Subversion to Git. The old monolithic 
				"tux4kids" svn repository has been replaced by five git repositories, one for 
				each subproject, located at git.debian.org/git/tux4kids/*:<br /><br />

				1. To browse with web interface, click on:<br /><br />
 
				<li><a href="http://git.debian.org/?p=tux4kids/tuxmath.git">http://git.debian.org/?p=tux4kids/tuxmath.git</a></li>
				<li><a href="http://git.debian.org/?p=tux4kids/tuxtype.git">http://git.debian.org/?p=tux4kids/tuxtype.git</a></li>
				<li><a href="http://git.debian.org/?p=tux4kids/tux4kids-web.git">http://git.debian.org/?p=tux4kids/tux4kids-web.git</a></li>
				<li><a href="http://git.debian.org/?p=tux4kids/tux4kids-admin.git">http://git.debian.org/?p=tux4kids/tux4kids-admin.git</a></li>
				<li><a href="http://git.debian.org/?p=tux4kids/t4kcommon.git">http://git.debian.org/?p=tux4kids/t4kcommon.git</a></li>

 
				<br /><br /><b>Working with the Repository</b><br /><br />
				1. Push-enabled ("read/write") cloning for members of the Tux4Kids project on Alioth:
 
				<br />	<br /><kbd>git clone git+ssh://YOUR_ALIOTH_USERID@git.debian.org/git/tux4kids/tuxmath.git</kbd>
 
				<br /><br />(obviously replacing YOUR_ALIOTH_USERID with your actual login). 
				You will be prompted for your alioth password each time you use the repository.
 
				<br /><br /><b>Viewing the Repository</b><br /><br />
				2. Pull-only ("read-only") cloning:<br />
 
				<br /><kbd>git clone git://git.debian.org/git/tux4kids/tuxmath.git</kbd><br /><br />

				or:
 
				<br /><br /><kbd>git clone http://git.debian.org/git/tux4kids/tuxmath.git</kbd><br /><br />
 

				Note that the autogenerated documentation under the SCM tab at 
				<li><a href="http:/alioth.debian.org/projects/tux4kids">http:/alioth.debian.org/projects/tux4kids</a></li>
				assumes a single global "tux4kids" 
				repository, and thus does not work as described there.  Hopefully this will be 
				corrected in the near future.
 
				There are two remaining known issues with the migration to git.  Namely, there 
				are a couple of areas from the old repository that are not included in the five 
				new git repositories, namely "tuxmath/people", 
				"branches/commonification/tuxmath", and "branches/commonification/tuxtype".
				
				<br /><br />To become a member of Tux4kids, <a href="http://alioth.debian.org">apply for an Alioth account</a> and request to be added to our project. Once you
				have approval, you can clone any of the repositories as described in #1 above, and will have privileges to push changes to the server. 
				<br />
			</div>
<?php include ('includes/header.php');?>
		</div>
	</div>
</body>
</html>
