<html>
<head>
    <style>
body{
background: linear-gradient(to bottom, #33ccff 0%, #ff99cc 100%);
}
p{
font-family:monospace;
font-size:50px;
}
input{
width:200px;
height:50px;
border-radius:30px;
margin-left:400px;
}
input:hover{
background-color:green;
}
</style>
<body>
<p> Congrats you haved signed in succcessfully!!!<p>
    <p> PLEASE LOGIN TO PROCEED</p>
    <a href="http://localhost/algo/LOGIN.html"><input type="button" value=CLICK_HERE"></a>
    <?php
$user=$_POST["user"];

$pass=$_POST["pass"];
$mysql = mysqli_connect("localhost", "root")
or die("Can't connect to DB");
mysqli_select_db($mysql, "miniproject")
or die("Can't select DB");
mysqli_query($mysql, "insert into finaldatabase values('$user',' $pass')")
or die("Query failed to insert");
$result = mysqli_query($mysql,"select * from finaldatabase");
?>

</body>
</head>
</html>