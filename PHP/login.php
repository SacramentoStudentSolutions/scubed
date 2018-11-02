<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];

    //echo 'Username: ',$username,'<br>Password: ',$password,'<br>';
    if($username == '' || $password == ''){
    }else{
        require_once('dbConnect.php');
        $sql = "SELECT * FROM Login2 WHERE username='$username' and password='$password'";

        $check = mysqli_fetch_array(mysqli_query($con,$sql));
        //echo 'sql: ',$check;

        if(isset($check)){
            $sql = "SELECT  admin_flag 
                    FROM Login2 
                    WHERE username='$username' and password='$password'";
            // Redirect to Student Page
            if ($sql==1) {
                $url = 'http://athena.ecs.csus.edu/~scubed/lower_division.html';
                header("Location: $url");
            } else {
                // Redirect to Advisor Page
                $url = 'http://athena.ecs.csus.edu/~scubed/lower_division.html';
                header( "Location: $url" );
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