
<?php
	require('connect.php');
    // If the values are posted, insert them into the database.
    if (isset($_POST['pid']) && isset($_POST['pname'])&& isset($_POST['price'])&& isset($_POST['qty'])&& isset($_POST['ptype'])){
        $pid = $_POST['pid'];
	    $pname = $_POST['pname'];
        $price = $_POST['price'];
		$qty = $_POST['qty'];
		$ptype = $_POST['ptype'];
		
	
 
        $query = "INSERT INTO `product` (pid, pname, price, qty, ptype) VALUES ('$pid', '$pname', '$price', '$qty', '$ptype')";
        $result = mysql_query($query);
        if($result){
            $smsg = "Product Added Successfully.";
			header('Location: success.php');
        }else{
            $fmsg ="Product is not added";
        }
    }
    ?>
