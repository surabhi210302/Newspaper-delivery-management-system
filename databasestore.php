<html>
<head>
<title>database of customer</title>
</head>
<body>
<table border="2">
<tr>
<th>id</th>
<th>user_name</th>
<th> name</th>
<th>operation</th> 
</tr>

<?php
error_reporting(0);
include("db_con.php");
$query="SELECT * FROM USERS";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);



if($total!=0)
{
$result=mysqli_fetch_assoc($data);
while(($result=mysqli_fetch_assoc($data)))
{
echo"
<tr>
<td>".$result['id']."</td>
<td>".$result['user_name']."</td>
<td>".$result['name']."</td>
<td><a href='delete.php?mail=$result[email]'>delete</td>
</tr>
";
}
}
else{
echo"no records";
}
?>
</table>
</body>
</html>