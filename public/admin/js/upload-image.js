function readURL(input) {
  if (input.files && input.files[0]) {

    var reader = new FileReader();

    reader.onload = function(e) {
      $('.image-upload-wrap0').hide();

      $('.file-upload-image0').attr('src', e.target.result);
      $('.file-upload-content0').show();

      $('.image-title0').html(input.files[0].name);
    };

    reader.readAsDataURL(input.files[0]);

  } else {
    removeUpload();
  }
}

function removeUpload() {
  $('.file-upload-input0').replaceWith($('.file-upload-input0').clone());
  $('.file-upload-content0').hide();
  $('.image-upload-wrap0').show();
}
$('.image-upload-wrap0').bind('dragover', function () {
		$('.image-upload-wrap0').addClass('image-dropping');
	});
	$('.image-upload-wrap0').bind('dragleave', function () {
		$('.image-upload-wrap0').removeClass('image-dropping');
});



function readURL1(input) {
  if (input.files && input.files[0]) {

    var reader = new FileReader();

    reader.onload = function(e) {
      $('.image-upload-wrap1').hide();

      $('.file-upload-image1').attr('src', e.target.result);
      $('.file-upload-content1').show();

      $('.image-title1').html(input.files[0].name);
    };

    reader.readAsDataURL(input.files[0]);

  } else {
    removeUpload1();
  }
}

function removeUpload1() {
  $('.file-upload-input1').replaceWith($('.file-upload-input1').clone());
  $('.file-upload-content1').hide();
  $('.image-upload-wrap1').show();
}
$('.image-upload-wrap1').bind('dragover', function () {
    $('.image-upload-wrap1').addClass('image-dropping');
  });
  $('.image-upload-wrap1').bind('dragleave', function () {
    $('.image-upload-wrap1').removeClass('image-dropping');
});

function readURL2(input) {
  if (input.files && input.files[0]) {

    var reader = new FileReader();

    reader.onload = function(e) {
      $('.image-upload-wrap2').hide();

      $('.file-upload-image2').attr('src', e.target.result);
      $('.file-upload-content2').show();

      $('.image-title2').html(input.files[0].name);
    };

    reader.readAsDataURL(input.files[0]);

  } else {
    removeUpload2();
  }
}

function removeUpload2() {
  $('.file-upload-input2').replaceWith($('.file-upload-input2').clone());
  $('.file-upload-content2').hide();
  $('.image-upload-wrap2').show();
}
$('.image-upload-wrap2').bind('dragover', function () {
    $('.image-upload-wrap2').addClass('image-dropping');
  });
  $('.image-upload-wrap2').bind('dragleave', function () {
    $('.image-upload-wrap2').removeClass('image-dropping');
});

function readURL3(input) {
  if (input.files && input.files[0]) {

    var reader = new FileReader();

    reader.onload = function(e) {
      $('.image-upload-wrap3').hide();

      $('.file-upload-image3').attr('src', e.target.result);
      $('.file-upload-content3').show();

      $('.image-title3').html(input.files[0].name);
    };

    reader.readAsDataURL(input.files[0]);

  } else {
    removeUpload3();
  }
}

function removeUpload3() {
  $('.file-upload-input3').replaceWith($('.file-upload-input3').clone());
  $('.file-upload-content3').hide();
  $('.image-upload-wrap3').show();
}
$('.image-upload-wrap3').bind('dragover', function () {
    $('.image-upload-wrap3').addClass('image-dropping');
  });
  $('.image-upload-wrap3').bind('dragleave', function () {
    $('.image-upload-wrap3').removeClass('image-dropping');
});


$(document).ready(function(){
  $('.edit-image').addClass('display-none');
  $('.edit-image1').addClass('display-none');
  $('.edit-image2').addClass('display-none');
  $('.edit-image3').addClass('display-none');
  $('.image-product0').click(function(){
      $('.edit-image').removeClass('display-none');
  });
  $('.image-product1').click(function(){
      $('.edit-image1').removeClass('display-none');
  });
  $('.image-product2').click(function(){
      $('.edit-image2').removeClass('display-none');
  });
  $('.image-product3').click(function(){
      $('.edit-image3').removeClass('display-none');
  });
});