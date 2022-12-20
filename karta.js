$(document).ready(function(){
  $("a").click(function(){
    var div = $(".sdu");
    div.animate({height: '200px', opacity: '0.4'}, "slow");
    div.animate({width: '200px', opacity: '0.8'}, "slow");
    div.animate({height: '600px', opacity: '0.4'}, "slow");
    div.animate({width: '600px', opacity: '0.8'}, "slow");
  });
});