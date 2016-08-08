<?php
$con=mysqli_connect("mysql6.000webhost.com","a8958712_us","laatujike2","a8958712_db");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM feedabck");

echo "<table border='1'>
<tr>
<th>name</th>
<th>email</th>
<th>message</th>
</tr>";

while($row = mysqli_fetch_array($result)){echo "<tr>";echo "<td>" . $row['name'] . "</td>";echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['message'] . "</td>";echo "</tr>";}
echo "</table>";

mysqli_close($con);
?>