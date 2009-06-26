<?php
include ('includes/pageheader.php');
echo'
	<title>Tux4kids - SVN</title>
	</head>
<body>
	<div align="center">
		<div class="box">
			<div class="col1">
				<ul class="menu">
					<li><a href="index.php"><span>Home</span></a></li>
					<li><a href="projects.php"><span>Projects</span></a></li>
					<li><a href="dev.php"><span>For Developers</span></a></li>
					<li><a href="mail.php"><span>Mailing Lists</span></a></li>
					<li><a href="svn.php" class="active"><span>SVN Repository</span></a></li>
					<li><a href="https://alioth.debian.org/forum/?group_id=31080"><span>Forums</span></a></li>
				</ul>
				<br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
				<br /><br /><br /><br /><br /><br /><br /><br />
				<img src="images/pow-fusionforge.png" alt="Fusion Forge" />
			</div>
			<div class="col2">
				<b>Viewing the Repository</b><br />
				To check out the repository without making any changes, check out the browsable svn below. If all you need is the url for the svn, here it is as well. 
				<ul>
					<li><a href="http://svn.debian.org/wsvn/tux4kids">browsable</a></li>
					<li><a href="svn://svn.debian.org/tux4kids/">svn://svn.debian.org/tux4kids/</a></li>
				</ul><br />
				<b>Working with the Repository</b><br />
				The SVN site is hosted on <a href="http://tux4kids.alioth.debian.org/">Alioth</a> (please do not download the SourceForge SVN tree, it could be out of date).
				You can do an "anonymous" checkout in the following way:<br /><br />
				<kbd>svn co svn://svn.debian.org/tux4kids/</kbd><br /><br />
				This will get you the source code, but you won\'t be able to check in your modifications, because you need to have an account on Alioth.<br /><br />
				To get a fully-functional SVN checkout, <a href="http://alioth.debian.org">apply for an Alioth account</a> and wait for administrator approval. Once you
				have approval, do the checkout in the following way:<br /><br />
				<kbd>svn co svn+ssh://fred-guest@svn.debian.org/svn/tux4kids</kbd><br /><br />
				assuming your user name is "fred-guest". You will have to supply your password (perhaps more than once; note you can upload an SSH key to Alioth and
				bypass the requirement to type the password each time you make a commit).<br />
				With this checkout, you can use the full functionality of SVN and distribute your improvements to all the developers. If you started developing with an
				anonymous checkout, you can manually copy any changes over to the new directory created with your Alioth account and check them in.<br />
				<br />
			</div>';
include ('includes/header.php');
echo'
		</div>
	</div>
</body>
</html>';
?>