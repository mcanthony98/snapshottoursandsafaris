<html>
  <head>
    <title>Leaflet + Raster Map tiles</title>
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.js"
    ></script>
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.css"
    />

    <style id="compiled-css" type="text/css">
      html,
      body,
      #my-map {
        width: 100%;
        height: 100%;
        margin: 0;
      }
    </style>
  </head>
  <body data-new-gr-c-s-check-loaded="14.991.0" data-gr-ext-installed="">
    <div id="my-map"></div>
    <script type="text/javascript">
      var map = L.map("my-map").setView([-1.0983475,37.0216585], 10);

      // Get your own API Key on https://myprojects.geoapify.com
      var myAPIKey = "4516024d306a46c0805d530943c5c6bd";

      // Retina displays require different mat tiles quality
      var isRetina = L.Browser.retina;

      var baseUrl =
        "https://maps.geoapify.com/v1/tile/osm-bright/{z}/{x}/{y}.png?apiKey={apiKey}";
      var retinaUrl =
        "https://maps.geoapify.com/v1/tile/osm-bright/{z}/{x}/{y}@2x.png?apiKey={apiKey}";

      // Add map tiles layer. Set 20 as the maximal zoom and provide map data attribution.
      L.tileLayer(isRetina ? retinaUrl : baseUrl, {
        attribution:
          'Powered by <a href="https://www.geoapify.com/" target="_blank">Geoapify</a> | © OpenStreetMap <a href="https://www.openstreetmap.org/copyright" target="_blank">contributors</a>',
        apiKey: myAPIKey,
        maxZoom: 20,
        id: "osm-bright",
      }).addTo(map);
    </script>
  </body>
</html>