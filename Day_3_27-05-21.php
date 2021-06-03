<?php
echo "<table  border='2'>";
$a = 3;
for($a=0;$a<100;$a++)
{
            echo"<tr>";
            if($a%3==0){
            echo"<td bgcolor='red'>$a</td>";
            }
else{
            echo"<td bgcolor='yellow'>$a</td>";
            }
            echo"</tr>";
}
echo "</table>";
?>