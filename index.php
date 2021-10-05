<?php 
  session_start(); 
  echo "session starts here in index page";

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
	<h2>Home Page</h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success'].'<br>'; 
			echo "You have logged in succesfully!!!";
			
			        require 'connection.php';
					$query="SELECT * FROM `users`";

					echo "You have logged in before query execution succesfully!!!";

					if($result=mysqli_query($linkk,$query))
					{
						echo "<br>Query executed<br>";
						
						 echo " ID        UserName        location  <br>";
						
						
						while($query_execute=mysqli_fetch_assoc($result))
						{
							echo '<table border="1" style="width:300px"><tr><td>'.$query_execute['id'].'</td><td>'.$query_execute['username'].'</td><td>'.$query_execute['location'].'</td><tr></table>';
						}
						
					}
					else{
						
						echo "<br>query is not ok";
					}


			
			
          	//unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>
		
</body>
</html>