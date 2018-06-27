<?php
include "translate.php";
?>
<?php

require('connect.php');


$loi=array();
$loi["name"]=$loi["mess"]=NULL;
$name=$mess=NULL;
if(isset($_POST["ok"])){
    if(empty($_POST["txtname"])){
        $loi["name"]="*xin vui long nhap ten</br>";
    }
    else {
        $name=$_POST["txtname"];
    }
    if(empty($_POST["txtmess"])){
        $loi["mess"]="*xin vui long nhap mess</br>";
    }
    else{
        $mess=$_POST["txtmess"];
    }
    
    if(strlen($name) > 0 && strlen($mess) > 0) {
       // require('config.php');
        $sql = "insert into feedback(name,noidung) values('$name','$mess')";  
        mysql_query($sql);
    }
}
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



<form  class="search-form" method="POST" action="search.php">
<input type="text" size="40" name="search" placeholder="English or ti?ng Vi?t không d?u only ..." />
<input type="submit"   value="<?php echo $lang['search']?>"/>
</form>
<div id="main">
<div id="left">


<div id="feedback">
<fieldset>
<legend>Feedback</legend>
<form action="feedback2.php" method="post">
<table>
<tr>
<td>Name</td>
<td><input type="text" size="25" name="txtname" value=" <?php echo $loi['name']; ?>" /></td>
</tr>
<tr>
<td>Content</td>
<td><textarea cols="60" rows="5" name="txtmess"> <?php echo $loi['mess']; ?></textarea></td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="Submit" name="ok"/></td>
<?php echo "thanks for your feedback" ?>

</tr>




</table>
</form>
</fieldset>
</div>



</div>

<div id="right">
<div class="menu_right">
<ul>
<li><a href="feedback2.php?lang=en"><?php echo $lang['lang_en']?></a> | <a href="feedback2.php?lang=vie"><?php echo $lang['lang_vie']?></a></li></ul>
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