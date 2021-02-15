<?php
if($_SERVER['REQUEST_METHOD']=='POST') {
    $_1 = $_POST['_1'];
    $_2 = $_POST['_2'];
    $_3 = $_POST['_3'];
    $_4 = $_POST['_4'];
    $_5 = $_POST['_5'];

	echo "$_1: ".$_1."<br>";
	echo "$_2: ".$_2."<br>";
	echo "$_3: ".$_3."<br>";
	echo "$_4: ".$_4."<br>";
	echo "$_5: ".$_5."<br>";
	
    define('HOST','athena');
	define('USER','cscadvisingform');
	define('PASS','egbagitj');
	define('DB','cscadvisingform');

	$con = mysqli_connect(HOST,USER,PASS,DB) or die('Connection failed');
	
	$sql = "INSERT INTO test VALUES('$_1', '$_2', '$_3', '$_4', '$_5')";
				
		if(!mysqli_query($con, $sql)) {
			echo 'Cannot insert CSc 133 into table';
		}
	mysqli_close($con);
} else {
    echo 'Error';
}
?>