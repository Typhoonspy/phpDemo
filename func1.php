<?php
   //函数计算

	 
   function cal($num1,$num2,$oper)
   {$calresult = 0;

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
   return $calresult;};





?>