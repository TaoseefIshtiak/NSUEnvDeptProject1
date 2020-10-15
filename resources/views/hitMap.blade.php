<!DOCTYPE html>
<html>
<head>

	<title>Hit Map on Google Map</title>
</head>

<style type = "text/css">
    #map{
        height: 100%;
    }
    html, body{
        height: 100%;
    }
    #searchInput{
        position: absolute;
        top: 10px;
        left: 10px;
        z-index: 99;
    }
</style>

<body onload="myFunction()">
    <input type="text" name="searchInput" id="searchInput">
    <div id = "map">

    </div>

</body>

<script type = "text/javascript">
    function myFunction(){
        var maps = new google.maps.Map(document.getElementById('map'),{
            center: {lat: 23.8103, lng: 90.4125},
            zoom: 14
        });
        var boroChashis = [
        [23.758872, 90.418267],
        [23.759108, 90.419640],
        [23.755926, 90.425606],
        [23.751722, 90.435819],
        [23.758396, 90.390215],
        [23.738808, 90.383461],
        [23.793849, 90.400737],
        [23.807034, 90.368643],
        [23.784613, 90.353500],
        [23.734207, 90.384309],
        [23.777983, 90.361087],
        [23.797210, 90.423661],
        [23.797210, 90.423661],
        [23.748581, 90.379671],
        [23.820838, 90.418241],
        [23.817895, 90.413571],
        [23.774675, 90.365863],
        [23.804989, 90.363329],
        [23.738107, 90.396808],
        [23.780729, 90.421282],
        [23.785978, 90.425598],
      ];

      var speedBreakerLocations = [
        [23.806551, 90.365876],
        [23.805933, 90.364900],
        [23.806875, 90.368097],
        [23.748197, 90.369966],
        [23.748944, 90.369709],
        [23.748011, 90.369215],
        [23.747549, 90.371329],
        [23.745929, 90.372981],
        [23.764211, 90.356692],
        [23.763906, 90.356112],
        [23.819700, 90.442081],
        [23.825118, 90.440708],
        [23.820485, 90.435558],
        [23.814125, 90.440708],
        [23.809257, 90.433327],
        [23.822998, 90.437876],

        ];


        var maker, i;
        var image = {
            url : 'C:/xampp/htdocs/envdeptDataLogger/resources/views/farmer.jpg',
            scaledSize: new google.maps.Size(50, 50)
        }

        var image2 = {
            url : 'C:/xampp/htdocs/envdeptDataLogger/resources/views/farmer.jpg',
            scaledSize: new google.maps.Size(50, 50)
        }

        var infoWindow = new google.maps.InfoWindow();


        for(i = 0; i<boroChashis.length;i++){
            marker = new google.maps.Marker({
            position: new google.maps.LatLng(boroChashis[i][0], boroChashis[i][1]),
            map : maps,
            title : 'Boro Chashi',
            icon: image,
            });

            var dataOnMarker = "<table><tr><td>Location Area: </td>"+
                                          "<td>Rampura</td>"+
                                          "<td>Nearby</td>"+
                                          "<td>Abul Hotel</td>"+
                                        "</tr>"+
                                "</table>";

            bindInfoWindow(marker, maps, infoWindow, dataOnMarker);

        }


        for(i = 0; i<speedBreakerLocations.length;i++){
           marker = new google.maps.Marker({
           position: new google.maps.LatLng(speedBreakerLocations[i][0], speedBreakerLocations[i][1]),
           map : maps,
           title : 'Choto Chashi',
           icon: image2
          });

            var dataOnMarker = "<table><tr><td>Location Area: </td>"+
                                          "<td>Rampura</td>"+
                                          "<td>Nearby</td>"+
                                          "<td>Abul Hotel</td>"+
                                        "</tr>"+
                                "</table>";

            bindInfoWindow(marker, maps, infoWindow, dataOnMarker);
        }

        function bindInfoWindow(marker, maps, infoWindow, dataOnMarker){
            marker.addListener('click', function(){
                infoWindow.setContent(dataOnMarker);
                infoWindow.open(maps, this);
            });
        }


        //ekhan theke edit korte hbe
    }

</script>
<!-- <script type= "text/javascript" src = "https://maps.googleapis.com/maps/api/js?key=AIzaSyCwklBKzd9Ajz0__bH-51Pmrz-njBeLYiY"></script> -->
<script src="https://maps.googleapis.com/maps/api/js?callback=myFunction"></script>
