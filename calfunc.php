<?php
     //接收数据
	 //$_REQUEST[''] 接收请求数据
	 require 'func1.php';
	 $num1 = $_REQUEST['num1'];
	 $num2 = $_REQUEST['num2'];
	 $oper = $_REQUEST['opType'];
	 $calresult = 0;

	 //echo $num1+';'+ $num2 +';' +$oper;
	 
	 
	 $calresult = cal($num1,$num2,$oper);
	 
	 echo "函数计算".$calresult;
	 
	 
?>

     <br>
	 <a href="mycal.php"> 返回上一页 </a>