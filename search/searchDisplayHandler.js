var user;
var listings;
var currentPage = 0;
var listPerRow = 3;
var listPerPage = listPerRow*2;
var row = 0;
var currentlyLoaded = 0;
var currentArray;
$(document).ready(function(){
	var width = (window.innerWidth > 0) ? window.innerWidth : screen.width;
	if(width <= 1220) listPerRow = 2;
	if(width <= 600) {
		listPerRow = 1;
		$("#contentControl").css("width", "80vw");
		$("#paramControl").css("width", "35vw");
		$("#logo").css("margin-left", "6.5%");
	}
	if(width <= 400){
	    listPerRow = 1;
	    $("#contentControl").css("width", "82vw");
		$("#paramControl").css("width", "35vw");
		$("#logo").css("margin-left", "3.5%");
		$(".castlesHeader").css("font-size", "3.5vh");
		$(".castlesHeader").css("margin-top", "1vh");
		$("#logo").css("margin-left", "7.5%");
	}
	$("#applyParams").click(function(){
		$("#contentControl").html("");
		currentArray = filterListings(listings);
		row = 0;
		currentlyLoaded = 0;
		setSearchResults(currentArray, "#contentControl");

	});

	$("header").prepend($("#dropdownMenuTemplate").html());
	var menuMode = 0;
	$(".controllerDiv").click(function(){
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
			$("#menuToggle").css("color", "grey");
		}
	});

	$.ajax({
		url:"/CastlesMag/main/PHP/listing/getListings.php"
	}).done(function(output){
		listings = JSON.parse(output);
		listings = listings.filter(filterNull);
		listings = listings.filter(filterActive);
		splitImages(listings);
		currentArray = listings;
		setSearchResults(currentArray, "#contentControl");
		$( function() {
		    var countries = getCountries(currentArray);
		    createDropdown(countries, "#countrySelector");
		  } ); //have to put it here since 
		jQuery(function($) {
			$('#contentControl').on('scroll', function() {
				if($(this).scrollTop() + $(this).innerHeight() >= $(this)[0].scrollHeight) {
					setSearchResults(currentArray, "#contentControl");
				}
			})
		});

	});

});

