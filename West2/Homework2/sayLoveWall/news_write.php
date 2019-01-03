<?php
 $author=$_GET['username'];
?>
<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>write</title>
 </head>
 <body>
<?php
	include "header.php";
?>
  <form method="post" action="write.php?author=<?php echo $author?>">
    <table width="500" border="1" bordercolor="#ccc" rules="all" align="center" cellpadding="5" style="margin:100px auto;">
	<tr>
	<th colspan="2" bgColor="#e0e0e0">写表白</th>
	</tr>
	<tr>
		<td>
			学校：<input type="text" name="school" required="required">
		</td>
		<td>
			标题：<input type="text" name="title" required="required">
		</td>
	</tr>
	<tr>
		<td colspan="2" align="center">
			<textarea name="text" style="display:block;width:500px;" rows="9" required="required"></textarea>
		</td>
	</tr>
	<tr>
		<td colspan="2" align="center">
			<input type="submit" id="login" name="login" value="发布">
			<input type="reset" id="reset" name="reset" value="重置">
		</td>
    </tr>
	</table>
  </form>
   <?php
	include "footer.php";
  ?>
 </body>
</html>
