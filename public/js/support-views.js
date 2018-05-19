$(document).ready(function(){
  
  $(".product-view").click(function(){
  	var id = $(this).attr('id');
  	$.ajax({
	      type:'GET',
	      url:'http://localhost:8000/support-view-product/'+id,
	      cache:true,
	      data:{"id":id},  
	   });
  });
  $(".blog-view").click(function(){
    var id = $(this).attr('id');
    $.ajax({
        type:'GET',
        url:'http://localhost:8000/support-view-blog/'+id,
        cache:true,
        data:{"id":id},
     });
  });
});