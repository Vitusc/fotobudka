$('#test').on('click', function(){
  $(this).fadeOut().prev().attr('src', $(this).prev().data('src'));
});
