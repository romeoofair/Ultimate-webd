/*jslint browser: true*/
/*global $, jQuery, alert*/

//script
 
$(function () {
    "use strict";

    /*--------------
        Install
    --------------*/
    // alert("hello");
    
    /*--------------
        syntax
    -----------------*/

    $("button").click(function () {
        $('#box').fadeOut(1000);
    });
    
    /*----------------
        Selectors
    -----------------*/
    
    //$('h1,h2,h3').css('border','solid 1px red');
    
    ///id Selector
    //$('div#container').css('border','solid 1px red');
    
    //Class Selector
    //$('p.lead').css('border','solid 1px red');
    
    //Pseudo-element Selector- selects 1st element
    //$('li:first').css('border','solid 1px red');
    
    //Pseudo-element Selector- selects last element
    //$('p:even').css('border','solid 1px red');
    
    //Descendent Selector
    //$('div em').css('border','solid 1px red');
    
    //Child Selector
    //$('div > p').css('border','solid 1px red');
    
    //jQuery Header Selector
    //$(':header').css('border','solid 1px red');
    
    //jQuery Contains selector
    //$('div:contains("me")').css('border', 'solid 1px red');
    
    
    /*----------------------------
        jQuery Event Methods
    -----------------------------*/
    
    $('#box').click(function () {
		alert('you just cliked the box..!!');
	});
	
	$("input").blur(function () {
        if ($(this).val() === "") {
            $(this).css('border', 'solid 1px red');
	        $('#box').text('forgot to add text? ');
				
        }
	});
	
	
	$("input").keydown(function () {
		if ($(this).val() !== "") {
            $(this).css('border', 'solid 1px #777');
            $('#box').text('thanks for that');
				   
        }
	});
	
	$('#box').hover(function () {
		$(this).text('You hovered in!');
    }, function () {
		$(this).text('you hovered out');
				   
	});
					  
});
