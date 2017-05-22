/*
This JS is so the sidebar on the blog and blog post page can be sticky on the left side of the page, but it won't cover the footer when the user scrolls down.
*/


$(window).scroll(function () {
      // distance from top of footer to top of document
      footertotop = ($('.footer').position().top);
      // distance user has scrolled from top, adjusted to take in height of sidebar (570 pixels inc. padding)
      scrolltop = $(document).scrollTop()+750;
      // difference between the two
      difference = scrolltop-footertotop;

      // if user has scrolled further than footer,
      // pull sidebar up using a negative margin

      if (scrolltop > footertotop) {

      $('.blog-sidebar').css('margin-top',  0-difference);
      }

      else  {
      $('.blog-sidebar').css('margin-top', 0);
      }
});


$(window).scroll(function () {
    // distance from top of footer to top of document
    footertotop = ($('.footer').position().top);
    // distance user has scrolled from top, adjusted to take in height of sidebar (570 pixels inc. padding)
    scrolltop = $(document).scrollTop()+750;
    // difference between the two
    difference = scrolltop-footertotop;

    // if user has scrolled further than footer,
    // pull sidebar up using a negative margin

    if (scrolltop > footertotop) {

    $('.archive-blog-sidebar').css('margin-top',  0-difference);
    }

    else  {
    $('.archive-blog-sidebar').css('margin-top', 0);
    }
});
