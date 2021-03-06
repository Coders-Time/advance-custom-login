;(function($){
	
    $(document).ready(function(){
    	// console.clear();
        var mediaUploader;

    	/*set and get last selected tab*/
		if ( typeof(Storage) !== "undefined" ) {
		  var tab = sessionStorage.getItem("tab");
		  if (tab) {
		  	$(`#nav-tab #${tab}`).tab('show');
		  }
		}
		
    	function setItem ( item_id ) {
    		if ( typeof(Storage) !== "undefined" ) {
			  sessionStorage.setItem("tab", item_id );
			  // console.log( item_id + ' set this id');
			} else {
				console.log('something wrong to set id');
			}
    	}

    	$(document).on("click","#nav-tab .nav-link",function() {
    		setItem($(this).attr('id'));
	    });

    	if ( typeof(Storage) !== "undefined" ) {
		  sessionStorage.setItem("tab", $('#nav-tab .active').attr('id'));
		} 

    	$("#select-background").select2();
        $("#select-background").change(function(){

            $(".bg_default, .bg_img_change_area, .bg_color_change, .bg_slider_change").addClass('d-none');

            switch ($(this).val()) {
                case '1':
                    $(".bg_default").removeClass('d-none');
                    break
                case '2':
                    $(".bg_img_change_area").removeClass('d-none');
                    break;
                case '3':
                    $(".bg_color_change").removeClass('d-none');
                    break;
                case '4':
                    $(".bg_slider_change").removeClass('d-none');
                    break;
                default:
                    break;
            }
        });

        /* Login tab select */

        $('#login_form_position').select2();
        $('#login_form_position').change(function(){

            $(".float_settings_tab, .float_settings_customization").addClass('d-none');

            switch ($(this).val()) {
                case '2':
                    $(".float_settings_tab").removeClass('d-none');
                    break;
                case '3':
                    $(".float_settings_customization").removeClass('d-none');
                    break;
                default:
                    break;
            }
        });

                
        /* Range Slider Value */

        $(document).on('input', '#float_left_margin', function() {
            $('#float_left_margin_value').html( $(this).val() );
        });

        $(document).on('input', '#float_top_margin', function() {
            $('#float_top_margin_value').html( $(this).val() );
        });

        $(document).on('input', '#login_form_width', function() {
            $('#login_form_width_value').html( $(this).val() );
        });

        $(document).on('input', '#login_border_radius', function() {
            $('#login_border_radius_value').html( $(this).val() );
        });

        $(document).on('input', '#form_border_width', function() {
            $('#form_border_width_value').html( $(this).val() );
        });

        $(document).on('input', '#headline_font_size', function() {
            $('#headline_font_size_value').html( $(this).val() );
        });

        $(document).on('input', '#input_font_size', function() {
            $('#input_font_size_value').html( $(this).val() );
        });

        $(document).on('input', '#link_font_size', function() {
            $('#link_font_size_value').html( $(this).val() );
        });

        $(document).on('input', '#button_font_size', function() {
            $('#button_font_size_value').html( $(this).val() );
        });

        $(document).on('input', '#logo_width', function() {
            $('#logo_width_value').html( $(this).val() );
        });

        $(document).on('input', '#logo_height', function() {
            $('#logo_height_value').html( $(this).val() );
        });

        

        /* Form Background tab select */

        $('#login_form_background').select2();
        $('#login_form_background').change(function(){

            $(".bg_form_color_option, .bg_form_img").addClass('d-none');

            switch ($(this).val()) {
                case '2':
                    $(".bg_form_color_option").removeClass('d-none');
                    break;
                case '3':
                    $(".bg_form_img, .bg_form_repeat, .bg_form_position").removeClass('d-none');
                    break;
                default:
                    break;
            }
        });


    	/*color picker*/
		

		$('#colorPicker,#form_border_color, #background_form_color, #messageFontColorPicker,#headline_font_color,#input_font_color,#link_color,#button_color,#button_font_color,#link_shadow_color,#socialIconColorPicker,#socialHoverColorPicker,#socialIconbgColorPicker,#socialHoverbgColorPicker, #form_shadow_color_picker').wpColorPicker(myOptions);

		var myOptions = {
		    defaultColor: false,
		    change: function(event, ui){},
		    clear: function() {},
		    hide: true,
		    palettes: true
		};	


		/*Media upload */
        $('.upload_login_bg_img').on('click',function(e) {
            e.preventDefault();
            if( mediaUploader ){
                mediaUploader.open();
                return;
            }
            mediaUploader = wp.media.frames.file_frame = wp.media({
                title: 'Choose a Image',
                button: {
                    text: 'Choose image'
                },
                multiple: false
            });
            
            mediaUploader.on('select', function(){
                attachment = mediaUploader.state().get('selection').first().toJSON();
                $('.uploaded_login_bg_img')
	                .attr('src', attachment.url)
	                .data('id', attachment.id);
                $(".remove_login_bg_img").removeClass('d-none');
                $(".submit_login_bg_img").removeClass('d-none');
	            $(".upload_login_bg_img").text('Change Image');
                $("#bg_img_id").val(attachment.id);

            });
            mediaUploader.open();
        });
        /*Media upload */

        /*Gallery upload */
        var galleryUploader;
        $('.upload_login_bg_gallery').on('click',function(e) {
            e.preventDefault();
            if( galleryUploader ){
                galleryUploader.open();
                return;
            }
            galleryUploader = wp.media.frames.file_frame = wp.media({
                title: 'Choose Gallery Images',
                button: {
                    text: 'Choose Gallery Images'
                },
                multiple: true
            });
            
            galleryUploader.on('select', function(){
                var attachments = galleryUploader.state().get('selection');
                $("#logincarousel .carousel-inner").html('');
                $("#logincarousel .carousel-indicators").html('');
                $("#logincarousel")
                .attr("data-touch","true")
                .attr("data-interval","true")
                .attr("data-ride","carousel");

                  attachments.map( function( attachment,i ) {
                    attachment = attachment.toJSON();
                    active_class = i == 0 ? 'active' : '';

                    sliderChange($("#lbgsa-type").val(), null, i,active_class);

                    $("#logincarousel .carousel-inner").append(`
                    <div class="carousel-item ${active_class}">
                      <img src="${attachment.sizes.full.url}" class="img-fluid d-block w-100" alt="${attachment.alt}">
                      <input type="hidden" name="slider[]" value="${attachment.id}">
                    </div> `);                 
                  });
                $(".remove_login_bg_gallery").removeClass('d-none');
                $(".submit_login_bg_gallery").removeClass('d-none');
                $(".upload_login_bg_gallery").text('Change Gallery');
            });
            galleryUploader.open();
        });
        /*Media upload */


        $("#lbgsa-type").change(function(){
            sliderChange( $(this).val(), true );
        });

        function sliderChange( type, change =null, i=0, active_class = '') {
            switch ( type ) {
                    case '1':
                        $("#logincarousel .control").addClass('d-none');
                        break;
                    case '2':
                        $("#logincarousel .control").removeClass('d-none');
                        break;
                    case '3':
                        $("#logincarousel .control").removeClass('d-none');
                        if (!change) {
                            $("#logincarousel .carousel-indicators").append(`
                            <li data-target="#logincarousel" data-slide-to="${i}" class="${active_class}"></li>
                            `);
                        }                        
                        break;
                    case '4':
                        $("#logincarousel").addClass('carousel-fade');
                        $("#logincarousel .control").removeClass('d-none');
                        break;
                    case '5':
                        $("#logincarousel").attr("data-touch","false");
                        $("#logincarousel").attr("data-interval","false");
                        $("#logincarousel").removeAttr("data-ride");
                        $("#logincarousel .control").removeClass('d-none');
                        break;
                    default:
                        break;
                }
        }



        $(".remove_login_bg_gallery, .remove_login_bg_img").click(function(){
            if ($("#logincarousel .carousel-inner .carousel-item").length) {
                $("#logincarousel .carousel-inner").html('');
            }
            if ($(".bg_img_change_area .uploaded_login_bg_img").data('id')) {
                $(".bg_img_change_area .uploaded_login_bg_img").attr('src','');
            }
        });

        $("#login_logoHelp").click(function(e){
            e.preventDefault();
            singleImageUpload( "#login_logo",'.uploaded_login_logo_img','#login_logo_id' );
        });

        $("#logo_width").change(function(){
            console.log($(this).val());
            var logo_width = $(this).val();
            $(".uploaded_login_logo_img").css('width',logo_width + 'px');
            $(".uploaded_login_logo_img").css('height','auto');
        });

        $("#logo_height").change(function(){
            console.log($(this).val());
            var logo_height = $(this).val();
            $(".uploaded_login_logo_img").css('height', logo_height + 'px');
        });

        $("#form_bg_img_help").click(function(e){
            e.preventDefault();
            singleImageUpload( "#form_bg_img",'.uploaded_form_bg_img','#login_form_bg_id' );
        });

        $("#form_bg_img_width").change(function(){
            console.log($(this).val());
            var form_bg_img_width = $(this).val();
            $(".uploaded_form_bg_img").css('width', form_bg_img_width + 'px');
            $(".uploaded_form_bg_img").css('height','auto');
        });

        $("#form_bg_img_height").change(function(){
            console.log($(this).val());
            var form_bg_img_height = $(this).val();
            $(".uploaded_form_bg_img").css('height', form_bg_img_height + 'px');
        });


        function singleImageUpload ( ...areas ) 
        {
            var attachment = '';       

            if( mediaUploader )
            {
                mediaUploader.open();
                return;
            }

            mediaUploader = wp.media.frames.file_frame = wp.media({
                title: 'Choose a Image',
                button: {
                    text: 'Choose image'
                },
                library: {
                    type: [ 'image' ]
                },
                multiple: false
            });

            mediaUploader.on('select', function(){
                attachment = mediaUploader.state().get('selection').first().toJSON();

                $(areas[0]).val(attachment.url);
                $(areas[1]).attr('src',attachment.url);
                $(areas[2]).val(attachment.id);
                
            });
            mediaUploader.open();
        }

        $("#customSwitch").change(function(){
            if ( this.checked === true || this.checked === false ) {
                var data = {
                    'action': 'plugin_enable',
                    'form_id': adcl.adcl_nonce,      // We pass php values differently!
                    'form_value': this.checked      //  plugin enable 
                };
                // We can also pass the url value separately from ajaxurl for front end AJAX implementations
                $.post( adcl.adcl_url, data, function( response ) {
                    var notice = (response.success) ? 'notice-success' : 'notice-error';

                    $(".customSwitch_message .notice").show().addClass(notice);
                    $(".customSwitch_message .notice p").append(response.data.message);
                    setTimeout(function() {
                        $(".customSwitch_message .notice").hide();
                    }, 3000);
                });
            }
        });

        /*Thickbox settings*/
        if ($('#advsign-modal .data').length > 0) {
            tb_show( $('#content').text(), "#TB_inline?inlineId=advsign-modal&width=700");
        }
        /*hide thickbox when click outside box*/
        $( 'body' ).on( 'thickbox:removed', function() {
            var url = window.location.href;
            var a = url.indexOf("?");
            var b = url.substring(a);
            var c = url.replace(b,"?page=advance-login");
            window.history.pushState({}, document.title, c );
        });
        

    });
})(jQuery);