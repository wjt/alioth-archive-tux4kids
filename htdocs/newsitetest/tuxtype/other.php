<?php
include ('includes/pageheader.php');

echo'
	<title>Tux4kids &raquo; Tuxtype &raquo; Other projects by Tux4Kids</title>
	</head>
<body>
	<div  align="center">
		<div class="box">
			<div class="col1">
				<ul class="menu">
					<li><a href="index.php"><span>Home</span></a></li>
					<li><a href="download.php"><span>Downloads</span></a></li>
					<li><a href="screens.php"><span>Screenshots</span></a></li>
					<li><a href="help.php"><span>Get help</span></a></li>
					<li><a href="other.php" class="active"><span>Other Projects</span></a></li>
					<li><a href="http://www.tux4kids.com"><span>About Tux4Kids</span></a></li>
				</ul>
			</div>
			<div class="col2">
				<table>
					<tr>
						<td align="center">
							<a href="http://tux4kids.alioth.debian.org/tuxmath/index.php"><img src="images/tm_title.png" /></a>
						</td>
						<td>
							<a href="http://tux4kids.alioth.debian.org/tuxmath/index.php">Tux, of Math Command</a>, AKA TuxMath, is 
							a great program that uses several different playing styles on two different games to help teach kids math skills in a fun way.
						</td>
					</tr>
					<tr>
						<td>
							<a href="http://www.tuxpaint.org/"><img src="images/tp_title.png" /></a>
						</td>
						<td>
							Partnering with New Breed Software, Tux4Kids helps bring you <a href="http://www.tuxpaint.org/">Tux Paint</a>. This fun drawing game 
							encourages kids to be creative and creates a fun environment complete with sound effects. 							
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