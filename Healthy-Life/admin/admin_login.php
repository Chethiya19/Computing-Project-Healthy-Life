<!DOCTYPE html>
<html>
<head>
	<title>Admin login</title>
	<link href="../Images/logo.png" rel="icon">
	<link rel="stylesheet" type="text/css" href="admin.css">
</head>
<body style="background-image: url(img/admin3.jpg);">
     <form action="login.php" method="post">
     	<h2>ADMIN LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">Login</button>
     </form>

</body>
</html>