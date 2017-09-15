/*jslint browser: true*/
/*global $, jQuery, alert*/

/*Draggable*/

$(function () {
    'use strict';
    /*Draggable*/
    $('#box1').draggable();
    
    $('#box1').draggable({ scroll: true, revert: "invalid" });
    
    $('#box2').draggable({ axis: "x" });

    $('#box3').draggable({ axis: "y" });

    $('#box4').draggable({ containment: ".container", revert: "valid" });

/*Droppable*/
    
    $('#droppable').droppable({
        accept: '#box1',
        drop: function () {
            $(this).find('span').html("when a box got attitude ,drop it like its hot");
        }
    });
    
/*Sortable*/
    
    $('#sortable').sortable({
        connectWith: "#sortableToo",
        placeholder: "placeholderBox"
    });
    
    $('#sortableToo').sortable({
        connectWith: "#sortable",
        placeholder: "placeholderBox"
    });
    
/*Accordion*/
    $('#accordion').accordion({ collapsible: true, heightStyle: "content" });
    

/*DatePicker*/
    $('.date').datepicker({
        showOtherMonths: true,
        selectOtherMonths: true,
        showButtonPanel: true,
        changeMonth: false,
        changeYear: false,
        numberOfMonths: 2,
        minDate: -1,
        maxDate: "+1W +5D"
    });
});
