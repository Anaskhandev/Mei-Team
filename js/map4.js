$(document).ready(function () {
  'use strict';

  if ($('#map-leaflet').length) {
    var map = L.map('map-leaflet', {
      zoom: 9,
      maxZoom: 20,
      tap: false,
      gestureHandling: true,
      center: [30.2, -97.4],
    });

    var marker_cluster = L.markerClusterGroup();

    map.scrollWheelZoom.disable();

    var OpenStreetMap_DE = L.tileLayer(
      'https://{s}.tile.openstreetmap.de/tiles/osmde/{z}/{x}/{y}.png',
      {
        scrollWheelZoom: false,
        attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors',
      }
    ).addTo(map);

    $.ajax('members.json', {
      success: function (markers) {
        $.each(markers, function (index, value) {
          var icon = L.divIcon({
            html: value.icon,
            iconSize: [20, 20],
            iconAnchor: [20, 20],
            popupAnchor: [-20, -20],
          });

          var marker = L.marker(value.center, {
            icon: icon,
          }).addTo(map);

          marker.bindPopup(
            '<div class="listing-window-image-wrapper">' +
              '<a href="' +
              value.link +
              '">' +
              '<div class="listing-window-image" style="background-image: url(' +
              value.image +
              ');"></div>' +
              '<div class="listing-window-content">' +
              '<div class="info">' +
              '<h2>' +
              value.title +
              '</h2>' +
              '<p>' +
              value.desc +
              '</p>' +
              '<h3>' +
              value.price +
              '</h3>' +
              '</div>' +
              '</div>' +
              '</a>' +
              '</div>'
          );

          marker_cluster.addLayer(marker);
        });

        map.addLayer(marker_cluster);
      },
    });
  }
  var gotocountry = function (c) {
    // you get  afghanistan coordinates from google
    if (c == 'af') map.setView(new L.LatLng(34.5333, 69.1333), 6);
    if (c == 'tn') map.setView(new L.LatLng(34, 9), 6);
    return;
  };
});
