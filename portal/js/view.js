$(document).ready(function(){
  function setupGallery(){
    var left = 0,
        width = 510;
    $('.view-image').each(function(){
      $(this).css('left',left);
      left+=width;
    });
  }
  setupGallery();

  var galleryDrag = false,
      mouseOrigin;

  $('#image-carosel').mousedown(function(e){
    galleryDrag = true;
    mouseOrigin = e.pageX;
    $('.view-image').each(function(){
      $(this).attr('data-origin',$(this).css('left').replace(/[^-\d\.]/g, ''));
    });
  });

  $('body').mouseup(function(){
    galleryDrag = false;
    $('.view-image').each(function(){
      $(this).attr('data-origin',$(this).css('left').replace(/[^-\d\.]/g, ''));
    });
  });

  function checkEdges(){
    if($('.view-image').eq(0).css('left').replace(/[^-\d\.]/g, '') <= 0
  /*&& $('.view-image').eq(-1).css('left').replace(/[^-\d\.]/g, '') + $('.view-image').eq(-1).width() >= $('main').offset().left + $('main').width()*/){
      return true;
    }else{
      return false;
    }
  }

  $('body').mousemove(function(e){
    if(galleryDrag && checkEdges()){
      var difference = mouseOrigin - e.pageX;

      $('.view-image').each(function(){
        var origin = $(this).attr('data-origin');
        $(this).css('left', origin-difference);
      });
    }
  });
});
