ymaps.ready(init);

function init() {
    var myMap = new ymaps.Map("map", {
        center: [54.729147, 55.946391],
        zoom: 10
    }, {
        searchControlProvider: 'yandex#search'
    });

    myMap.geoObjects
        .add(new ymaps.Placemark([54.729147, 55.946391], {
            balloonContent: 'ул. Чернышевского, 75, Уфа'
        }, {
            preset: 'islands#icon',
            iconColor: '#0095b6'
        }));
}