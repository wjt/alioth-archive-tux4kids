<?php
include ('includes/pageheader.php');

echo'
	<title>Tux4kids - Projects</title>';

include ('includes/header.php');

echo'
			<div class="col1">
				<ul class="menu">
					<li><a href="index.php"><span>Home</span></a></li>
					<li><a href="" class="active"><span>Projects</span></a></li>
					<li><a href="dev.php"><span>For Developers</span></a></li>
					<li><a href="http://alioth.debian.org/mail/?group_id=31080"><span>Mailing Lists</span></a></li>
					<li><a href="svn.php"><span>SVN Repository</span></a></li>
					<li><a href="http://alioth.debian.org/forum/?group_id=31080"><span>Forums</span></a></li>
				</ul>
			</div>
			<div class="col2">
				<a href="http://tux4kids.alioth.debian.org/newsitetest/tuxmath/">TuxMath</a><br />
				<a href="http://www.tuxpaint.org">TuxPaint</a><br />
				<a href="http://tux4kids.alioth.debian.org/newsitetest/tuxtype/">TuxTyping</a><br />
			</div>
		</div>
	</div>
</body>
</html>';
?>