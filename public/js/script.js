$(function() {  
  $('.btn-6')
    .on('mouseenter', function(e) {
			var parentOffset = $(this).offset(),
      		relX = e.pageX - parentOffset.left,
      		relY = e.pageY - parentOffset.top;
			$(this).find('span').css({top:relY, left:relX})
    })
    .on('mouseout', function(e) {
			var parentOffset = $(this).offset(),
      		relX = e.pageX - parentOffset.left,
      		relY = e.pageY - parentOffset.top;
    	$(this).find('span').css({top:relY, left:relX})
    });
  $('[href=#]').click(function(){return false});

$('[id$="-button"]').on("click", function (e) {
  var color = $(this).attr('data-color');
  var colorBackdrop = 'modal-backdrop-' + color;
  // alert(color);
  $('#modal-backdrop').addClass(colorBackdrop);
});
$('.btn-close, .modal').on("click", function (e) {
  var color = $('.in').attr('data-color');
  var activeBackdrop = 'modal-backdrop-' + color;
  $('#modal-backdrop').removeClass(activeBackdrop);
});