$( document ).ready(function(){
    $(".photo").css("opacity", "1");
});

$(".column img").on("mouseover", function(){
	$(this).css("transform", "scale(1.05, 1.05");
});

$(".column img").on("mouseout", function(){
	$(this).css("transform", "scale(1, 1");
});

$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});

setInterval(clock, 1000);

function clock() {
  var d = new Date();
  $(".time").html(d.toLocaleTimeString());
}