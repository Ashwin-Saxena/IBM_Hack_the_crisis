<?php
$db=new mysqli('localhost','root','','project');
$sql1="select name,address,h_name from p where name ='{$_GET['id']}'";
$q=mysqli_query($db,$sql1);
$s=mysqli_fetch_row($q);
echo"{$s[1]}";
$sql="insert into d values ('{$s[0]}','{$s[1]}','{$s[2]}')";
$sql2="delete from p where name ='{$s[0]}'";
if($db->query($sql))
{
	if($db->query($sql2))
	{
		echo "<script>window.open('update.php?mes=Record added successfully.','_self')</script>";
	}
}
?>