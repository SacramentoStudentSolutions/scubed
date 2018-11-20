<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
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
                $url = 'http://athena.ecs.csus.edu/~scubed/branch/advising_form.html';
                header("Location: $url");
                //$message = "wrong answer";
				//$value="Value: ".$value;
				//$value="hello world";
                //echo "<script type='text/javascript'>alert('admin_flag: $admin_flag');</script>";
				//echo "Value: ".$value."<br>";
            } else {
                // Redirect to Advisor Page
                $url = 'http://athena.ecs.csus.edu/~scubed/branch/php/advisor_search.php';
                header( "Location: $url" );
                //$value="Value: ".$value;
				//$value="hello world2";
                //echo "<script type='text/javascript'>alert('admin_flag: $admin_flag');</script>";
				//echo "Value: ".$value."<br>";
            }
        }else{
            $message = 'Wrong username or password.';
            ?>
            <body>

            <div class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">Modal title</h4>
                        </div>
                        <div class="modal-body">
                            <p>One fine body…</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
            <?php
			//$url = 'http://athena.ecs.csus.edu/~scubed/branch/index.html';
            //header( "Location: $url" );
        }

        mysqli_close($con);
    }
}else{
    echo 'Error';
}
?>

</body>
</html>

