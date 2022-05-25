const swiper = new Swiper('.swiper', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,
  autoPlay: true,

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});

// $(document).ready(() => {
//   $('.loader_inner').fadeOut();
//   $('.loader').delay(200).fadeOut('slow');
// });

const add = $('.add__button');
const inputBlock = $('.form__inputs-block');

add.on('click', (e) => {
  e.preventDefault();
  $(`<div id="meters__input" class="input__group">
  <div class="input__group-item">
    <label>Показания ПУ</label>
    <input name="meters1" type="text" />
  </div>
</div>`)
    .fadeIn('slow')
    .appendTo(inputBlock);
});

$('#metersForm').on('submit', function (e) {
  const d = $(this).serialize();
  console.log(d);
  console.log();
  e.preventDefault();
  $.ajax({
    method: 'POST',
    url: '../server.php',
    xhrFields: {
      withCredentials: true,
    },
    crossDomain: true,
    contentType: 'application/json; charset=utf-8',
    dataType: 'json',
    data: $(this).serialize(),
    success: function (d) {
      console.dir(d);
    },
    error: (e) => {
      console.log(e);
    },
  });
});
