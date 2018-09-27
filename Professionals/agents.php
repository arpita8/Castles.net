<?php
    $db_host = "localhost";
    $db_user = "xfmkwpty_app921";
	$db_pass = "fTLe$,e=}T^e";
	$db_name = "xfmkwpty_app921";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}

$sql = 'SELECT DISTINCT broker, country, state, city FROM listings_table ORDER BY broker ASC';
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
?>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    
	<title>Castles Professionals</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	
	<script type="text/javascript" src="/CastlesMag/LIBS/jquery.js"></script>
	<script type="text/javascript" src="/CastlesMag/LIBS/jqueryUI.js"></script> 
	<script type="Text/javascript" src="/CastlesMag/LIBS/jqueryUIMobile.js"></script>
	<link rel="shortcut icon" type="image/x-icon" href="/CastlesMag/IMAGES/internal/favicon.png"> 
	<!--<script type="text/javascript" src="searchDisplayHandler.js"></script>-->
	<link rel="stylesheet" href="/CastlesMag/LIBS/jqueryUIstyles.css">
	<link rel="stylesheet" href="/CastlesMag/CSS/searchstyles.css">
	<!--<script type="text/javascript" src="/CastlesMag/main/JS/functions.js"></script>-->
	


  
	 <style>
	
		body {
			font-size: 15px;
			color: #343d44;
			font-family: Times New Roman", Times, serif;
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
		
		#search{
		    margin-top:100px;
		    width:50%;
		    text-align:center;
		    margin-left:80px;
		}
		.dropbtn {
    background-color: #172651;
    color: white;
    font:Times;
    font-size: 20px;
    border: none;
}

.dropdown:hover {
	background-color: blue;
    position: relative;
    display: inline-block;

}
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #172651;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: white;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #ddd}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: blue;
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
						    <li><a href="https://castlesmag.com/castles-luxury-index/">Castles<sup>&reg;</sup> Luxury Index</a></li>
						
						</ul>
						
					</nav>
				</div>
				</div>
				</div>
				</div>
		
		
	</header>
	
	        
    <div id=search>
    <form action=" " method="POST">
        <center>
        <table>
        <tr>
    	<td><input type="text" name="name" size="100" placeholder = "Search Members"></td>
    	<td><input type="submit" name="submit"></td>
        </tr>
        </table>
        </center>
    </form>
    </div>	
    <div style = "margin-right:20%;">
       <center>
			<label for="countrySelector">Country: </label> 
  			<select style="width:20%" name="country" id="countrySelector"></select></br>
		
		
			<label for="stateSelector">State: </label> 
  			<select style="width:20%;" name="state" id="stateSelector"></select></br>
	

			<!--<label for="citySelector">City: </label>-->
			<!--<input style="width:20%" type="text" name="city" id="citySelector">-->
    </center>
    </div>
    <script>
        //Country
            $(function(){
            var countries = [ "Any","United States","Anguilla","Antigua&Barbuda","Argentina","Aruba","Australia","Austria","Bahamas","Belgium","Belize","Bermuda","Brazil",
            "Canada","Cayman Islands","Colombia","Costa Rica","Dominica","Dominican Republic","France","Germany",
            "Grenada","Hong Kong","Hungary","Ireland","Israel","Italy","Latvia","Maldives","Mauritius","Mexico",
            "Monaco","Montegro","NetherLand","New Zealand","Nicaragua","Panama","Peru","Poland","Portugal","Russia",
            "Singapore","South Africa","Spain","St. Barta","St. Lucia","St.Martin","Sweden","Switzerland",
            "Thailand","Turkey","Turks and Caicos","United Arab Emirates","United Kingdom"];
        		createDropdown(countries, "#countrySelector");
        });
        //state
        
        $( function() {
          var states = ['Any', 'International',"AL", "AK", "AZ", "AR", "CA", "CO", "CT", "DE", "FL", "GA", "HI", "ID", "IL", "IN", "IA", "KS", "KY", "LA", "ME", "MD", "MA", "MI", "MN", "MS", "MO", "MT", "NE", "NV", "NH", "NJ", "NM", "NY", "NC", "ND", "OH", "OK", "OR", "PA", "RI", "SC", "SD", "TN", "TX", "UT", "VT", "VA", "WA", "WV", "WI", "WY"];
          createDropdown(states, "#stateSelector");        
        } );
        
        
        //Dropdown
        function createDropdown(array, location){
          for(var i = 0; i < array.length; i++){
            $(location).append("<option value='" + array[i] + "'>" + array[i] + "</option>");
          }
        //   $(location).selectmenu().selectmenu( "menuWidget" ).addClass( "overflow" );
        }
    </script>

		<div>
		<table class="data-table">
		<caption class="title"><h1>Members</h1></caption>
		<thead>
			<tr>
			    <th>Number</th>
				<th>Name</th>
				<th>Country</th>
				<th>State</th>
				<th>City</th>
				
			</tr>
		</thead>
		<tbody>
		<?php
		$no 	= 1;
		$total 	= 0;
		while ($row = mysqli_fetch_array($query))
		{
			$amount  = $row['amount'] == 0 ? '' : number_format($row['amount']);
			echo '<tr>
					<td>'.$no.'</td>
					<td>'.$row['broker'].'</td>
					<td>'.$row['country'].'</td>
					<td>'.$row['state'].'</td>
					<td>'.$row['city'].'</td>
					
				</tr>';
			$total += $row['amount'];
			$no++;
		}?>
		</tbody>
		
	</table>
	</div>
	
	
	</div>

	
</body>
</html>