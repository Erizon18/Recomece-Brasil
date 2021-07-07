!(function (document) {
  var owl = $('.carousel-home');
  owl.owlCarousel({
    margin: 10,
    nav: false,
    loop: true,
    autoplay: true,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 1
      },
      1000: {
        items: 1
      }
    }
  })
}(document));

