<?php
include ('includes/pageheader.php');

echo'
	<title>Tux4kids &raquo; Tuxtype &raquo; Screenshots</title>
	</head>
<body>
	<div  align="center">
		<div class="box">
			<div class="col1">
				<ul class="menu">
					<li><a href="index.php"><span>Home</span></a></li>
					<li><a href="download.php"><span>Downloads</span></a></li>
					<li><a href="" class="active"><span>Screenshots</span></a></li>
					<li><a href="help.php"><span>Get help</span></a></li>
					<li><a href="other.php"><span>Other Projects</span></a></li>
					<li><a href="http://www.tux4kids.com"><span>About Tux4Kids</span></a></li>
				</ul>
			</div>
			<div class="col2">
				<table>
					<tr>
					<td>
						<a href="screenshots/tux_menu.jpg" rel="thumbnail" title="TuxType Menu">
						<img src="screenshots/tux_menu_sm.jpg" border="1" alt="Tux Menu Thumbnail"><br>
						<small>Click to Enlarge</small></a>
					</td>
					<td>
						<a href="screenshots/tux_eat_fish.jpg" rel="thumbnail" title="Tux eating some fish">
						<img src="screenshots/tux_eat_fish_sm.jpg" border="1" alt="Tux Eating Fish"><br>
						<small>Click to Enlarge</small></a>
					</td>
					<td>
						<a href="screenshots/tux_waiting.jpg" rel="thumbnail" title="Tux waiting for your command">
						<img src="screenshots/tux_waiting_sm.jpg" border="1" alt="Tux waiting"><br>
						<small>Click to Enlarge</small></a>
					</td>
					<td>
						<a href="screenshots/tux_running.jpg" rel="thumbnail" title="Tux runs to catch the fish">
						<img src="screenshots/tux_running_sm.jpg" border="1" alt="Tux running"><br>
						<small>Click to Enlarge</small></a>
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