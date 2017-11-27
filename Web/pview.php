<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Available Products</title>

	<link rel="shortcut icon"  href="gt_favicon.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="index.html"><div class="log">Re-Store</div></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
				<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Product <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="padd.html">Add Product</a></li>
						    <li><a href="pdel.html">Delete Product</a></li>
							<li><a href="pupdate.php">Update Product</a></li>
						</ul>
					</li>
					<li><a class="btn" href="logout.php">Logout</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

<br>
<br>
<br>
		

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3 class="thin text-center">Available Products</h3>
							<hr>
							
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
 <thead>
 <tr>
 <th>PID</th>
 <th>PName</th>
 <th>Price</th>
 <th>Quantity</th>
 <th>PType</th>
 </tr>
 </thead>
 <tbody>
 <tr>
 <?php
require('connect.php');
$query = "SELECT * FROM product";
$result=mysql_query($query) or die("Query Failed : ".mysql_error());
while($rows=mysql_fetch_array($result))
{
	echo"<td>".$rows['pid']."</td>";
	echo"<td>".$rows['pname']."</td>";
	echo"<td>".$rows['price']."</td>";
	echo"<td>".$rows['qty']."</td>";
	echo"<td>".$rows['ptype']."</td>";
	echo "</tr>";
}
mysql_close($conn);
?>						
</table>							
							
							
							
						</div>
					</div>

				</div>
				
			</article>
			<!-- /Article -->

		</div>
	</div>	<!-- /container -->
	<br>

    <br>
		<footer id="footer" class="top-space">

		<div class="footer1">
			<div class="container">
				<div class="row">

					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="text-left">
								Copyright &copy; 2016, <a href="#">Re-Store</a> 
							</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>

	</footer>	
			
		




	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
</body>
</html>