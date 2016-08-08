<?php
//"mysql6.000webhost.com","a8958712_us","laatujike2","a8958712_db"
$conn=mysql_connect("mysql6.000webhost.com","a8958712_us","laatujike2");
mysql_select_db("a8958712_db",$conn);

echo '<table>
<tr>
<td>name</td>
<td>email</td>
<td>message</td>
</tr>';
//$sql="SELECT * from feedback where sequence = '".$_GET["sequence"]."' ";
$sql="SELECT * from feedback";
$rs=mysql_query($sql,$conn) or die(mysql_error());
while($result=mysql_fetch_array($rs))
{
echo '<tr>
<td>'.$result["name"].'</td>
<td>'.$result["email"].'</td>
<td>'.$result["message"].'</td>
</tr>';
}
echo '</table>';
?>