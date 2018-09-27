var user;
var listings;
var currentPage = 0;
var listPerRow = 3
var listPerPage = listPerRow*2;
var row = 0;
var currentlyLoaded = 0;
var currentArray;
$(document).ready(function(){
	var width = (window.innerWidth > 0) ? window.innerWidth : screen.width;
	if(width <= 1220) listPerRow = 2;
	if(width <= 800) {
		listPerRow = 1;
		$("#logo").css("margin-left", "7.5%");
	}
	if(width <= 480){
		$(".castlesHeader").css("font-size", "3.5vh");
		$(".castlesHeader").css("margin-top", "1vh");
		$("#logo").css("margin-left", "7.5%");
	}

	$("header").prepend($("#dropdownMenuTemplate").html());
		var menuMode = 0;
		$("#content").click(function(){
			$("#menuContent").hide();
			$("#menuToggle").css("color", "blue");
			menuMode = 0;
		})
		$(".dropdownMenuDiv").click(function(){
			if(!menuMode) {
				$("#menuContent").show();
				$("#menuToggle").css("color", "blue");
				menuMode = 1;
			}
			else {
				$("#menuContent").hide();
				menuMode = 0;
				$("#menuToggle").css("color", "blue");
			}
		});
	
	$.ajax({
		url:"/CastlesMag/main/PHP/rental/getListings.php"
	}).done(function(output){
		listings = JSON.parse(output);
		listings = listings.filter(filterNull);
		listings = listings.filter(filterFeatured);
		splitImages(listings);
		currentArray = listings;
		setSearchResults(currentArray, "#content");
		jQuery(function($) {
			$('#content').on('scroll', function() {
				if($(this).scrollTop() + $(this).innerHeight() >= $(this)[0].scrollHeight) {
					setSearchResults(currentArray, "#content");
				}
			})
		});

	});

});

