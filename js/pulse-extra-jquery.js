//Filename: pulse-jquery.js
//Javascript on template includes.

$(document).ready(function(){
	$.ajaxSetup ({  
	        cache: false  
	});
	$("#more").click(function(){ 
		$(".posts").append('<div class="moreposts additional-from-'+start+'"></div>');
		if (type == 'custom_filter'){
		 	feeds = $('#feed-select').serialize();
			 $.ajax({
			    type: 'POST',
			    data: feeds+'&start='+start+'&type='+type,
			    url: 'templates/more.php',
			    success: function(data){ $(".additional-from-"+(start-additional)).html(data);}
			});
		} else {
			$(".additional-from-"+start).load('templates/more.php', {start: start, type: type});
		}
	    $('html,body').delay(180).animate({scrollTop: $(".additional-from-"+start).offset().top},1000);
		start = start+additional;
		return false;
		});  
	$("a.reset-filter").click(function(){	
		$(".leftcol").fadeOut(200).load('templates/all.php').fadeIn(200);
		$(".feed-checkbox").attr('checked','checked')
		$("#feed-select").fadeIn(200);
		return false;
	});
	$("a.filter").click(function(){	
		$(".leftcol").fadeOut(200).load('templates/'+$(this).attr("href")).fadeIn(200);
		$("#feed-select").fadeOut(200);
		return false;
	});
	
	$(".comment-link").click(function(){
		$('body').find(".post-comments").remove();
		$('body').find(".hide-comments").hide()
		$('body').find(".comment-link").show()
		$(this).parent().append('<div class="post-comments"></div>');
		$(this).hide();
		$(this).siblings(".hide-comments").show();
		$(this).siblings(".post-comments").load('templates/comments.php', {url: $(this).attr('name')});
		return false;
	});
		
	$(".hide-comments").click(function(){
		$(this).siblings(".post-comments").slideUp(600);
		$(this).siblings(".comment-link").show();
		$(this).hide();
		return false;
	});

});
