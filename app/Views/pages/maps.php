<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-6">
            <div id="mapid">
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">

                var mymap = L.map('mapid').setView([49.055947, 17.432431], 13);
                //var marker = L.marker([51.5, -0.09]).addTo(mymap);
                <?php foreach ($get_data as $p): ?>
                var marker = L.marker([<?= $p->geo_lattitude ?>, <?= $p->geo_longtitude ?>]).addTo(mymap);
                marker.bindPopup("Název školy: "+ "<?= $p->skola?>" + "<br>" + "Přijatých: " + <?= $p->prijatych?> + "<br>" + "Město: "+"<?= $p->mesto ?>" + "<br>" 
                + "geo_lat: " + <?= $p->geo_lattitude?> + "<br>" + "geo_long: " + <?= $p->geo_longtitude?>)
                var popup = L.popup(); 
                
               
                <?php endforeach; ?>
              
                L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'pk.eyJ1IjoiYW5vbmZvcmV2ZXI1NTAiLCJhIjoiY2t1YjFqeng4MGp4dTJ3bnZnYmdyaGtzeCJ9.nF5OzQXLR3h06lBRNsLJBQ'
}).addTo(mymap);



function onMapClick(e) {
    popup
        .setLatLng(e.latlng)
        .setContent("You clicked the map at " + e.latlng.toString())
        .openOn(mymap);
}

mymap.on('click', onMapClick);
                </script>
                