<?php
include "translate.php";
?>
<!DOCTYPE HTML>
<html>
<head>
	
<meta charset="utf8">
	<title><?php echo $lang['title']?></title>
    <link rel="stylesheet" type="text/css" href="style2.css" />
</head>

<body>

<div id="banner">
<img  src="images/hello.jpg"/>
</div>
<div id="menu_top">
<ul>
<li><a href="homepage1.php" title="Homepage" class="active"><?php echo $lang['homepage']?></a></li>
<li><a href="tintuc.php" title="tintuc"><?php echo $lang['news']?></a>
</li>
<li><a href="posts.php" title="Post"><?php echo $lang['posts']?></a></li>
<li><a href="contact.php" title="Contact"><?php echo $lang['contact']?></a></li>
<li><a href="feedback.php" title="Feedback"><?php echo $lang['feedback']?></a></li>
</ul>
<ul>
<li><a href="login.php" title="logout" class="logout"><?php echo $lang['logout']?></a></li>
</ul>
<form  class="search-form" method="POST" action="search.php">
<input type="text" size="40" name="search" placeholder="English or tiếng Việt không dấu only ..." />
<input type="submit"   value="<?php echo $lang['search']?>"/>
</form>
<div id="main">
<div id="left">
	<table width="600  " height="400" align="left" >

	<div class="d">
	<p><font face="Times New Roman">
		<tr>
		<td>
    <h1> Update information regularly to catch up the opportunities !!!!</h1>
    <p align="justify">
 The T&T is recruiting employees with starting salaries up to 1000$ </p>
 <img src="images/7.png" width"400" height="400" >
 <p align="justify">
 ✪ Learn important skills in design just from 299,000đ.
➤ Sign up now: https://goo.gl/8MY9xA </p>

To learn graphic design SUCCESS you need to learn skills such as Design Thinking, Layout Design, Color, Typoghraphy (text). </p> And you need to know the tools to get the finished product design. Sign up for design courses at FEDU to learn all the graphic design skills and make your own professional graphic design.</p>

+ Logo design, banners, advertising publications, magazine covers, books, branding, packaging, standee, icon, graphic design 2D with Adobe Photoshop, Adobe Illustrator (299,000đ)
➤ Sign up link: https://goo.gl/8MY9xA </p>

+ Editting course, easily color photos, create photo album for photo shoot, photographer, create beautiful photos, ... With Adobe Photoshop Lightroom (299,000đ)
➤ Sign up link: https://goo.gl/wnfrxm </p>

+ Making video course, making animated cartoons, etc. With Adobe AfterEfect (299,000đ)
➤ Sign up link: https://goo.gl/cG4hNH </p>

+ Design UI / UX for website, design an app easily, ... With Adobe Photoshop Adobe Muse, Experience
➤ Sign up link: https://goo.gl/8TTqpT </p>

+ 30 Minute Video Course for AI and Power Point (299,000đ)
➤ Sign up link: https://goo.gl/hppY7R </p>

+ Combo Courses (4 courses) with only 599.000đ.
➤ Sign up link: https://goo.gl/K8RVcd </p>

----------------------------------------------------------
 FEDU
Email: contact@fedu.vn
Hotline: 0869259562 </p>
 
  
 </td>
 </tr>
 </table>
 
</div>
<div id="right">
<div class="menu_right">
<ul>
<li><a href="tintuc.php?lang=en"><?php echo $lang['lang_en']?></a> | <a href="tintuc.php?lang=vie"><?php echo $lang['lang_vie']?></a></li></ul>
<h3><?php echo $lang['category']?></h3>
<ul>
<li><a href="phapluat.php"> ~> <?php echo $lang['laws']?> <~ </a></li>
<li><a href="thethao.php"> ~> <?php echo $lang['sports']?> <~ </a></li>
<li><a href="khoahoc.php">~> <?php echo $lang['science']?> <~ </a></li>
<li><a href="Society.php"> ~> <?php echo $lang['society']?> <~</a></li>
<li><a href="kinhdoanh.php"> ~> <?php echo $lang['business']?> <~  </a></li>
<li><a href="giaoduc.php"> ~> <?php echo $lang['education']?> <~</a></li>
<li><a href="giaitri.php"> ~> <?php echo $lang['entertainment']?> <~</a></li>
<li><a href="others.php"> ~> <?php echo $lang['others']?> <~ </a></li>
<li><a href="history.php"> ~> <?php echo $lang['history']?> <~ </a></li>
</ul>
</div>
</div>
</div>
<div id="footer">
 CMS BLOG designed by
 2 students of Faculty of Information Technology - Hanoi University

</div>

</body>
</html>