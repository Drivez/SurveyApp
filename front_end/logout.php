<?php
        session_start();
	setcookie("Staff","",time()-3600);
	unset($_COOKIE["Staff"]);
        unset($_SESSION['User']);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Redirect...</title>
</head>

<body style="font-family:Arial, Helvetica, sans-serif; font-size:12px;">
Click <a href="index.php">Here</a> to login in again.
</body>
</html>
