// 	show the image instant upload
	$(document).ready(()=>{
	      $('#wp_custom_attachment').change(function(){
        const file = this.files[0];
        console.log(file);
        if (file){
          let reader = new FileReader();
          reader.onload = function(event){
            console.log(event.target.result);
            $('#imgPreview').attr('src', event.target.result);
			  $("#imgPreview_<?php echo $a; ?>").css({
			"width" : "100%",
			"object-fit" : "cover",
});
          }
          reader.readAsDataURL(file);
        }
      });
    });
