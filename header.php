<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Welcome!</title>
	<link rel="icon" href="images/icon.jpg">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>
<body>
	
	<header class="tm-header">
		<div class="tm-container">
			<img src="images/logo.jpg" alt="logo picture" width="80" class="tm-logo">
			<ul>
				<li><a href="index.php">Home</a></li>
			</ul>
			<nav class="tm-nav">
				<?php
					if(isset($_SESSION['u_id'])){
						echo '<form action="includes/logout.inc.php" method="POST">
									<button type="submit" name="submit">Logout</button>
							  </form>';
					}else{
						echo '<form action="includes/login.inc.php" method="POST">
									<input type="text" name="uid" placeholder="Username/email">
									<input type="password" name="pwd" placeholder="Password">
									<button type="submit" name="submit">Login</button>
							  </form>
							  <a href="signup.php">Sign Up</a>';
					}
				?>	
			</nav>
		</div>
	</header>