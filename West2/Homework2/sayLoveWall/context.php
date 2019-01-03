<?php
//包含连接MySQL的文件
include "cont.php";
//分页的相关变量
//每页显示的条数
$pagesize=5;
//获取地址栏中传递的page参数
if(empty($_GET["page"])){
	$page=1;
	$startrow=0;
}
else{
	$page=$_GET["page"];
	$startrow=($page-1)*$pagesize;
}
//执行查询的sql语句
$sql1="select * from news";
$result=mysql_query($sql1);
if(!$result){
	echo "查询数据失败！";
	exit();
}
//echo "查询数据成功！<br>";
//总记录数和总页数
$records=mysql_num_rows($result);
$pages=ceil($records/$pagesize);
//构建并执行分页的sql语句
$sql="select * from news limit $startrow,$pagesize";
$result=mysql_query($sql);
?>
<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Love News</title>
 </head>
 <style type="text/css">
	.pagelist{
		height:40px;
		line-height:40px;
	}
	.pagelist a{
		border:1px solid #ccc;
		background-color:#f0f0f0;
		padding:3px 10px;
		margin:0px 3px;
	}
	.pagelist span{background:red;padding:3px 10px;}
 
 </style>
 <body>
 <?php 
 include "header.php";
 ?>
 <div width="100%" border="3" height="120" align="center"><h1><font color="puiple" face="楷体">表白墙</font></h1></div>
  <table width="100%" border="3" bordercolor="#ccc" rules="all" align="center" cellpadding="5">
  <tr bgColor="gray">
	<th>编号</th>
	<th>标题</th>
	<th>作者</th>
	<th>学校</th>
	<th>点击率</th>
	<th>内容查看</th>
	<th>发布日期</th>
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

		<td align='center'><?php echo $arr[0]?></td>
		<td align='center'><?php echo $arr[1]?></td>
		<td align='center'><?php echo $arr[2]?></td>
		<td align='center'><?php echo $arr[3]?></td>
		<td align='center'><?php echo $arr[4]?></td>
		<td align='center'><a href="news_message.php?id=<?php echo $arr[0]?>">内容</a></td>
		<td align='center'><?php echo @date('Y-m-d H-i-s',$arr[5])?></td>
		</tr>
<?php
	$n++;
	}
  ?>
  <tr>
	<td colspan="7" align="center" class="pagelist">
		<?php
			$pre=$page-3;
			$next=$page+3;
			if($pre<1){$pre=1;}
			if($next>$pages){$next=$pages;}
			for($i=$pre;$i<=$next;$i++){
				//当前页无链接
				if($i==$page){
					echo "<span>$i</span>";
				}
				else{
					echo "<a href='context.php?page=$i'>$i</a>";
				}
			
			}
		?>
	</td>
  </tr>
  </table>
  <?php
	include "footer.php";
  ?>
 </body>
</html>