;(function($){
    $(document).ready(function(){

    	$("#select-background").select2();


    	/*color picker*/
		console.clear();

		$('#colorPicker').wpColorPicker(myOptions);
		$('#borderColorPicker').wpColorPicker(myOptions);
		$('#borderColorPicker').wpColorPicker(myOptions);
		$('#messageFontColorPicker').wpColorPicker(myOptions);
		$('#headlineFontColorPicker').wpColorPicker(myOptions);
		$('#inputFontColorPicker').wpColorPicker(myOptions);
		$('#linkColorPicker').wpColorPicker(myOptions);
		$('#buttonColorPicker').wpColorPicker(myOptions);
		$('#loginButtonColorPicker').wpColorPicker(myOptions);
		$('#linkShadowColorPicker').wpColorPicker(myOptions);

		var myOptions = {
		    // you can declare a default color here,
		    // or in the data-default-color attribute on the input
		    defaultColor: false,
		    // a callback to fire whenever the color changes to a valid color
		    change: function(event, ui){},
		    // a callback to fire when the input is emptied or an invalid color
		    clear: function() {},
		    // hide the color picker controls on load
		    hide: true,
		    // show a group of common colors beneath the square
		    // or, supply an array of colors to customize further
		    palettes: true
		};

    	/*color picker*/
    	
    });
})(jQuery);