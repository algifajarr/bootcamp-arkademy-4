<!DOCTYPE html>
<html>
<head>
	<title>Blog Gue</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

</body>
</html>

<nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="#">Algifajar</a>
		</div>
		<ul class="nav navbar-nav">
			<li class="active"><a href="#">Home</a></li>
			<li><a href="#">Page 1</a></li>
			<li><a href="#">Page 2</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
			<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
		</ul>
	</div>
</nav>

<div class="container">
	<div class="row">
		<div class="col-md-8 col-sm-12">
			<h1>Postingan</h1>
			<?php
			$con=mysqli_connect("localhost","root","","bootcamparka");

			if (mysqli_connect_errno())
			{
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}

			$sql="SELECT posts.title as postku, users.username as usernameku, comments.comment as komen FROM posts, users, comments WHERE posts.id=comments.postId and posts.createdBy=users.id";

			if ($result=mysqli_query($con,$sql))
			{

				while ($obj=mysqli_fetch_object($result))
				{
					?>
					<a href="#"><h1><?php echo $obj->postku; ?></h1></a>
					<p>User <?php echo $obj->usernameku; ?></p>
					<p>Komentar : <?php echo $obj->komen; ?></p>
					<?php
					// printf ("");
					// printf ($obj->postku);
					// printf ("<br/> Created by : ");
					// printf ($obj->usernameku);
					// printf ("<br/> Komentar : ");
					// printf ($obj->komen);
				}

				mysqli_free_result($result);
			}

			mysqli_close($con);
			?>
		</div>
		<div class="col-md-4">
			<h1>Widget</h1>
			<a href="https://facebook.com">Facebook</a><br/>
			<a href="https://google.com">Google</a><br/>
			<a href="https://twitter.com">Twitter</a>
		</div>
	</div>
</div>

