
<?php
	if(isset($_GET['controller'])&&isset($_GET['action'])){
		$controller = $_GET['controller'];
		$action = $_GET['action'];
	}else{
		$controller = 'pages';
		$action = 'home';
	}
?>

<style>
	a:link {
	text-decoration: none;
	}
	a:visited {
	text-decoration: none;
	}
	a:hover {
  	text-decoration: underline;
	}
</style>
<html>
	<head>
		<title>Group 2</title>
		<link rel="icon" href="./images/submarine.png"> 
	</head>
	<body style="margin:0;padding: 0;background-color: whitesmoke;font-family:verdana; position: relative;" >
		<header style = "text-align: center;background-color: #324960; position: sticky;top: 0; opacity: 95%;padding: 5px;">
			<a href = "?controller=pages&action=home" style="color: white;
			font-size: 24px;font-weight: 600;padding: 15px ;">HOME</a>
			<a href = "?controller=submarine&action=index"style="color: white;padding: 15px; font-size: 20px;display: inline-block;">SUBMARINE</a>
			<a href = "?controller=submarineClass&action=index"style="color: white;padding: 15px; font-size: 20px;display: inline-block;">CLASS</a>
			<a href = "?controller=submarineGeneration&action=index"style="color: white;padding: 15px; font-size: 20px;display: inline-block;">GENERATION</a>
			<a href = "?controller=company&action=index"style="color: white;padding: 15px; font-size: 20px;display: inline-block;: none;">COMPANY</a>
			<a href = "?controller=project&action=index"style="color: white;padding: 15px; font-size: 20px;display: inline-block;">PROJECT</a>
			<a href = "?controller=conclude&action=index"style="color: white;padding: 15px; font-size: 20px;display: inline-block;">CONCLUDE</a>
		</header>
			<div style="background-color: whitesmoke;text-align: center;">
					<center>
						<?php require_once("routes.php"); ?>
						<br>
						<?php echo "controller = ".$controller.",action = ".$action?>
						</center>
				
			</div>
			<footer style="padding: 15px;text-align: center;font-size: 14;">
					<p>My name is Pisitpong Phochai,Student is 6120503951,Group 2,Part 2</p></p>
					<p>CopyRight</p>
				</footer>
	</body>
</html>
