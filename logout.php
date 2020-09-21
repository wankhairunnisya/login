<?php
 	session_start();
 	session_destroy();
 	if(isset($_COOKIE['email']) and isset($_COOKIE['pass'])) {
 		$email = $_COOKIE['email'];
				$pass  = $_COOKIE['pass'];
 		setcookie('email', $email, time()+60+60+7);
				 setcookie('pass', $pass, time()-1);
	}
 	echo "You successfully logout. click here to <a href='login.php'> login again</a>";
?>