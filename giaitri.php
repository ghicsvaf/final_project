<?php
include "translate.php";
?>
<?php 

require('connect.php')
 ?>
<!DOCTYPE HTML>
<html>
<head>
	
<meta charset="utf8"/>
	<title><?php echo $lang['title']?></title>
    <link rel="stylesheet" type="text/css" href="style2.css" />
	
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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




<form class="search-form" method="POST" action="search.php">
<input type="text" size="40"name="search" placeholder="English or tiếng Việt không dấu only ..." />
<input type="submit"   value="<?php echo $lang['search']?>"/>
</form>
<div id="main">
<div id="left">

<?php

require('config.php');
$result= mysql_query("select id,tieude,Hinh,tomtat from posts where theloai='giaitri'");


while($data=mysql_fetch_assoc($result)){

	
    echo "<h3><a href='detail.php?id=$data[id]'> $data[tieude]</a></h3>";

	


	echo"<img src='images/$data[Hinh]' width='140px' />";
	echo"<p>$data[tomtat]</p>";
}

?>




</div>
<div id="right">
<div class="menu_right">
<ul>
<li><a href="giaitri.php?lang=en"><?php echo $lang['lang_en']?></a> | <a href="giaitri.php?lang=vie"><?php echo $lang['lang_vie']?></a></li></ul>
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