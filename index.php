
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
  	
</div>
		
</body>
</html>
