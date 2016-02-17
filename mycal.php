
<!DOCTYPE html PUBLIC '-//W3C//DTD HTML 4.01 Strict//EN' 'http://www.w3.org/TR/html4/strict.dtd'>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8"	/>
<title>计算器</title>

</head>	
<body>

<form action="calresult.php" method="post" name="page">
<table width = "300px" border = "1px">
<tr>页面计算</tr>
<tr><td>第一个数</td><td><input type="text" name="num1" /></td></tr>
<tr><td>第二个数</td><td><input type="text" name="num2" /></td></tr>
<tr><td>选择运算符</td>
<td>
<select name="opType" id="">
<option value="+">+</option>
<option value="-">-</option>
<option value="*">*</option>
<option value="/">/</option>
<option value="#">#</option>
</select>
</td>
</tr>

<tr><td colspan = 2 align = "center"><input type="submit" value = "算结果"/></td></tr>
<tr><td colspan = 2 align = "center"><input type="reset" value = "清除"/></td></tr>
</table>
</form>

<form action="calfunc.php" method="post" name="func">
<table width = "300px" border = "1px">
<tr>函数计算</tr>	
<tr><td>第一个数</td><td><input type="text" name="num1" /></td></tr>
<tr><td>第二个数</td><td><input type="text" name="num2" /></td></tr>
<tr><td>选择运算符</td>
<td>
<select name="opType" id="">
<option value="+">+</option>
<option value="-">-</option>
<option value="*">*</option>
<option value="/">/</option>
<option value="#">#</option>
</select>
</td>
</tr>

<tr><td colspan = 2 align = "center"><input type="submit" value = "算结果"/></td></tr>
<tr><td colspan = 2 align = "center"><input type="reset" value = "清除"/></td></tr>
</table>



</form>

</body> 

</html>