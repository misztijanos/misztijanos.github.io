$(function() {
  //alert("imhere");
  //if ($(".content").css("display") == "none") {
    //alert("imhere");
    $(".content").show("slide");
    //$(".content").css("display", "block");
    $("#myCarousel").show("bounce", 1200);
    //$("#myCarousel").css("display", "block");
    $("footer").css("margin-top", "0.5em"); 
    var docHeight = $(window).height();
    var footerHeight = $('footer').height();
    var footerTop = $('footer').position().top + footerHeight;
   
    if (footerTop < docHeight) {
      $('footer').css('margin-top', 50 + (docHeight - footerTop) + 'px');
    };
    $(document).scrollTop(0);
  //}

  //toggle tooltip:
  $("[data-toggle='tooltip']").tooltip({animation: true});

  //show modals

  $('.modalphotos img').on('click', function() {
    // alert('imhere');
    var mysrc = this.src.substr(0, this.src.length-7) + '.jpg';
    var mycap = this.getAttribute("data-original-title");
    //alert('imhere');
    $('#modalimage').attr('src', mysrc);
    $('#modalimage').attr('data-original-title', mycap);

    $('#modal').modal({
      show: true,
    })    
  });//show modal
  $('#modalimage').on('click', function(){
    $('#modal').modal('hide');
    $('#modalimage').attr('src', "");
  })//hide modal

  //toggle menu
  $(".drop-link").click(function(){
  $(".responsive-menu").toggle();
}); 
}); //jQuery is loaded