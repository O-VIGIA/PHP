<?php
$url=@trim($_GET["url"]);
?>
<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>操作成功</title>
 </head>
 <body>
  <div style="padding:100px" width="100%" align="center">
  <p>操作成功</p>
  <p>系统将在<span id="time">5</span>秒后自动跳转</p>
  <p>或者点击<a href="<?php echo $url?>">这里</a>跳转</p>
  </div>
 </body>
</html>
<script language="javascript">
function changePage(num){
	//获取id=time元素对象
	var time=document.getElementById("time");
	time.innerHTML=num;
	if(--num>0){
		window.setTimeout("changePage("+num+")",1000);
	}
	else{
		location.href="<?php echo $url?>";
	}
}
changePage(5)
</script>