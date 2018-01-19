<?php
require_once 'php_action/db_connect.php';

session_start();

if (isset($_SESSION['userId'])) {
    header('location: http://localhost/stocksystem/dashboard.php');
}

$errors = array();

if ($_POST) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if (empty($username) || empty($password)) {
        if ($username == "") {
            $errors[] = "Username is required";
        }
        
        if ($password == "") {
            $errors[] = "Password is required";
        }
    } else {
        $sql = "select * from users where username = '$username'";
        $result = $connect->query($sql);
        
        if ($result->num_rows == 1) {
            $password = md5($password);
            
            $mainSql = "select * from users where username = '$username' and password = '$password'";
            $mainResult = $connect->query($mainSql);
            
            if ($mainResult->num_rows == 1) {
                $value = $mainResult->fetch_assoc();
                $user_id = $value['user_id'];
                
                // set session
                $_SESSION['userId'] = $user_id;
                
                header('location: http://localhost/stocksystem/dashboard.php');
            } else {
                $errors[] = "Incorrect username/password combination";
            }
        } else {
            $errors[] = "Username doesnot exists";
        }
    }
    
} 

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
	<title>Stock Management System</title>
	<!-- bootstrap -->
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
	<!-- bootstrap theme -->
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap-theme.min.css" />
	<!-- custom css -->
	<link rel="stylesheet" href="custom/css/custom.css" />
	<!-- jquery -->
	<script type="text/javascript" src="assets/jquery/jquery.min.js"></script>
	<!-- jqueryui -->
	<script type="text/javascript" src="assets/jqueryui/jquery-ui.min.js"></script>
	<!-- bootstrap js -->
	<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
	<!-- font awesome -->
	<script defer src="assets/font-awesome/js/fa-brands.js"></script>
	<script defer src="assets/font-awesome/js/fa-solid.js"></script>
	<script defer src="assets/font-awesome/js/fa-regular.js"></script>
	<script src="assets/font-awesome/js/fontawesome.js"></script>
</head>
<body>

	<div class="container">
		<div class="row vertical">
			<div class="col-md-5 col-md-offset-4">
				<div class="panel panel-info">
					<div class="panel-heading">
						<h3 class="panel-title">Please Sign In</h3>
					</div>
                    <div class="panel-body">
                    	<div class="messages">
                    		<?php 
                    		if ($errors) {
                                foreach ($errors as $key => $value) {
                                    echo '<div class="alert alert-warning" role="alert">' .
                                            '<i class="fas fa-exclamation-circle"></i> ' . $value .
                                         '</div>';
                                }
                            }
                            ?>
                    	</div>
						<form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="loginForm">
                            <div class="form-group">
                                <label for="username" class="col-sm-3 control-label">Email</label>
								<div class="col-sm-9">
                                    <input type="text" class="form-control" id="username" placeholder="Username" name="username">
								</div>
                            </div>
                            <div class="form-group">
                                <label for="username" class="col-sm-3 control-label">Password</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                                </div>
                            </div>
                            <div class="form-group">
                            	<div class="col-sm-offset-3 col-sm-9">
                                    <button type="submit" class="btn btn-default"><i class="fas fa-sign-in-alt"></i> Sign In</button>
                            	</div>
                            </div>
                        </form>
                    </div>
                </div>
			</div>
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
	
</body>
</html>