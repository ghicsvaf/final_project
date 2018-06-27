
<!DOCTYPE HTML>
<html>
<head>
	
<meta charset="utf8">
	<title>CMS blog</title>
    <link rel="stylesheet" type="text/css" href="style2.css" />
</head>

<body>

<div id="banner">
<img  src="images/hello.jpg"/>
</div>
<div id="menu_top">
<ul>
<li><a href="homepage1.php" title="Homepage" class="active">Homepage</a></li>

<li><a href="tintuc.php" title="tintuc">News</a>

</li>
<li><a href="posts.php" title="Post">Posts</a></li>
<li><a href="contact.php" title="Contact">Contact</a></li>
<li><a href="feedback.php" title="Feedback">Feedback</a></li>
</ul>
<ul>
<li><a href="login.php" title="logout" class="logout">Logout</a></li>
</ul>



<form class="search-form" method="POST" action="search.php">
<input type="text" name="search" placeholder="Search ..." />
<input type="submit"   value="Search"/>
</form>


</div>
<div id="main">
<div id="left">
<table width="450" height="400" align="center" >

	<h1><span style="color: red;">Warning!</span></h1>
<?php
echo "you can not change posts'languages because it's related to some copyright problems!";
?>
<h3><a href="homepage1.php"> Go back homepage</a></h3>

</table>
</div>
<div id="right">
<div class="menu_right">

<h3>CATEGORY</h3>
<ul>
<li><a href="phapluat.php"> ~> Laws <~ </a></li>
<li><a href="thethao.php"> ~> Sports <~ </a></li>
<li><a href="khoahoc.php">~> Science <~ </a></li>
<li><a href="Society.php"> ~> Society <~</a></li>

<li><a href="kinhdoanh.php"> ~> Business <~  </a></li>
<li><a href="giaoduc.php"> ~> Education <~</a></li>
<li><a href="giaitri.php"> ~> Entertainment <~</a></li>
<li><a href="others.php"> ~> Others <~ </a></li>
<li><a href="history.php"> ~> History <~ </a></li>

</ul>
</div>
</div>
</div>

<div id="footer">
 CMS BLOG was designed by
 2 students of Faculty of Information Technology - Hanoi University

</div>

</body>
</html>