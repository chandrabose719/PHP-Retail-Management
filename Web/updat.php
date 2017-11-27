
<?php
	require('connect.php');
    // If the values are posted, insert them into the database.
if(isset($_POST['val']))
{
$field=$_POST['getval'];
$val=$_POST['val'];
$pid=$_POST['pid'];
echo "$field,$val,$pid";
$query2 = "UPDATE product SET $field='$val' WHERE pid='$pid'";
$result2=mysql_query($query2) or die("Query Failed : ".mysql_error());
$smsg = "Product Updated Successfully.";
header('Location: success.php');	
}
?>

