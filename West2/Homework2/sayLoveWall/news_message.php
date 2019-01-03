<?php
//********************读取一条**********************
//包含文件
include "cont.php";
$id=$_GET["id"];
$sql_select="select * from news where id=$id";
$result=mysql_query($sql_select);
$arr=mysql_fetch_row($result);
$hits=$arr[4];
$hits++;
$sqla="update news set hits=$hits where id=$id";
$resulta=mysql_query($sqla);
?>


<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>message</title>
 </head>
 <body>
   <?php
	include "header.php";
  ?>
  <table width="70%" cellpadding="5" align="center">
  <tr>
	<th><h2><?php echo $arr[2]?>的表白内容</h2></th>
  </tr>
  <tr>
	<td align="center" bgColor="#f0f0f0">
		单机率：<?php echo $arr[4]?>&nbsp;&nbsp;
		学校：<?php echo $arr[3]?>&nbsp;&nbsp;
		发布时间：<?php echo @date('Y-m-d H-i-s',$arr[5])?>
	</td>
  </tr>
  <tr>
	<td>内容：</td>
  </tr>
  <tr >
	<td><?php echo $arr[6]?></td>
  </tr>
  </table>
  <?php
	include "footer.php";
  ?>
 </body>
</html>
