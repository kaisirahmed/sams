<script type="text/javascript" charset="utf-8">

$(function(){
    $(document).ready(function() {
    
		$image_crop = $('#crop_image').croppie({
			enableExif: true,
			viewport: {
				width:200,
				height:200,
				type:'square' //circle
			},
			boundary:{
				width:300,
				height:300
			}
		});

		$('#image').on('change', function(e){
	
			var fileName = e.target.files[0].name;
			var fileExt = fileName.split('.').pop();
	
			if (fileExt == 'jpeg'|| fileExt =='jpg'|| fileExt =='JPG'|| fileExt =='JPEG') {
				var reader = new FileReader();
				reader.onload = function (event) {
					$image_crop.croppie('bind', {
						url: event.target.result
					});
				}
	
				reader.readAsDataURL(this.files[0]);
				$('#uploadimageModal').modal('show');
			}
			else
			{
				swal({
					title:'',
					html:true,
					text:'<p style="color:red">Incorrect file extention. It must be jpg or jpeg!</p>'
				});	  
				$('#image').val('');  	
			}   	
		});


		$('.crop_image').click(function(event){

			$image_crop.croppie('result', {
				type: 'canvas',
				size: 'viewport'
			}).then(function(image){
				$('#uploaded_image').html('<div style="height:100px;width:90px;border:1px solid #c2c2c2;margin-left:-15px;"><div id="panel-reload" class="fade in"><span class="spinner"></span></div></div>');
				
				$('#uploadimageModal').modal('hide');
				$('#image').val('');
				$('#uploaded_image').html('<img src="'+image+'"  style="border:1px solid #c2c2c2;" height="100px" width="90px">');
				$('#image_uri').val(image); 
			})
		});
	});
})
</script>