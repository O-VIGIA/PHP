<?php
include "cont.php";
$username=isset($_GET['username'])?$_GET['username']:"";
$sql_select="select * from news where author='$username'";
$result=mysql_query($sql_select);
?>
<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="陆小爷">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>个人操作页面</title>
  <script type="text/javascript">
  function comfireDel(id,username){
	//询问是否删除
	if(window.confirm("确定删除?")){
		//跳转到PHP删除页面 news_del.php()
		location.href="news_del.php?id="+id;
	}
  } 
  </script>
 </head>
 <body>
 <?php
	include "header.php";
 ?>
 <a href="news_write.php?username=<?php echo $username;?>"><div width="100%" align="center" style="border:1px black solid;margin:30px auto;background:yellow;">添加新的表白！</div></a>
  <table  style="margin:50px auto;" width="80%" border="3" bordercolor="#ccc" rules="all" align="center" cellpadding="5">
  <tr bgColor="gray">
	<td align="center">表白主题</td>
	<td align="center">表白时间</td>
	<td align="center">表白点击率</td>
	<td align="center">表白内容</td>
	<td align="center">操作</td>
  </tr>
  <?php
  $n=1;
  while($arr=mysql_fetch_row($result)){
	  //偶数行添加背景色
	  if($n%2==0){
		echo "<tr bgColor='#fafafa'>\n";
	  }
	  else{
		echo "<tr>\n";
	  }
	  ?>
	<td align="center"><?php echo $arr[1]?></td>
	<td align="center"><?php echo @date('Y-m-d H-i-s',$arr[5])?></td>
	<td align="center"><?php echo $arr[4]?></td>
	<td align="center"><?php echo $arr[6]?></td>
	<td align='center' width="150"><a href='javascript:void(0)' onClick='comfireDel(<?php echo $arr[0]?>)'>删除</a></td>
  </tr>
<?php
	$n++;
	}
 ?>
  </table>
    <?php
	include "footer.php";
  ?>
 </body>
</html>
