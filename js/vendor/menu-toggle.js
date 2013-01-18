$(document).ready(function(){
  $("#menu-icon").on("click", function(){
    $(".nav").slideToggle();
	  $(this).toggleClass("active");
		$("#menu-icon img").toggleClass("rotate");
  });
});