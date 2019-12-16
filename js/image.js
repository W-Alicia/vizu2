$('.img1 img').hover (function(){
    var images = $(this).attr('src');
    $('.img-block img').hide(); 
    $('img[src="'+images+'"]').show();
  
    //$('<img src="'+images+'"/>').show();
    //$( '.img-block' ).append( $('<img src="'+images+'"/>') );
    //alert(images);      
  });