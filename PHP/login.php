<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];

    //echo 'Username: ',$username,'<br>Password: ',$password,'<br>';
    if($username == '' || $password == ''){
    }else{
        require_once('dbConnect.php');
        $sql = "SELECT * FROM Login WHERE username='$username' and password='$password'";

        $check = mysqli_fetch_array(mysqli_query($con,$sql));
        //echo 'sql: ',$check;

        if(isset($check)){
            $url = 'http://athena.ecs.csus.edu/~scubed/lower_division.html';
            header( "Location: $url" );
        }else{
            $message = 'Incorrect password or username.';

            echo "<SCRIPT>
            alert('$message');
            </SCRIPT>";
        }

        mysqli_close($con);
    }
}else{
    echo 'Error';
}
?>