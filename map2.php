<html>

<head>
    <title>Simple Map</title>
    <!-- <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script> -->
</head>
<style>
    #map {
        width: 50%;
        height: 50%;
    }

    /* 
 * Optional: Makes the sample page fill the window. 
 */
    html,
    body {
        height: 100%;
        margin: 0;
        padding: 0;
    }
</style>

<body>
    <div id="map"></div>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDm2qmZiHC1dLxTom6hqKBiay0bDdW950M&callback=initMap" defer></script>
    <script>
        function initMap() {

            let surat = {
                lat: 21.17,
                lng: 72.83
            };

            let mumbai = {
                lat:19.07,
                lng: 72.87
            };

            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 6,
                center: surat,
                mapTypeId: 'satellite'
            });

            const marker = new google.maps.Marker({
                position: surat,
                map,
                title: "Click to zoom",
                draggable: true,
            });

            const marker2 = new google.maps.Marker({
                position: mumbai,
                map,
                title: "Click to mubai",
                
            });

            marker.addListener("dragend", (event) => {
                let lat = event.latLng.lat();
                let lng = event.latLng.lng();

                alert('lat:'+lat+ ' and lng:'+lng );
            });

            // map.addListener("center_changed", () => {
            //     window.setTimeout(() => {
            //         map.panTo(marker.getPosition());
            //     }, 3000);
            // });

            // marker.addListener("click", () => {
            //     map.setZoom(8);
            //     map.setCenter(marker.getPosition());
            // });

           


        }
    </script>
</body>

</html>