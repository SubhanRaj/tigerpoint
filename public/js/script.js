// Strict Mode
"use strict";

// Window Load Event
$(window).on("load", function() {

	// Loader Fade Out
    $(".lx-loader").fadeOut();

	// Gallery Resizing
	var gallaryh = $(".lx-gallery[data-bg]:eq(0)").width();
	$(".lx-gallery[data-bg]").each(function(){
		$(this).height(gallaryh);
		$(this).css({"background":"url('"+$(this).attr("data-bg")+"') center center no-repeat","background-size":"cover"});
	});
	
	// ReadMore Resizing
	var rmh = $(".lx-readmore-img[data-bg]:eq(0)").width() * 0.6;
	$(".lx-readmore-img[data-bg]").each(function(){
		$(this).height(rmh);
		$(this).css({"background":"url('"+$(this).attr("data-bg")+"') center center no-repeat","background-size":"cover"});
	});
			
    return false;
});

// Mobile Menu
$(".lx-header-mobile i").on("click",function(){
	if($(".lx-menu").css("left") !== "0px"){
		$(".lx-menu").css("left","0px");
		$(this).text("close");
	}
	else{
		$(".lx-menu").css("left","-100%");
		$(this).text("menu");
	}
});

// Search Form
$(".lx-search-btn i").on("click",function(){
	$(".lx-header-content > div").css("opacity","0.0");
	$(".lx-header-search").css({"display":"block","opacity":"1.0"});
	$(".lx-header-search input[type='text']").focus();
});
$(".lx-header-search input[type='button']").on("click",function(){
	$(".lx-header-content > div").css("opacity","1.0");
	$(".lx-header-search").css({"display":"none"});
});

// Theme Style
// Get the user's theme preference from localStorage
var theme = localStorage.getItem('theme');

// If the user's theme preference is not set, use the default theme
if (!theme) {
	// Use the system theme preference if available
	if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
		theme = 'dark';
	} else {
		theme = 'light';
	}
}

// Apply the user's theme preference
if (theme === 'light') {
	$("link[title]").attr("href", "css/light_style.css");
	$(".lx-theme-style a").text("Dark Mode");
} else {
	$("link[title]").attr("href", "css/dark_style.css");
	$(".lx-theme-style a").text("Light Mode");
}

// Toggle the theme on click
$(".lx-theme-style a").on("click", function () {
	if ($("link[title]").attr("href") !== "css/light_style.css") {
		$("link[title]").attr("href", "css/light_style.css");
		$(this).text("Dark Mode");
		localStorage.setItem('theme', 'light'); // Store the user's theme preference in localStorage
	}
	else {
		$("link[title]").attr("href", "css/dark_style.css");
		$(this).text("Light Mode");
		localStorage.setItem('theme', 'dark'); // Store the user's theme preference in localStorage
	}
});

// Listen for changes to the system theme preference
if (window.matchMedia) {
	window.matchMedia('(prefers-color-scheme: dark)').addListener(function (e) {
		if (e.matches) {
			// Apply the dark theme
			$("link[title]").attr("href", "css/dark_style.css");
			$(".lx-theme-style a").text("Light Mode");
			localStorage.setItem('theme', 'dark'); // Store the user's theme preference in localStorage
		} else {
			// Apply the light theme
			$("link[title]").attr("href", "css/light_style.css");
			$(".lx-theme-style a").text("Dark Mode");
			localStorage.setItem('theme', 'light'); // Store the user's theme preference in localStorage
		}
	});
}