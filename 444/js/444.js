 $('#thumbs img').click(function(){
            $('#largeImage').attr('src',$(this).attr('src').replace('thumbs','large'));
            $('#description').html($(this).attr('alt'));
        });
 
  var swiper = new Swiper('.swiper-container', {
      slidesPerView: 2,
      spaceBetween: 10,
      slidesPerGroup: 2,
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