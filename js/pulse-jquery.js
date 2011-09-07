//Filename: pulse-jquery.js
//Common javascript to make things happen. loaded on index.php

$(document).ready(function(){
$.ajaxSetup ({  
        cache: false  
}); 
$(".leftcol").hide().load('/templates/all.php', function() {$(".leftcol").fadeIn(600);});
$(".add-link").colorbox({width:"60%", height:"420px", scrolling:false, iframe:true});
$(".feed-checkbox").change(function(){ 
        $.ajax({
		    type: 'POST',
		    data: $('#feed-select').serialize(),
		    url: 'templates/custom_filter.php',
		    success: function(data){ $(".leftcol").fadeOut(200).html(data).fadeIn(200); }
		});
		return false;
    });
/*
$("#feed-select").submit(function(){ 
        $.ajax({
		    type: 'POST',
		    data: $('#feed-select').serialize(),
		    url: 'custom_filter.php',
		    success: function(data){ $(".leftcol").fadeOut(200).html(data).fadeIn(200); }
		});
		return false;
    });  
*/
});