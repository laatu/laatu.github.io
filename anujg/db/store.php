<meta http-equiv="refresh" content="2;url=http://www.anujg.com/db/show1.php">

<?php
//    $data = json_decode(file_get_contents("php://input"));
//$name = mysql_real_escape_string($data->name);
//$email= mysql_real_escape_string($data->email);
//$message= mysql_real_escape_string($data->message);

//setTimeout(function () {window.location.href='http://www.anujg.com'; },2000); // 2 seconds


if ( ! empty($_POST['name']))
{$name = $_POST['name'];}
if ( ! empty($_POST['email'])){$email = $_POST['email'];}
if ( ! empty($_POST['message'])){$message = $_POST['message'];}
//$name="anuj";$email="ji";$message="hij";

//mysql_connect("mysql6.000webhost.com", "a8958712_us", "laatujike2") or die(mysql_error()); 
//mysql_select_db("a8958712_db") or die(mysql_error()); 


mysql_connect("sql200.byethost13.com", "b13_18201075", "laatujike1") or die(mysql_error()); 
mysql_select_db("b13_18201075_d") or die(mysql_error()); 
mysql_query("INSERT INTO feedback (name,email,message) VALUES ('$name', '$email','$message')"); 
//Print "Your information has been successfully added to the database.";
if(success)
{
   echo "<script type=\"text/javascript\">".
        "alert('success');".
        "</script>";
}

?>