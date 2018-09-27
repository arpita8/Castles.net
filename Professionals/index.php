<?php
    $db_host = "localhost";
    $db_user = "xfmkwpty_app921";
	$db_pass = "fTLe$,e=}T^e";
	$db_name = "xfmkwpty_app921";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}

$sql = 'SELECT DISTINCT broker, country, state FROM listings_table ORDER BY broker ASC';
		
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
	<script type="text/javascript" src="searchDisplayHandler.js"></script>
	<link rel="stylesheet" href="/CastlesMag/LIBS/jqueryUIstyles.css">
	<link rel="stylesheet" href="/CastlesMag/CSS/searchstyles.css">
	<script type="text/javascript" src="/CastlesMag/main/JS/functions.js"></script>
	<script type="text/javascript" src="/CastlesMag/search/jqueryUIHandler.js"></script>
	
<script>
	
	function myFunction() {
    	document.getElementById("myDropdown").classList.toggle("show");
	}
		window.onclick = function(event) {
  			if (!event.target.matches('.dropbtn')) {
    		var dropdowns = document.getElementsByClassName("dropdown-content");
    		var i;
    		for (i = 0; i < dropdowns.length; i++) {
     			 var openDropdown = dropdowns[i];
      			if (openDropdown.classList.contains('show')) {
        			openDropdown.classList.remove('show');
      			}
    		}
  		}
	}
</script>
  <script>

jQuery(document).ready(function(){

jQuery(".fh5co-nav-toggle").click(function(){
jQuery("ul.menu").slideToggle("slow");
});

jQuery(".mobile-filter").click(function(){
jQuery(".show-mobile").slideToggle("slow");
});

jQuery(".searchButton").click(function(){
jQuery(".show-mobile").slideToggle("slow");
});

jQuery(".show-close").click(function(){
jQuery(".show-mobile").slideToggle("slow");
});

});

</script>

  
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
		
	</style>
  
	
</head>

<body>
	<header  id="fh5co-header" role="banner">
		
		<div class="container">
			<div class="row">
		    <div class="header-inner" background="white">
				<div class="header-inner" background="white">
				<a href="http://castles.net/"><img src="/CastlesMag/IMAGES/internal/favicon.png" width="200" height="80"><span></span></a>
					<nav role="navigation">
					    <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle "><i class="fa-bars"></i></a>
						<ul class="menu">
							<li><a href="http://castles.net/">Home</a></li>
                            <li>
                            <div class="dropdown">
  							<button class="dropbtn">Properties</button>
  						    <div class="dropdown-content">
   						    <a href="https://app.castlesmag.com/CastlesMag/search/">For Sale</a>
    						<a href="https://app.castlesmag.com/CastlesMag/rental/">For Rent</a>
    						<a href="https://app.castlesmag.com/CastlesMag/auction/">Auction</a>
					        </div>
					        </div>
					        </li>
					        <li>
					        <div class="dropdown">
  							<button class="dropbtn">Professionals</button>
  						    <div class="dropdown-content">
   						    <a href="https://app.castlesmag.com/CastlesMag/Professionals/">Members</a>
    						<a href="https://app.castlesmag.com/CastlesMag/Professionals/">Agents</a>
					        </div>
					        </div>
                            </li>
                            
                            <li>
					        <div class="dropdown">
  							<button class="dropbtn">News</button>
  						    <div class="dropdown-content">
   						    <a href="https://castlesmag.com/blog/" target="_blank">Blog</a>
    						<a href="https://castlesmag.com/castles-luxury-index/" target="_blank">Castles Luxury Index<sup>&trade;</sup></a>
					        </div>
					        </div>
                            </li>
                            <li>
					        <div class="dropdown">
  							<button class="dropbtn">About</button>
  						    <div class="dropdown-content">
   						    <a href="https://issuu.com/castlesmag" target="_blank">Magazines</a>
    						<a href="#">Partners</a>
    						<a href="#">Real Estate Awards</a>
    						<a href="https://castlesmag.com/castles-magazine-contact/" target="_blank">Contact Us</a>
					        </div>
					        </div>
                            </li>
                            <li><a href="https://app.castlesmag.com/CastlesMag/login/index.html">Login</a></li> 
							<li><a href="http://castles.net/Join.html">Join</a></li>
							
						
						</ul>
						
					</nav>
				</div>
				</div>
				</div>
				</div>
		
		
	</header>

	
	        
	<div id="mainWrap">
		 
		<div class="controllerDiv show-mobile" id="paramControl">
		    <p class="show-close">Close</p>
		<h2>Castles<sup><span style="font-size:8px">&trade;</span></sup> Professionals</h2>
		<p>
		    
       
     <?php
        //Check if search data was submitted
        if ( isset( $_GET['s'] ) ) {
          // Include the search class
          require_once( dirname( __FILE__ ) . '/class-search.php' );
          
          // Instantiate a new instance of the search class
          $search = new search();
          
          // Store search term into a variable
          $search_term = htmlspecialchars($_GET['s'], ENT_QUOTES);
          
          // Send the search term to our search class and store the result
          $search_results = $search->search($search_term);
    }
    ?>
