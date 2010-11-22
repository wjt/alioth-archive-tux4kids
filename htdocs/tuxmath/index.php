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
					<li><a href="index.php" 
					class="active"><span>Home</span></a></li>
					<li><a 
					href="download.php"><span>Downloads</span></a></li>
					<li><a 
					href="screens.php"><span>Screenshots</span></a></li>
					<li><a href="help.php"><span>Get 
					help</span></a></li>
					<li><a href="other.php"><span>Other 
					Projects</span></a></li>
					<li><a 
					href="http://www.tux4kids.com"><span>About 
					Tux4Kids</span></a></li>
				</ul>
				<br /><br /><br /><br /><br /><br /><br /><br 
				/><br /><br />
				<br /><br /><br /><br /><br /><br /><br /><br 
				/><br /><br />
				<br /><br /><br /><br /><br /><br /><br /><br 
				/><br />
				<img src="images/pow-fusionforge.png" 
				alt="Fusion Forge" />
			</div>
			<div class="col2">
				<font class="heading">Welcome to Tux, of Math 
				Command!</font><br />
				<br />
				TuxMath is an arcade game that helps kids 
				practice their math facts. The main goal is to 
				make it effective and fun! <br />
				<br />
				<table class="front">
					<tr>
						<th>NEWS 2010-11-22: New 
						release of TuxMath</th>
					</tr>
					<tr>
						<td>
						TuxMath 1.9.0 is available for 
						download on our downloads page 
						as source tarballs and Win32 
						installer builds.
						TuxMath now features 
						head-to-head play over a local 
						network, suitable for school 
						tournaments and similar 
						competitions.  As this is a new 
						feature, some bugs may be 
						present.  The Windows build now 
						has the libary support needed 
						for proper display of 
							non-Western text (the 
							Linux version has had 
							this for some time).  
							Also, most images are 
							now stored as SVG 
							images for proper 
							display at any 
							resolution.  In 
							summary, release 1.9.0 
							is a significant 
							upgrade that most users 
							will want to get.
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
