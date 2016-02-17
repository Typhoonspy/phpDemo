<?php
     //接收数据
	 //$_REQUEST[''] 接收请求数据
	 
	 $num1 = $_REQUEST['num1'];
	 $num2 = $_REQUEST['num2'];
	 $oper = $_REQUEST['opType'];
	 $calresult = 0;

	 //echo $num1+';'+ $num2 +';' +$oper;
	 
	 switch ($oper) {
	 case "+":
	     $calresult = $num1 + $num2;
		 break;
	 case "-":
	     $calresult = $num1 - $num2;
		 break;	 
	 case "*":
	     $calresult = $num1 * $num2;
		 break;	 
	 case "/":
	     $calresult = $num1 / $num2;
		 break;	 
	 default:
	     $calresult = "运算符错误".$oper;
	 }	 
	 echo "页面计算".$calresult;
	 
	 
?>

     <br>
	 <a href="mycal.php"> 返回上一页 </a>