<!DOCTYPE html>
<html>
  <head>
    <!--<title>Search</title>-->
  </head>
              <body>
                <!--<h1>Search</h1>-->
                <div class="search-form">
                  <form action="" method="get">
                    <div class="form-field">
                      <input type="search" name="s" placeholder="Search" results="5" value="<?php echo $search_term; ?>">
                      <input type="submit" value="Search">
                    </div>
                  </form>
                </div>
               <?php
            		$no 	= 1;
            		$total 	= 0;
            		while ($row = mysqli_fetch_array($search_results))
            		{
            			$amount  = $row['amount'] == 0 ? '' : number_format($row['amount']);
            			echo '<tr>
            					<td>'.$no.'</td>
            					<td>'.$row['broker'].'</td>
            					<td>'.$row['country'].'</td>
            					<td>'.$row['state'].'</td>
            					
            				</tr>';
            			$total += $row['amount'];
            			$no++;
            		}?>
                <?php if ( $search_results ) : ?>
                <div class="results-count">
                  <p><?php echo $search_results['count']; ?> results found</p>
                </div>
                <div class="results-table">
                  <?php foreach ( $search_results['results'] as $search_result ) : ?>
                  <div class="result">
                    <p><?php echo $search_result->title; ?></p>
                  </div>
                  <?php endforeach; ?>
                </div>
                <div class="search-raw">
                 <pre><?php print_r($search_results); ?></pre>
                 
                </div>
                <?php endif; ?>
              </body>
</html>
       
       
   
       	</p>
		<p>
			<label for="countrySelector">Country: </label> <br />
  			<select style="margin-left:5%;margin-right:5%;margin-top:2.5%;width:90%" id="countrySelector"></select>
		</p>

		<p>
			<label for="stateSelector">State: </label> <br />
  			<select style="margin-left:5%;margin-right:5%;margin-top:2.5%;width:90%;" id="stateSelector"></select>
		</p>

	
		
		
                <script type="text/template" id="searchTemplate">
                	<input type="text" placeholder="Keyword Search" background-color: "#fafafa" style="margin: 2vw 3vh" id="searchBar"/>
                	<input type="submit" value="Search" id="submitKeywordSearch" onclick="processKeyword('#contentControl')"/>
                	<button onclick='showAllResults()' id="showAllButton">Show All</button>
                	<input type="hidden" id="searchType" value="0"/> 
                
                </script>
        
        		</p>
        
        		<center>
        		<button class="searchButton" id="applyParams"style="Width:100%">Apply </button>
                </center>
        		</div>


        		<div class="controllerDiv" id="contentControl">
        			<table class="data-table">
        		<caption class="title">
        		<div class="mobile-filter">
		     <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAH6SURBVGhD7dhNSBRhHMfxLbNDgiChENglj5oiIh0tRDQhvCjkwY6Bl0JExIsgXkIQoksgiEdRDyIIHaUuQb6FICqCGEKdSg8aIpZ+fzIDD+6DuLXr7lP/L3yQHWbwmd15eWYSlmVZ1rnyo7/BVo95HOEHRlGCoGrGMU5wGP2VFRQgo+WhKE1WoYH34wZKsRgt64Zvm1QVwts64m8uHb7BrQW+9f6GvpSkpqFjOR30T3ZxE3Ed0HIdar5tUvUVT5HR5qBBj6MCj7ETLdMOBdN97EEDd81A52JQ3cMIdKV6jxdwDzXLsqx/p+u4i1tnnwLtJb5D951fmEBws2bNnbQDv7GFg+iz7kWXvgfdRk0WPYDmZ5r+N0EVYxnamR6461fCO0vQbFUbZNtHuD2Hbz0ZQFJvsJBFn6HBbUPPMHGD0HJNOt31tcONyMmWoEFPoQFdiM+TagSTZs06TzRwl/cQyvXu4BXeYQyPYFmW9efpTWEtdKl0b1xBpemCe53fxEMEVTs0eM1MP2Ej+qw7bzlypjK0XWANGvgzqGt4Cy2bhW+bTHoC74OX74XaeT+hp7e4KvjWuypDSKoXkxfYhzbWLxcXv8/9At82maTXsXqGSbnX0KB1gneiD/Gv2Ipg0vH4ARq4S88xwaXzQ1cvneTDqINlWZb1v5ZInAK4U0vL3/i2vAAAAABJRU5ErkJggg==">
		     </div>
		     <h1>Members</h1>
		     </caption>
        		<thead>
        			<tr>
        			    
        				<th>Name</th>
        				<th>Country</th>
        				<th>State</th>
        				
        			</tr>
        		</thead>
        		<tbody>
        		    <center>
        		<?php
        		$no 	= 1;
        		$total 	= 0;
        		while ($row = mysqli_fetch_array($query))
        		{
        			$amount  = $row['amount'] == 0 ? '' : number_format($row['amount']);
        			echo '<tr>
        					
        					<td>'.$row['broker'].'</td>
        					<td>'.$row['country'].'</td>
        					<td>'.$row['state'].'</td>
        					
        				</tr>';
        			$total += $row['amount'];
        			$no++;
        		}?>
        		
        		</tbody>
        		
        	</table>
        	</div>
        	
        	
        	</div>
        
        	
        	<div>
	
</body>
</html>