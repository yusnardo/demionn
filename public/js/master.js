$(".demion_image").on("click", function () {
 	var imgsrc = $(this).data('id');
 	var imgtitle = $(this).data('title');
 	$('#my_image').attr('src', imgsrc);
 	$('#my_image').attr('alt', imgtitle);
 	$('#modal_demion_img_title').text(imgtitle);
});