var htmlLang = $("html").attr("dir");

$(".owl-carousel--hero").owlCarousel({
  loop: true,
  margin: 0,
  nav: false,
  dots: false,
  autoplay: true,
  autoplayTimeout: 2500,
  items: 1,
  rtl: htmlLang == "rtl" ? true : false,
});
