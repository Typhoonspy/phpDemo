 phpdemo-doc-试试github怎么玩
<?php
phpinfo();
define ("CONS_STR",0.08);
$age = 23;
if ($age > 25)
{
	echo "age > 25";
}
else if ($age > 18)
{
	echo "25 <= age < 18";
}
else
{
	echo "age < 18";
}

echo "<br> end of line";

for ($i = 0;$i < 10;$i++)
{
	echo "<br>$i";
}

echo CONS_STR;

?>