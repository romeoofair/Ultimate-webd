/*jslint browser: true*/
/*global $, jQuery, alert*/

//script
 
$(function () {
    "use strict";

    /*--------------------
        jQuery Chaining
    ----------------------*/
    
    $('.notification-bar').delay(2000).slideDown().delay(3000).fadeOut();
    
    
    /*--------------------
        jQuery Hide/Show
    ----------------------*/

    $('#box1').click(function () {
        $(this).fadeTo(1000, 0.25, function () {
          // animation is complete
           
            $(this).slideUp();
        });
    });
    
    $('div.hidden').slideDown();
    
    $('button').click(function () {
        $('#box1').slideToggle();
    });

    
    /*--------------------
        jQuery Animate
    ----------------------*/

    $('#left').click(function () {
        $('.box').animate({
            left: "-=40px",
            fontSize: "+=2px"
        }, function () {
            //animate is complete
        });
    });
    
    $('#right').click(function () {
        $('.box').animate({
            left: "+=40px",
            fontSize: "-=2px"
        }, function () {
            //animate is complete
        });
    });
    
    $('#up').click(function () {
        $('.box').animate({
            top: "-=40px",
            opacity: "+=0.1"
        }, function () {
            //animate is complete
        });
    });
    
    $('#down').click(function () {
        $('.box').animate({
            top: "+=40px",
            opacity: "-=0.1"
        }, function () {
            //animate is complete
        });
    });
    
      
    /*--------------------
        jQuery vs CSS
    ----------------------*/
    
    $('#circle2').css({
        'background': "#8a8d22",
        'display': 'inline-block',
        'color': 'white',
        'text-align': 'center',
        'line-height': '140px',
        'height': '140px',
        'width': '140px',
        'margin': '40px 0'
    }).addClass('circleShape');
    
/*-----------------------------
        jQuery car race 2.0
  ----------------------------*/
    
    $('#go').click(function () {
    
        //build a function that checks to see if a car has won the race 
        var isComplete, place, racetime1, racetime2, carwidth, racetrackwidth;
        function checkifComplete() {
		    if (isComplete === false) {
			
                isComplete = true;
			
		    } else {
			    place = 'second';
			
		    }
	    }
	
        //get the width of the cars
        carwidth = $('#car1').width();
    
        //get the width of the race track
	    racetrackwidth = $(window).width() - carwidth;

        //generate a random # between 1 amd 500
        racetime1 = Math.floor((Math.random() * 5000) + 1);
	    racetime2 = Math.floor((Math.random() * 5000) + 1);
	
	   //set a flag variable to  False by default
	    isComplete = false;
    
        //set a flag variable to First by Default
        place = 'first';
        
        //animate car 1
	    $('#car1').animate({
        
            //move the car width of the racetrack
		    left: racetrackwidth
        
        }, racetime1, function () {
		 
            // animation complete
        
            //run a function
		    checkifComplete();
		
            //give some text feedback in the race info box
		    $('#raceinfo1 span').text('Finished in ' + place + 'place and clocked it at' + racetime1 + 'milliseconds.!');
        });
	
	    $('#car2').animate({
        
            //move the car width of the racetrack
		    left: racetrackwidth
        
	    }, racetime2, function () {
		 
		    // animation complete
        
            //run a function
		    checkifComplete();
		
            //give some text feedback in the race info box
		    $('#raceinfo2 span').text('Finished in ' + place + 'place and clocked it at' + racetime2 + 'milliseconds.!');
        });
    });
    
    $('#reset').click(function () {
	    $('.car').css('left', '0');
	    $('.raceinfo span').text('');
	
	
    });

});