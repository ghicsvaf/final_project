
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
<li><a href="homepage1.php" title="Homepage" class="active">Trang chủ</a></li>

<li><a href="tintuc.php" title="tintuc">Tin Tức</a>

</li>
<li><a href="posts.php" title="Post">Bài Viết</a></li>
<li><a href="contact.php" title="Contact">Liên Hệ</a></li>
<li><a href="feedback.php" title="Feedback">Phản Hồi</a></li>
</ul>
<ul>
<li><a href="login.php" title="logout" class="logout">Đăng Xuất</a></li>
</ul>



<form class="search-form" method="POST" action="search.php">
<input type="text" name="search" placeholder="Search ..." />
<input type="submit"   value="Tìm Kiếm"/>
</form>


</div>
<div id="main">
<div id="left">
<table width="450" height="400" align="center" >

	<h1><span style="color: red;">Cảnh báo!</span></h1>
<?php
echo "Bạn không thể thay đổi ngôn ngữ của bài viết vì một số vấn đề bản quyền!"
?>

<h3><a href="homepage1.php"> Quay về trang chủ</a></h3>

</table>
</div>
<div id="right">
<div class="menu_right">

<h3>PHÂN LOẠI</h3>
<ul>
<li><a href="phapluat.php"> ~> Luật Pháp <~ </a></li>
<li><a href="thethao.php"> ~> Thể Thao <~ </a></li>
<li><a href="khoahoc.php">~> Khoa Học <~ </a></li>
<li><a href="Society.php"> ~> Xã Hội <~</a></li>

<li><a href="kinhdoanh.php"> ~> Kinh Doanh <~  </a></li>
<li><a href="giaoduc.php"> ~> Giáo Dục <~</a></li>
<li><a href="giaitri.php"> ~> Giải Trí <~</a></li>
<li><a href="others.php"> ~> Khác <~ </a></li>
<li><a href="history.php"> ~> Lịch Sử <~ </a></li>

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