<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];

    //echo 'Username: ',$username,'<br>Password: ',$password,'<br>';
    if($username == '' || $password == ''){
		// something is wrong
    }else{
        require_once('dbConnect.php');
        $sql = "SELECT * FROM Login2 WHERE username='$username' and password='$password'";

        $check = mysqli_fetch_array(mysqli_query($con,$sql));
        //echo 'sql: ',$check;

        if(isset($check)){
            $sql = "SELECT  admin_flag 
                    FROM Login2 
                    WHERE username='$username' and password='$password'";
			$result = mysqli_query($con, $sql);
			if (mysqli_num_rows($result) > 0) {
				while($row = mysqli_fetch_assoc($result)) {
					//global $course, $units, $semester, $grade, $notes;
					$admin_flag = $row["admin_flag"];
				}
			}
            // Redirect to Student Page

            if ($admin_flag==0) {
                $url = 'http://athena.ecs.csus.edu/~scubed/student_home.html';
                header("Location: $url");
                //$message = "wrong answer";
				//$value="Value: ".$value;
				//$value="hello world";
                //echo "<script type='text/javascript'>alert('admin_flag: $admin_flag');</script>";
				//echo "Value: ".$value."<br>";
            } else {
                // Redirect to Advisor Page
                $url = 'http://athena.ecs.csus.edu/~scubed/PHP/search_form2.php';
                header( "Location: $url" );
                //$value="Value: ".$value;
				//$value="hello world2";
                //echo "<script type='text/javascript'>alert('admin_flag: $admin_flag');</script>";
				//echo "Value: ".$value."<br>";
            }
        }else{
            $message = 'Wrong username or password.';
            echo "<SCRIPT>
            alert('$message');
            </SCRIPT>";
			
			$url = 'http://athena.ecs.csus.edu/~scubed/index.html';
            header( "Location: $url" );
        }

        mysqli_close($con);
    }
}else{
    echo 'Error';
}
?>