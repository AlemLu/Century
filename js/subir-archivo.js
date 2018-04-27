$(function() {
    // Clear event
    $('.img-prev-clear').click(function(){
        $('.img-prev').attr("data-content","").popover('hide');
        $('.img-prev-filename').val("");
        $('.img-prev-clear').hide();
        $('.img-prev-input input:file').val("");
        $(".img-prev-input-title").text("Examinar"); 
    }); 
    // Create the preview image
    $(".img-prev-input input:file").change(function (){     
        var img = $('<img/>', {
            id: 'dynamic',
            width:250,
            height:200
        });      
        var file = this.files[0];
        var reader = new FileReader();
        // Set preview image into the popover data-content
        reader.onload = function (e) {
            $(".img-prev-input-title").text("Cambiar");
            $(".img-prev-clear").show();
            $(".img-prev-filename").val(file.name);            
       }        
        reader.readAsDataURL(file);
    });  
});