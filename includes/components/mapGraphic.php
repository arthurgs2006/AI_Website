<div class="card bg-gradient-light w-100">
    <div class="card-header border-0">
        <h3 class="card-title">
            <i class="fas fa-map-marker-alt mr-1"></i>
            Mapa
        </h3>
    </div>
    <div class="card-body" style="padding: 0;">
        <div id="world-map" style="height: 350px; width: 100%; max-width: 100%; margin: 0; padding: 0;"></div>
    </div>
    <div class="card-footer bg-transparent">
        <div class="d-flex justify-content-center">
            <div class="col-4 text-center">
                <div id="sparkline-1"></div>
                <div class="text-black"> Countries that uses more LLMs
                </div>
            </div>
        </div>
    </div>
</div>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

<script>
    var map = L.map('world-map').setView([20, 0], 2);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 58,
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    fetch('https://raw.githubusercontent.com/datasets/geo-countries/master/data/countries.geojson')
        .then(function(response) {
            return response.json();
        })
        .then(function(data) {
            L.geoJson(data, {
                onEachFeature: function(feature, layer) {
                    layer.on('click', function() {
                        alert('Você clicou em: ' + feature.properties.name);
                    });
                }
            }).addTo(map);
        });
</script>