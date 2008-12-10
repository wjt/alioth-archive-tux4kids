<?php
 
$domain=ereg_replace('[^\.]*\.(.*)$','\1',$_SERVER['HTTP_HOST']);
$group_name=ereg_replace('([^\.]*)\..*$','\1',$_SERVER['HTTP_HOST']);

echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en   ">

  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title><?php echo $project_name; ?></title>
	<script language="JavaScript" type="text/javascript">
	<!--
	function help_window(helpurl) {
		HelpWin = window.open( helpurl,'HelpWindow','scrollbars=yes,resizable=yes,toolbar=no,height=400,width=400');
	}
	// -->
		</script>

<style type="text/css">
	<!--
	BODY {
		margin-top: 3;
		margin-left: 3;
		margin-right: 3;
		margin-bottom: 3;
		background: #01004e;
	}
	ol,ul,p,body,td,tr,th,form { font-family: verdana,arial,helvetica,sans-serif; font-size:small;
		color: #333333; }

	h1 { font-size: x-large; font-family: verdana,arial,helvetica,sans-serif; }
	h2 { font-size: large; font-family: verdana,arial,helvetica,sans-serif; }
	h3 { font-size: medium; font-family: verdana,arial,helvetica,sans-serif; }
	h4 { font-size: small; font-family: verdana,arial,helvetica,sans-serif; }
	h5 { font-size: x-small; font-family: verdana,arial,helvetica,sans-serif; }
	h6 { font-size: xx-small; font-family: verdana,arial,helvetica,sans-serif; }

	pre,tt { font-family: courier,sans-serif }

	a:link { text-decoration:none }
	a:visited { text-decoration:none }
	a:active { text-decoration:none }
	a:hover { text-decoration:underline; color:red }

	.titlebar { color: black; text-decoration: none; font-weight: bold; }
	a.tablink { color: black; text-decoration: none; font-weight: bold; font-size: x-small; }
	a.tablink:visited { color: black; text-decoration: none; font-weight: bold; font-size: x-small; }
	a.tablink:hover { text-decoration: none; color: black; font-weight: bold; font-size: x-small; }
	a.tabsellink { color: black; text-decoration: none; font-weight: bold; font-size: x-small; }
	a.tabsellink:visited { color: black; text-decoration: none; font-weight: bold; font-size: x-small; }
	a.tabsellink:hover { text-decoration: none; color: black; font-weight: bold; font-size: x-small; }
	-->
</style>

</head>

<body>

<table border="0" width="100%" cellspacing="0" cellpadding="0">

	<tr>
		<td><a href="/"><img src="http://<?php echo $domain; ?>/themes/gforge/images/logo.png" border="0" alt="" width="198" height="52" /></a></td>
	</tr>

</table>

<table border="0" width="100%" cellspacing="0" cellpadding="0">

	<tr>
		<td>&nbsp;</td>
		<td colspan="3">



		<!-- start tabs -->

	<tr>
		<td align="left" bgcolor="#E0E0E0" width="9"><img src="http://<?php echo $domain; ?>/themes/gforge/images/tabs/topleft.png" height="9" width="9" alt="" /></td>
		<td bgcolor="#E0E0E0" width="30"><img src="http://<?php echo $domain; ?>/themes/gforge/images/clear.png" width="30" height="1" alt="" /></td>
		<td bgcolor="#E0E0E0"><img src="http://<?php echo $domain; ?>/themes/gforge/images/clear.png" width="1" height="1" alt="" /></td>
		<td bgcolor="#E0E0E0" width="30"><img src="http://<?php echo $domain; ?>/themes/gforge/images/clear.png" width="30" height="1" alt="" /></td>
		<td align="right" bgcolor="#E0E0E0" width="9"><img src="http://<?php echo $domain; ?>/themes/gforge/images/tabs/topright.png" height="9" width="9" alt="" /></td>
	</tr>

	<tr>

		<!-- Outer body row -->

		<td bgcolor="#E0E0E0"><img src="http://<?php echo $domain; ?>/themes/gforge/images/clear.png" width="10" height="1" alt="" /></td>
		<td valign="top" width="99%" bgcolor="#E0E0E0" colspan="3">

			<!-- Inner Tabs / Shell -->

			<table border="0" width="100%" cellspacing="0" cellpadding="0">
			<tr>
				<td align="left" bgcolor="#ffffff" width="9"><img src="http://<?php echo $domain; ?>/themes/gforge/images/tabs/topleft-inner.png" height="9" width="9" alt="" /></td>
				<td bgcolor="#ffffff"><img src="http://<?php echo $domain; ?>/themes/gforge/images/clear.png" width="1" height="1" alt="" /></td>
				<td align="right" bgcolor="#ffffff" width="9"><img src="http://<?php echo $domain; ?>/themes/gforge/images/tabs/topright-inner.png" height="9" width="9" alt="" /></td>
			</tr>

			<tr>
				<td bgcolor="#ffffff"><img src="http://<?php echo $domain; ?>/themes/gforge/images/clear.png" width="10" height="1" alt="" /></td>
				<td valign="top" width="99%" bgcolor="white">

	<!-- whole page table -->
<table width="100%" cellpadding="5" cellspacing="0" border="0">
<tr><td width="65%" valign="top">
<?php if ($handle=fopen('http://'.$domain.'/export/projtitl.php?group_name='.$group_name,'r')){
$contents = '';
while (!feof($handle)) {
	$contents .= fread($handle, 8192);
}
fclose($handle);
echo $contents; } ?>
<p>Welcome to the current home page for <b><i>Tux Typing</i></b> and 
<b><i>Tux, Of Math Command</i></b>.  Both projects are actively being developed,
and downloads are available at this site (see below).</p> 
<p>Here you can see <a href="tuxmath.php">screenshots of TuxMath</a> in action!</p>
<p>For <b><i>Tux Paint</i></b>
please follow the link to the excellent <a href="http://www.tuxpaint.org" target="_blank">Tux Paint homepage</a>.
</p>
<hr>
<h4>Tuxmath and Tuxtype</h4>
<p>As you likely can tell, we 
 need someone with some time and web development skills to work on this page.  Our
 efforts have been going into development of the programs themselves.  If you are
interested in helping, please contact us via the mailing lists below.
</p>
<p>
If you run Debian simply run
<pre>aptitude install tuxmath tuxtype tuxtype-data-nonfree</pre>
</p>

<p>Downloads of source releases and Windows and MacOSX binaries are 
available from the <i>released files</i> link in the project summary on the right.
</p>  
<hr>
<h5>News</h5>
<p><i><b>NEWS, 2008-12-08: </i>TuxMath 1.7.0 Released!</b> Source tar.gz archives and Win32/MacOSX installers for TuxMath 1.7.0 are available for download on our <a href="http://alioth.debian.org/project/showfiles.php?group_id=31080">Released Files</a> page. See below for a description of the new features.  Tux Typing 1.7.0 should be released within the next day or so.</p>

<p><i><b>NEWS, 2008-12-02: </i>TuxMath 1.7.0 and TuxType 1.7.0 Coming Soon!</b> The Google Summer of Code was highly productive for Tux4Kids, with major enhancements to both programs courtesy of Brendan Luchen (TuxMath), Jesus Mager (TuxMath), Sreyas Kurumanghat (Tux Typing), and Mobin Mohan (Tux Typing), as well as their respective mentors.  Both programs now run fullscreen at the native resolution from the operating system, rather than just 640x480.  This greatly improves the appearance, especially on small devices like the OLPC XO laptop.  TuxMath features an entirely new game activity, "Factoroids", which provides fun review of factorization and reduction of fractions while clearing away rocks floating in space.  There also is a new, more flexible question-generation engine that allows questions with multiple operands for order-of-operations review.  Some of the individual lessons are linked together in "Campaign Mode" that places Tux's efforts in an overall story line.  For Tux Typing, enhancements include a completely reworked phrase practice activity, with graphic keyboard hints and on-screen display of accuracy and typing speed.  Tux Typing also now uses GNU gettext for internationalization, making it easier to add translations.</p>

<p>The programs are currently in "string freeze", meaning that the displayed text will not be changed before the next release.  This is the time for translators to update the po files, and also is a good time to add new translations if you are so motivated.  Go to the <a href="http://svn.debian.org/wsvn/tux4kids" target="_blank">browsable subversion repository</a> and navigate to the po directory, (e.g. tuxmath/trunk/po) to find the po files for each language, as well as the po template file (e.g. tuxmath.pot) to be used for new translations.  The updated files can be sent our lists at <a href="mailto:tuxmath-devel@lists.sourceforge.net?&subject=TuxMath%20Translation">tuxmath-devel@lists.sourceforge.net</a> and <a href="mailto:tux4kids-tuxtype-dev@lists.alioth.debian.org  
?&subject=TuxType%20Translation">tux4kids-tuxtype-dev@lists.alioth.debian.org  
</a>.</p>

<p>Source and binary releases for TuxMath 1.7.0 and TuxType 1.7.0 will be posted here on Monday, 9 December 2008.  Given the amount of new code, we do not expect them to be bug-free, but should be very usable.  We expect to make another release or two fairly shortly thereafter following some bug-squashing.</p>

<p><i><b>NEWS, 2008-07-06: </i></b>A <a href="http://www.youtube.com/watch?v=D20yCEDye2Q" target="_blank">video of a kid playing tuxmath</a> is available on the web. Fun!</p>

<p><i><b>NEWS, 2008-05-19: </i>TuxMath 1.6.3 has been released,</b> with much more extensive internationalization. The Linux build now uses SDL_Pango to allow right-to-left rendering for Arabic and Hebrew, and font selection for display of Asian and Eastern European characters.  Many additional translations have been added, mostly from Ubuntu's Launchpad project.  Under Linux, TuxMath now supports 21 languages!  However, we do not yet have SDL_Pango functioning in the Windows or MacOSX build.  We do, however, have GNU Gettext itself working on all platforms, meaning that Western European translations work in Windows and the Mac.</p>

<p><i><b>NEWS, 2008-05-01: </i>TuxMath 1.6.2 has been released.</b> The most important advance is a MacOSX disk image (.dmg) binary file.  This should work on both Intel- and PPC-based Macs running OSX 10.4 or 10.5.  For now, internationalization is not supported in the Mac build.  For Linux and Windows, the release includes new translations for Spanish, Hungarian, and Swedish.  (Note that the source package *does* build correctly on OSX if you have the needed libraries, and Gettext works correctly).  This release also fixes an annoying crash-on-exit bug.</p>

<p><i><b>NEWS, 2008-03-30: </i>TuxType won FOSS india award</b>

Like last year, Tux4Kids is participating in the Google Summer of Code. Last year's project, the addition of Indic language support to TuxType, <a href="http://mobin-m.livejournal.com/4705.html">won the FOSS India 2008</a> award. Congratulationss to the team writing this code!</p>

<p><i><b>NEWS, 2008-03-29: </i>TuxType 1.5.17 has been released - the first TuxType release in a few months.</b> This release includes a new Nepali theme (contributed by Vikal Acharya and Shakeel Shrestha), as well as some visual enhancements to the menu interface.</p>

<p>For Mac users, also of note is that TuxMath has been added to the excellent <a href="http://www.macports.org" target="_blank">MacPorts</a> project. Users of MacPorts can install TuxMath with a simple "sudo port install tuxmath" at the command line. Work is ongoing to add TuxType to MacPorts as well, and to get an automated binary build process for both programs on OS-X.</p>

<p><i><b>NEWS, 2008-02-04:</i> Improved MacOSX Support!</b> (but still not perfect).  TuxMath 1.6.1 is now available for download as a <a href="http://alioth.debian.org/frs/download.php/2310/tuxmath_w_fonts-1.6.1.tar.gz" target="_blank">gzipped tar source archive</a> and as an <a href="http://alioth.debian.org/frs/download.php/2309/tuxmath-1.6.1-win32-installer.exe" target="_blank">executable Win32 installer</a>.</p>

<p>For Unix-y MacOSX users, the good news is that the source archive now builds and installs correctly on MacOSX 10.5 (Leopard) with a simple "./configure; make; sudo make install", as long as you have the required libraries.  For "the rest of us", we hope to have a simple MacOSX .dmg image file in the near future.</p>

<p>Native language support via Gnu Gettext works correctly on MacOSX, as well as Windows and Linux. New human-language translations are welcome, of course. Email us at <a href="mailto:tuxmath-devel@lists.sourceforge.net?&subject=TuxMath%20Translation">tuxmath-devel@lists.sourceforge.net</a> if interested.</p>

<p>On the TuxType front, we now offer current binary builds of TuxType 1.5.16 for <a href="http://alioth.debian.org/frs/download.php/2301/tuxtype_w_fonts-1.5.16-MACOSX10.4+.dmg" target="_blank">Intel-</a> and <a href="http://alioth.debian.org/frs/download.php/2300/Tuxtype_w_fonts-1.5.16-MACOS10.3PPC.dmg" target="_blank">PPC-</a>based Macs, thanks to the efforts of Alex Shorthouse.</p>


<hr> 

<p>For users of Debian 
and its derivatives, recent TuxMath (1.6.3) and TuxType (1.5.17) 
packages are now available in the "Sid/Unstable" branch.
</p>


<!-- ?php if ($handle=fopen('http://'.$domain.'/export/projnews.php?group_name='.$group_name,'r')){
$contents = '';
while (!feof($handle)) {
	$contents .= fread($handle, 8192);
}
fclose($handle);
$contents=str_replace('href="/','href="http://'.$domain.'/',$contents);
echo $contents; } ? -->

</td>

<td width="35%" valign="top">

		<table cellspacing="0" cellpadding="1" width="100%" border="0" bgcolor="#d5d5d7">
		<tr><td>
			<table cellspacing="0" cellpadding="2" width="100%" border="0" bgcolor="#eaecef">
				<tr style="background-color:#d5d5d7" align="center">
					<td colspan="2"><span class="titlebar">Project Summary</span></td>
				</tr>
				<tr align="left">
					<td colspan="2">

<?php if($handle=fopen('http://'.$domain.'/export/projhtml.php?group_name='.$group_name,'r')){
$contents = '';
while (!feof($handle)) {
	$contents .= fread($handle, 8192);
}
fclose($handle);
$contents=str_replace('href="/','href="http://'.$domain.'/',$contents);
$contents=str_replace('src="/','src="http://'.$domain.'/',$contents);
echo $contents; } ?>

					</td>
				</tr>
				<table border=0 width="100%"><tr><td bgcolor="#EAECEF">
					<ul><li>SVN repository for tuxtype and tuxmath: 
					  <ul>
					   <li><a href="http://svn.debian.org/wsvn/tux4kids">browsable</a></li>
					   <li><a href="svn://svn.debian.org/tux4kids/">svn://svn.debian.org/tux4kids/</a></li>
					  </ul>
					 </li>
					</ul>
				<hr size="1" />
				 <ul>
				  <li>browsable archive of the <a href="http://sourceforge.net/mailarchive/forum.php?forum_name=tuxmath-devel">tuxmath-devel mailinglist</a></li>
				  <li>(see above for more mailinglists)</li>
				 </ul>
				<hr size="1" />
				<ul>
				  <li><a href="http://bugs.debian.org/tuxtype">Bugs in the Debian BTS against tuxtype</a></li>
				  <li><a href="http://bugs.debian.org/tuxtype-data-nonfree">Bugs in the Debian BTS against tuxtype-data-non-free</a></li>
				  <li><a href="http://bugs.debian.org/tuxmath">Bugs in the Debian BTS against tuxmath</a></li>
				</ul>
				</td></tr></table>
			</table>
		</td></tr>
		</table><p>&nbsp;</p>
</td></tr></table>
			&nbsp;<p>
			<!-- end main body row -->


				</td>
				<td width="10" bgcolor="#ffffff"><img src="http://<?php echo $domain; ?>/themes/gforge/images/clear.png" width="2" height="1" alt="" /></td>
			</tr>
			<tr>
				<td align="left" bgcolor="#E0E0E0" width="9"><img src="http://<?php echo $domain; ?>/themes/gforge/images/tabs/bottomleft-inner.png" height="11" width="11" alt="" /></td>
				<td bgcolor="#ffffff"><img src="http://<?php echo $domain; ?>/themes/gforge/images/clear.png" width="1" height="1" alt="" /></td>
				<td align="right" bgcolor="#E0E0E0" width="9"><img src="http://<?php echo $domain; ?>/themes/gforge/images/tabs/bottomright-inner.png" height="11" width="11" alt="" /></td>
			</tr>
			</table>

		<!-- end inner body row -->

		</td>
		<td width="10" bgcolor="#E0E0E0"><img src="http://<?php echo $domain; ?>/themes/gforge/images/clear.png" width="2" height="1" alt="" /></td>
	</tr>
	<tr>
		<td align="left" bgcolor="#E0E0E0" width="9"><img src="http://<?php echo $domain; ?>/themes/gforge/images/tabs/bottomleft.png" height="9" width="9" alt="" /></td>
		<td bgcolor="#E0E0E0" colspan="3"><img src="http://<?php echo $domain; ?>/themes/gforge/images/clear.png" width="1" height="1" alt="" /></td>
		<td align="right" bgcolor="#E0E0E0" width="9"><img src="http://<?php echo $domain; ?>/themes/gforge/images/tabs/bottomright.png" height="9" width="9" alt="" /></td>
	</tr>
</table>

<!-- PLEASE LEAVE "Powered By GForge" on your site -->
<br />
<center>
<a href="http://gforge.org/"><img src="http://gforge.org/images/pow-gforge.png" alt="Powered By GForge Collaborative Development Environment" border="0" /></a>
</center>


</body>
</html>
