$(function() {
  //fix the submit jump
  $('#submit').click(function(e) { e.PreventDefault(); });

  // handle the like button
  var clicked = false;
  var clickNum = 0;
  $(".like").click(function(){
    if (!clicked) {
      jQuery.ajax("../components/increase-likes.php");
      var myStr = $(".like-number").html();
      clickNum = Number(myStr.substr(0, myStr.indexOf(' ')));
      clickNum++;
      $(".like-number").html(clickNum + " likes");
      clicked = true;
      }
  });
  
}); //jQuery is loaded