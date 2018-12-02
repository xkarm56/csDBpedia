	$(document).ready(function () {
  $('.stat').hide();
  $('#statBox').show();
  $('#choose-stats').change(function () {
    $('.stat').hide();
    $('#'+$(this).val()).show();
  })
});