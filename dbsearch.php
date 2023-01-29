<html>
<body bgcolor="aabbcc">
<?php
$search = $_POST["pass"];
$mysql= mysqli_connect("localhost","root") or
die(mysqli_error()); mysqli_select_db( $mysql,"miniproject");
$sql= "select * from finaldatabase where password like '%$search%' "
; $result= mysqli_query($mysql, $sql) ;
if(mysqli_num_rows($result) == 0)
header("Location: fail.php");

else { 
echo"<h1> successfully loggedin</h1>";
header("Location: success.php");
}
?>
</body>
</html>