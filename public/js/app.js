$('#tes').on('modals.learnmore', function () {
  	$('#myInput').trigger('focus')
});

$(function() {
    $('#payment_modal').on("show.bs.modal", function (e) {
     	$("#payment_label").html($(e.relatedTarget).data('title'));
     	$("#fav_price").html($(e.relatedTarget).data('price'));
    });
});


