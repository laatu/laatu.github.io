<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

        <?php 
define('DB_HOST', 'sql200.byethost13.com'); 
define('DB_NAME', 'b13_18201075_d'); 
define('DB_USER', 'b13_18201075'); 
define('DB_PASSWORD', 'laatujike1'); 
     
$dbc = mysqli_connect('DB_HOST', 'DB_USER', 'DB_PASSWORD', 'DB_NAME') 
or die('Error connecting to MySQL server.'); 

//$query = "CREATE TABLE  `a9434067_d`.`feedback` (`name` VARCHAR( 50 ) NOT NULL ,`email` VARCHAR( 50 ) NOT NULL ,`message` VARCHAR( 50 ) NOT NULL"; 
$query = "CREATE TABLE  a9434067_d.feedback (name VARCHAR( 50 ) NOT NULL ,email VARCHAR( 50 ) NOT NULL ,message VARCHAR( 50 ) NOT NULL"; 
$data = mysqli_query($dbc, $query)        
or die ('Error getting data');

?>

        
  </body>
</html>
