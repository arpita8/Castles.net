var listing;
var interval;
var time = 5000;
$(document).ready(function(){

	$("header").prepend($("#dropdownMenuTemplate").html());
	var menuMode = 0;
	$("#wrap").click(function(){
		$("#menuContent").hide();
		$("#menuToggle").css("color", "grey");
		menuMode = 0;
	});
	$(".dropdownMenuDiv").click(function(){
		if(!menuMode) {
			$("#menuContent").show();
			$("#menuToggle").css("color", "grey");
			menuMode = 1;
		}
		else {
			$("#menuContent").hide();
			menuMode = 0;
			$("#menuToggle").css("color", "grey");
		}
	});
	var price = $("#priceDisplay").html();
	price = displayPrice(price);
	$("#priceDisplay").html(price);

	var specParams = $(".parameterDisplay");
	for(var i = 0; i < 2; i++){
		var temp = $(specParams[i]).html();
		temp = displayPrice(temp);
		temp += " SQ. FT";
		$($(".parameterDisplay")[i]).html(temp);
	}

	var phone = $("#phoneDisplay").html();
	phone = displayPhone(phone);
	$("#phoneDisplay").html(phone);

	$.ajax({
		url: "/CastlesMag/rental/getListingImages.php",
		method: "POST",
		data: {
			id: id
		}
	}).done(function(output){
		details = JSON.parse(output);
		listing = details;
		listing.images = listing.images.split(", ");
		listing.imagesDir = listing.imagesDir.split(", ");
		for(var i = 0; i < listing.imagesDir.length; i++){
			var slide = $("#slideTemplate").html();
			slide = $(slide).appendTo(".slideshow-container")[0];
			$("img", slide).attr("src", listing.imagesDir[i]);
		}
		var controls = $("#controlsTemplate").html();
		$(".slideshow-container").append(controls);
		for( ; i < listing.imagesDir.length; i++){
			$("#dotControl").append('<span class="dot" onclick="currentSlide('+(i+1)+')"></span> ');
		}
		slideshow();
		var width = (window.innerWidth > 0) ? window.innerWidth : screen.width;
		if(width < 1000) {
			$("#content").css("display", "block");
			$(".contentDiv").css({"width":"90%", "margin-left":"5%", "margin-right":"5%", "margin-bottom":"10%"});
		}
		if(width <= 800 ){
			$("#logo").css("margin-left", "7.5%");
		}
		if(width <= 480){
			$(".castlesHeader").css("font-size", "3.5vh");
			$(".castlesHeader").css("margin-top", "1vh");
			$("#logo").css("margin-left", "7.5%");
		}

});

});





