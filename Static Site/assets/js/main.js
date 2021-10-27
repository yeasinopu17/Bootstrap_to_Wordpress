// wow js init
new WOW().init();

//parallax effect
$(function () {
  //cache the window object
  let $window = $(window);

  //parallax background effect
  $('section[data-type="background"]').each(function () {
    let $bgobj = $(this);
    $(window).scroll(function () {
      //scroll the background at speed
      let yPos = -($window.scrollTop() / $bgobj.data("speed"));
      let coords = "50% " + yPos + "px";
      $bgobj.css({backgroundPosition: coords})
    });
  });
});


