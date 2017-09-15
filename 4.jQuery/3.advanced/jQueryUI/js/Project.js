/*jslint browser: true*/
/*global $, jQuery, alert*/

/*project*/
$(function () {
    'use strict';
    
    $('#todoList ul').sortable({
        items: "li:not('.listTitle, .addItem')",
        connectWith: 'ul',
        dropOnEmpty: true,
        placeholder: "emptySpace",
        scroll: false
    });
    
    

    $('.input').keydown(function (e) {
        if (e.keyCode === 13) {
            var item = $(this).val();
            
            $(this).parent().parent().append('<li>' + item + '<l>');
            $(this).val('');
        }
    });
    
    $('#trash').droppable({
        drop: function (event, ui) {
            ui.draggable.remove();
        }
    });
    
});