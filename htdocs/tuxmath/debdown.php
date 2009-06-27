<?php
include ('includes/pageheader.php');

echo'
	<title>Tux4kids &raquo; Tuxmath &raquo; Downloads</title>';

include ('includes/header.php');

echo'
			<div class="col1">
				<ul class="menu">
					<li><a href="index.php"><span>Home</span></a></li>
					<li><a href="download.php" class="active"><span>Download</span></a></li>
					<li><a href="screens.php"><span>Screenshots</span></a></li>
					<li><a href="help.php"><span>Get help</span></a></li>
					<li><a href="other.php"><span>Other Projects</span></a></li>
					<li><a href="http://www.tux4kids.com"><span>About Tux4Kids</span></a></li>
				</ul>
			</div>
			<div class="col2">
				<table class="downloads">
					<tr>
						<td width="50px">
							<img src="images/linux-ubuntu.gif" alt="Ubuntu Logo" />
						</td>
						<th>
							<font>Debian based Linux</font>
						</th>
					</tr>
					<tr>
						<td colspan="2">
							If you run Debian simply open a terminal and run<br />
							<br />
							<font class="command">aptitude install tuxmath tuxtype tuxtype-data-nonfree</font>
						</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</body>
</html>';
?>


