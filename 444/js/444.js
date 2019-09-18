 $('#thumbs img').click(function(){
            $('#largeImage').attr('src',$(this).attr('src').replace('thumb','large'));
            $('#description').html($(this).attr('alt'));
        });
 
  var swiper = new Swiper('.swiper-container', {
      slidesPerView: 3,
      spaceBetween: 30,
      slidesPerGroup: 3,
      loop: true,
      loopFillGroupWithBlank: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
        dynamicBullets: true
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });