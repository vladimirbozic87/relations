$("#submitAjax").on('click', function(){

    var param = $("#idPosts").val();

	$.ajax({
      url:url,
      data:{param:param},
      success:function(data){
          $("#ajaxContent").html(data);
          $("#ajaxContent").show();
      }

	});
});