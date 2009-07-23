<?php
include ('includes/pageheader.php');
echo'
	<title>Tux4kids - Projects</title>
	</head>
<body>
	<div align="center">
		<div class="box">
			<div class="col1">
				<ul class="menu">
					<li><a href="index.php"><span>Home</span></a></li>
					<li><a href="projects.php" class="active"><span>Projects</span></a></li>
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
				<table>
					<tr>
						<td align="center">
							<a href="http://tux4kids.alioth.debian.org/tuxmath/index.php"><img src="images/tm_title.png" /></a>
						</td>
						<td>
							<a href="http://tux4kids.alioth.debian.org/tuxmath/index.php">Tux, of Math Command</a>, a.k.a. TuxMath, helps kids hone their arithmetic skills while they defend penguins from incoming comets. Kids can also explore the asteroid belt with only their factoring abilities to bring them through safely!
						</td>
					</tr>
					<tr>
						<td>
							<a href="http://www.tuxpaint.org/"><img src="images/tp_title.png" /></a>
						</td>
						<td>
							Partnering with New Breed Software, Tux4Kids helps bring you <a href="http://www.tuxpaint.org/">Tux Paint</a>. This remarkable drawing program
							empowers kids to be creative in an environment complete with magic tools and sound effects.  							
						</td>
					</tr>
					<tr>
						<td>
							<a href="http://tux4kids.alioth.debian.org/tuxtype/index.php"><img src="images/tt_title.png" /></a>
						</td>
						<td>
							<a href="http://tux4kids.alioth.debian.org/tuxtype/index.php">TuxTyping</a>
							Tux the penguin is hungry, and loves to eat fish. But Tux can only catch the fish if you type the right letters in time! Can you help Tux?
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