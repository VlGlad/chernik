ymaps.ready(init);

function init () {
    var myMap = new ymaps.Map('map', {
            center: [54.81669338374482, 56.090481812055216],
            zoom: 14,
            controls: ['zoomControl',  'fullscreenControl', 'trafficControl', 'geolocationControl']
        }, {
             // Зададим опции для элементов управления.
            zoomControlSize: 'small',
            searchControlProvider: 'yandex#search'
        }),
        objectManager = new ymaps.ObjectManager({
            // Чтобы метки начали кластеризоваться, выставляем опцию.
            clusterize: true,
            // ObjectManager принимает те же опции, что и кластеризатор.
            gridSize: 32,
            clusterDisableClickZoom: true
        });

    // Чтобы задать опции одиночным объектам и кластерам,
    // обратимся к дочерним коллекциям ObjectManager.
    objectManager.objects.options.set('preset', 'islands#greenDotIcon');
    objectManager.clusters.options.set('preset', 'islands#greenClusterIcons');
    myMap.geoObjects.add(objectManager);


    $.ajax({
        url: "data.json?v=5"
    }).done(function(data) {
        objectManager.add(data);
    });

}