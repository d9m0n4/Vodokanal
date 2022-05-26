const swiper = new Swiper('.swiper', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,
  autoplay: {
    delay: 5000,
  },
  lazy: true,
  preloadImages: false,
  effect: 'fade',
  fadeEffect: {
    crossFade: true,
  },

  // Navigation arrows
});

const add = $('.add__button');
const inputBlock = $('.form__inputs-block');

add.on('click', (e) => {
  e.preventDefault();
  $(`<div id="meters__input" class="input__group">
  <div class="input__group-item">
    <label>Показания ПУ</label>
    <input name="meters" type="text" />
  </div>
</div>`)
    .fadeIn('slow')
    .appendTo(inputBlock);
});

function submit(e) {
  e.preventDefault();
  return $.ajax({
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
}

$('#metersForm').on('submit', submit);

window.onload = function () {
  const map = new YMaps.Map(document.getElementById('contacts__map'));
  const geoPoint = new YMaps.GeoPoint(47.889571, 57.304186);
  map.setCenter(geoPoint, 100);
  map.addControl(new YMaps.Zoom());

  const placemark = new YMaps.Placemark(geoPoint, { hasHint: true });

  placemark.name = 'Водоканал';
  placemark.description = 'МУП Водоканал';

  map.addOverlay(placemark);
  placemark.openBalloon();
};
