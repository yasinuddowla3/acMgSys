<?php require_once("../includes/functions.php"); ?>
<?php

if( isset($_POST['name'] ) ) { 
		if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			echo 'Invalid Email.';
		}
		else{
			set_utf8();
				$t = mysqli_query($connection  ,"UPDATE `party` SET name='{$_POST['name']}', 
					phone='{$_POST['phone']}', email='{$_POST['email']}',  
					address='{$_POST['address']}' where party_id={$_POST['party_id']}");
					
				if(!$t){
					echo mysqli_error($connection);
				}
				else
					echo "Updated Successfully.";
		}
		
}
else{
	echo "Invalid Access";
}

?>
