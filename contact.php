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
</div>
<div id="main">
<div id="left">
	<table width="600  " height="400" align="left" >

	<div class="d">
	<p><font face="Times New Roman">
		<tr>
		<td>
    <h1> Hãy liên lạc với 2 admin của website để giải đáp mọi thắc mắc!!!</h1>
    <p align="justify">
 Admin Sơn Tùng M-TP, email: sontungmtp@gmail.com Phone: 0123456789 </p>
 <img src="images/4.jpg" width"400" height="400" >
 <p align="justify">
 Tùng và bạn đời của anh ấy </p>
 
  <p align="justify">
  Đến với admin tiếp theo </p>
  <img src="images/5.jpg" width"400" height="400" >
  <p align="justify">
 Ảnh minh họa </p>
 <p align="justify">
  Thắng đẹp trai email: thang.hanu.98@gmail.com phone: 01649518777 </p>
 </td>
 </tr>
 </table>
 
</div>
<div id="right">
<div class="menu_right">
<h3>__Category__</h3>
<ul>
<li><a href="contact.php?lang=en"><?php echo $lang['lang_en']?></a> | <a href="contact.php?lang=vie"><?php echo $lang['lang_vie']?></a></li></ul>
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