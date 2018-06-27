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
<table width="450" height="400" align="center" >

	<div class="d">
	<p><font face="Times New Roman">
		<tr>
		<td>
	<h1> CMS BLog: A huge information website!!!</h1>
	   
	<img src="images/cms.jpg" width"400" height="400">
	<p align="justify">
	CMS stands for Content Management System, or Content Management System, which is built to support content management. The content here can be news, images, videos, ... CMS system saves time management, operating and maintenance costs so now many companies use. Not only the company but individual blogs are also born in small numbers, and they choose a solution using CMS to easily build website and content management, but also save money. Website building fees.

On the CMS feature, it provides us with a number of features such as a media management system, an image editor, a text editor and, most of all, the ability to customize the interface. There are many types of CMS like (W-CMS, E-CMS, T-CMS, ..). However, in this article we will mention W-CMS, ie CMS Website. 
    	<h2> Why CMS is important? </h2>
    <img src="images/2.png" width"400" height="400" >
	<p align="justify">
	1. Increase effectiveness. Content can be edited and published quickly and easily without requiring a high degree of design knowledge or programming. This will be highly effective when you can build a huge content system without wasting too much time and effort to save time and money. </i> </p>

2. Increase the rankings on the search engines. To improve rankings and maintain search rankings, businesses need to have a quality, unique, regularly updated content system that CMS will support. In addition, CMS also allows customers to write comments, prices, like, share, ... the content, help the website is always active, thereby attracting more visitors, increased traffic , push website rank high. </i> </p>
    3. Control and manage content easily. Thanks to CMS, businesses can maintain their content production process without any confusion or confusion. In addition, anywhere, time can create, edit and publish content quickly through just a few operations. </i> </p>
    4. Support the search for information, content. With the extremely high efficiency of CMS, the newly published content will be automatically indexed on the search engines, and the visitor can quickly find it. In addition, it is also possible to use filtering, sorting, and archiving features to help the visitor personalize the search experience. </i> </p>
5. Cross-selling (a form of popular marketing that introduces products or services plus what customers already buy), through a sophisticated content management system. It filters out consumer behaviors and preferences, thereby increasing sales and revenue for the business. </i> </p>
	<img src="images/3.png" width"400" height="400" >
    <h4> That is why we create CMS to help people have more information in order to widen knowledge for everyone</h4>
</td>
</tr>
	</font><p align="justify">
		</i></p>
	</p>
</div>
</table>
</div>
<div id="right">
<div class="menu_right">
<ul>
<li><a href="homepage1.php?lang=en"><?php echo $lang['lang_en']?></a> | <a href="homepage1.php?lang=vie"><?php echo $lang['lang_vie']?></a></li></ul>
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
 CMS BLOG was designed by
 2 students of Faculty of Information Technology - Hanoi University

</div>

</body>
</html>