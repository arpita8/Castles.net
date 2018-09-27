<?php
    $db_host = "localhost";
    $db_user = "xfmkwpty_app921";
	$db_pass = "fTLe$,e=}T^e";
	$db_name = "xfmkwpty_app921";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}

?>
<html>
    <head><meta http-equiv="Content-Type" content="text/html; charset=euc-jp">
    
	<title>Castles Professionals</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	
	<script type="text/javascript" src="/CastlesMag/LIBS/jquery.js"></script>
	<script type="text/javascript" src="/CastlesMag/LIBS/jqueryUI.js"></script> 
	<script type="Text/javascript" src="/CastlesMag/LIBS/jqueryUIMobile.js"></script>
	<link rel="shortcut icon" type="image/x-icon" href="/CastlesMag/IMAGES/internal/favicon.png"> 
	<!--<script type="text/javascript" src="searchDisplayHandler.js"></script>-->
	<link rel="stylesheet" href="/CastlesMag/LIBS/jqueryUIstyles.css">
	<link rel="stylesheet" href="/CastlesMag/CSS/searchstyles.css">

    <style>
        
	
		body {
			font-size: 15px;
			color: #343d44;
			font-family: "Times New Roman", Times, serif;
			padding: 0;
			margin: 0;
			
		}
		table {
			margin: auto;
			font-family: "Times New Roman", Times, serif;
			font-size: 12px;
		}

		h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
		}

		table td {
			transition: all .5s;
		}
		
		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}

		.data-table th, 
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: #172651;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: right;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}
        .data-Table{
           
            padding: 120px;
            border: none;
            margin-top: 5px;
        }
		/* Table Footer */
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: right;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
		
			.hidden{
				   display:none;
				}
			</style>
    
</head>

<body>
    <header>
		<header  id="fh5co-header" role="banner">
		
		<div class="container">
			<div class="row">
		    <div class="header-inner" background="white">
				<div class="header-inner" background="white">
					<img src="/CastlesMag/IMAGES/internal/favicon.jpg" width="200" height="80"><a href="index.html"><span></span></a>
					<nav role="navigation">
						<ul>
							<li><a href="http://castles.net/">Home</a></li>
                            <li>
                            <div class="dropdown">
  							<button class="dropbtn">Properties</button>
  						    <div class="dropdown-content">
   						    <a href="https://app.castlesmag.com/CastlesMag/search/">For Sale</a>
    						<a href="https://app.castlesmag.com/CastlesMag/rental/">For Rent</a>
					        </div>
					        </div>
                            </li>
							<li><a href="https://app.castlesmag.com/CastlesMag/Professionals/">Professionals</a></li>
							<li><a href="https://issuu.com/castlesmag">Magazine</a></li>
							<li><a href="https://castlesmag.com/blog/">Blog</a></li>
						    <li><a href="https://castlesmag.com/castles-luxury-index/">Castles<sup>®</sup> Luxury Index</a></li>
						
						</ul>
						
					</nav>
				</div>
				</div>
				</div>
				</div>
		
		
	</header>
	
<div>
		<table class="data-table">
		<caption class="title"><h1>Members</h1></caption>
		<thead>
			<tr>
			    <!--<th>Number</th>-->
				<th>Name</th>
				<th>Country</th>
				<th>State</th>
				<th>City</th>
				
			</tr>
		</thead>
		<tbody>

<?php
	if(isset($_POST['submit'])){
		$search = mysqli_real_escape_string($conn,$_POST['broker']);
		$sql = "SELECT * FROM listings_table";
    // 	$sql = "SELECT * FROM listings_table WHERE 1";
		$result = mysqli_query($conn, $sql);
		$queryResult = mysqli_num_rows($result);
// 		echo "There are ".$queryResult." results";

		if ($queryResult > 0){
			while ($row = mysqli_fetch_assoc($result)){
			
				echo '<tr>
				
					<td>'.$row['broker'].'</td>
					<td>'.$row['country'].'</td>
					<td>'.$row['state'].'</td>
					<td>'.$row['city'].'</td>
					
					
				</tr>';
		    
			}

		}
		else{
			echo "There is no result matching your search!";
		}
	}

?>
</html>
