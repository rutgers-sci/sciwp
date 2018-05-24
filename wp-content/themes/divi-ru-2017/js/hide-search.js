/*  Toggle header search
/* ------------------------------------ */

jQuery(document).ready(function($){
	"use strict";
    $(".search-toggle").click(function(){
		alert('hi, boob');
        $("#search-container").slideToggle('slow', function(){
            $('.search-toggle').toggleClass('active');
        });
        // Optional return false to avoid the page "jumping" when clicked
        return false;
    });
});