
<?php
	require('connect.php');
    // If the values are posted, insert them into the database.
    if ( isset($_POST['pname'])){
	    $pname = $_POST['pname'];
       
 
        $query = "delete from `product` where pname = '$pname'";
        $result = mysql_query($query);
        if($result){
            $smsg = "Product Deleted Successfully.";
	header('Location: success.php');
        }else{
            $fmsg ="Product is not deleted";
        }
    }
    ?>
