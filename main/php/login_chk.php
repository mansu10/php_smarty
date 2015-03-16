

<?php

#require('config.php');
require('./conn/db.class.php');
$conn = new ConnDB();
if ( isset( $_POST['user'] ) &&  isset( $_POST['pwd'] ) ) {
	$username = $_POST['user'];
	$password = $_POST['pwd'];
}


if (empty($username)||empty($password)) {
	echo "empty(var)";
}

$sql = "select * from tbluser where name='".$username."' and password='".$password."'";

$query = $conn->getone($sql);
if ($query['state']==1) {
	session_start();
	$_SESSION['username'] = $username;
	$url = "/php/admin_index.php";
	Header("Location: ".$url);

}else if($query['state']==0) {
		$url = "/login.php";
	Header("Location: ".$url);
}else{

}
?>