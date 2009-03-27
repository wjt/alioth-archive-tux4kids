<?php
include ('includes/pageheader.php');

echo'
	<title>Tux4kids - SVN</title>';

include ('includes/header.php');

echo'
			<div class="col1">
				<ul class="menu">
					<li><a href="index.php"><span>Home</span></a></li>
					<li><a href="projects.php"><span>Projects</span></a></li>
					<li><a href="dev.php"><span>For Developers</span></a></li>
					<li><a href="http://alioth.debian.org/mail/?group_id=31080"><span>Mailing Lists</span></a></li>
					<li><a href="" class="active"><span>SVN Repository</span></a></li>
					<li><a href="http://alioth.debian.org/forum/?group_id=31080"><span>Forums</span></a></li>
				</ul>
			</div>
			<div class="col2">
			Here you can access the SVN Repository for both Tuxtype and Tuxmath
			<ul>
				<li><a href="http://svn.debian.org/wsvn/tux4kids">browsable</a></li>
				<li><a href="svn://svn.debian.org/tux4kids/">svn://svn.debian.org/tux4kids/</a></li>
			</ul>
			</div>
		</div>
	</div>
</body>
</html>';
?>