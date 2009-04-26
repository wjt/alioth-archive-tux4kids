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
							<img src="images/macosx.gif" alt="Mac OS X Logo" />
						</td>
						<th>
							<font>Mac dmg files</font>
						</th>
					</tr>
					<tr>
						<td colspan="2">
							Either you love it or your hate it, but it is unforgettable Mac OS X
						</td>
					</tr>
				</table>
				<br />
				<a href="https://alioth.debian.org/frs/download.php/2381/TuxType_w_fonts-1.5.17-MacOS10.3PPC.dmg">
				<img src="images/dbutton.png"></a>
			</div>
		</div>
	</div>
</body>
</html>';
?>