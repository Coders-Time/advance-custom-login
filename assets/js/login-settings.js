;(function($){
	
    $(document).ready(function(){
    	console.clear();
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
			  console.log( item_id + ' set this id');
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

            $(".bg_img_change_area,.bg_color_change, .bg_slider_change").addClass('d-none');

            switch ($(this).val()) {
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
    	/*color picker*/
		

		$('#colorPicker,#borderColorPicker,#messageFontColorPicker,#headlineFontColorPicker,#inputFontColorPicker,#linkColorPicker,#buttonColorPicker,#loginButtonColorPicker,#linkShadowColorPicker,#socialIconColorPicker,#socialHoverColorPicker,#socialIconbgColorPicker,#socialHoverbgColorPicker').wpColorPicker(myOptions);

		var myOptions = {
		    defaultColor: false,
		    change: function(event, ui){},
		    clear: function() {},
		    hide: true,
		    palettes: true
		};	

		/*Media upload */
        var mediaUploader;
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
	                .attr('src',attachment.url)
	                .data('id',attachment.id);
                $(".remove_login_bg_img").removeClass('d-none');
	            $(".upload_login_bg_img").text('Change Image');
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
                      <img src="${attachment.sizes.full.url}" data-id="${attachment.id}" class="img-fluid d-block w-100" alt="${attachment.alt}">
                    </div> `);                 
                  });
                $(".remove_login_bg_gallery").removeClass('d-none');
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
                        } else {

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

        function singleImageUpload ( ...areas ) {
            var attachment = '';
            var mediaUploader;

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
                
                for(var i=0; i<areas.length;i++){
                    if ($(areas[i]).attr('src')) {
                        $(areas[i]).attr('src',attachment.url);
                    } else {
                        $(areas[i]).val(attachment.url).data('id',attachment.id);
                    }                    
                }
            });
            mediaUploader.open();        
            
        }

        $("#login_logoHelp").click(function(e){
            e.preventDefault();
            singleImageUpload( "#login_logo",'.uploaded_login_logo_img' );
        });

        

    });
})(jQuery);