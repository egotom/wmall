/**
 * First we will load all of this project's JavaScript dependencies which
 * includes React and other helpers. It's a great starting point while
 * building robust, powerful web applications using React + Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh React component instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
require('./components/Example');
const axios=require('axios');

$(function () {
    //Loop through all Labels with class 'editable'.
    $(".editable").each(function () {
        //Reference the Label.
        var label = $(this);
 
        //Add a TextBox next to the Label.
        label.after("<input type = 'text' style = 'display:none' />");
 
        //Reference the TextBox.
        var textbox = $(this).next();
 
        //Set the name attribute of the TextBox.
        var id = this.id.split('_')[this.id.split('_').length - 1];
        textbox[0].name = id.replace("lbl", "txt");
 
        //Assign the value of Label to TextBox.
        textbox.val(label.html());
 
        //When Label is clicked, hide Label and show TextBox.
        label.click(function () {
            $(this).hide();
            $(this).next().show();
        });
 
        //When focus is lost from TextBox, hide TextBox and show Label.
        textbox.focusout(function () {
            $(this).hide();
            $(this).prev().html($(this).val());
            $(this).prev().show();
        });
    });
	
	
	$('#tujian').multiselect({
		buttonText: function(options, select) {
			return '选择推荐产品';
		}
	});
	$('#tese').multiselect({
		buttonText: function(options, select) {
			return '选择特色产品';
		}
	});
	$('#phto').multiselect({
		buttonText: function(options, select) {
			return '选择相册';
		},
		buttonTitle: function(options, select) {
			var labels = [];
			options.each(function () {
				labels.push($(this).text());
			});
			return labels.join(' - ');
		}
	});
	$('#shangj').multiselect({
		buttonText: function(options, select) {
			return '选择上架产品';
		}
	});

});
