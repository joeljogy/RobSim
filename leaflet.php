<html>

<head>
    <title>A Leaflet map!</title>
    <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css" />
    <script src="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css" integrity="sha512-07I2e+7D8p6he1SIM+1twR5TIrhUQn9+I6yjqD53JQjFiMf8EtC93ty0/5vJTZGF8aAocvHYNEDJajGdNx1IsQ==" crossorigin="" />

    <script src="https://unpkg.com/leaflet@1.0.3/dist/leaflet.js" integrity="sha512-A7vV8IFfih/D732iSSKi20u/ooOfj/AGehOKq0f4vLT1Zr2Y+RX7C+w8A1gaSasGtRUZpF/NZgzSAu4/Gc41Lg==" crossorigin=""></script>

	
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


    <style>
        #map {
            height: 100%;
	    z-index: 0;
        }
	
       .colorscale {
	position: fixed;
	bottom: 50px;
	right: 10px;
	z-index: 10000;
	}
        
			
	
        .btn span.glyphicon {
	opacity:0;
        }

        .btn.active span.glyphicon {
	opacity: 1;
        }

.btn-1 {
  color:#000000;
  background-color: #fee5d9;
  border-color: #285e8e;
}


.btn-2 {
  color: #000000;
  background-color: #fcbba1;
  border-color: #285e8e;
}


.btn-3 {
  color: #000000;
  background-color: #fc9272;
  border-color: #285e8e;
}


.btn-4 {
  color: #000000;
  background-color: #fb6a4a;
  border-color: #285e8e;
}


.btn-5 {
  color: #000000;
  background-color: #de2d26;
  border-color: #285e8e;
}


.btn-6 {
  color: #000000;
  background-color: #8B0000;
  border-color: #285e8e;
}



.col - sm - 3 {
        /*    height: 150px;
            background-color:#01549b;*/
    }
    .col - sm - 9 {
        height: 160 px;
        background - color: #2aabd2;
    border: 1px solid yellow;
    opacity: 0.9;
}


.nav-side-menu {
    overflow: auto;
    font-family: verdana;
    font-size: 12px;
    font-weight: 200;
    background-color: # 2e353 d;
        position: fixed;
        top: 0 px;
        width: 24 % ;
        height: 100 % ;
        color: #e1ffff;
    }
    .nav - side - menu.brand {
        background - color: #23282e;
    line-height: 50px;
    display: block;
    text-align: center;
    font-size: 14px;
}
.nav-side-menu .toggle-btn {
    display: none;
}
.nav-side-menu ul,
.nav-side-menu li {
    list-style: none;
    padding: 0px;
    margin: 0px;
    line-height: 35px;
    cursor: pointer;
    /*    
      .collapsed{
         .arrow:before{
                   font-family: FontAwesome;
                   content: "\f053";
                   display: inline-block;
                   padding-left:10px;
                   padding-right: 10px;
                   vertical-align: middle;
                   float:right;
              }
       }
    */
}
.nav-side-menu ul :not(collapsed) .arrow:before,
.nav-side-menu li :not(collapsed) .arrow:before {
    font-family: FontAwesome;
    content: "\f078";
    display: inline-block;
    padding-left: 10px;
    padding-right: 10px;
    vertical-align: middle;
    float: right;
}
.nav-side-menu ul .active,
.nav-side-menu li .active {
    border-left: 3px solid # d19b3d;
        background - color: #4f5b69;
}
.nav-side-menu ul .sub-menu li.active,
.nav-side-menu li .sub-menu li.active {
    color: # d19b3d;
    }
    .nav - side - menu ul.sub - menu li.active a,
    .nav - side - menu li.sub - menu li.active a {
        color: #d19b3d;
    }
    .nav - side - menu ul.sub - menu li,
    .nav - side - menu li.sub - menu li {
        background - color: #181c20;
    border: none;
    line-height: 28px;
    border-bottom: 1px solid # 23282e;
        margin - left: 0 px;
    }
    .nav - side - menu ul.sub - menu li: hover,
    .nav - side - menu li.sub - menu li: hover {
        background - color: #020203;
}
.nav-side-menu ul .sub-menu li:before,
.nav-side-menu li .sub-menu li:before {
    font-family: FontAwesome;
    content: "\f105";
    display: inline-block;
    padding-left: 10px;
    padding-right: 10px;
    vertical-align: middle;
}
.nav-side-menu li {
    padding-left: 0px;
    border-left: 3px solid # 2e353 d;
        border - bottom: 1 px solid #23282e;
}
.nav-side-menu li a {
    text-decoration: none;
    color: # e1ffff;
    }
    .nav - side - menu li a i {
        padding - left: 10 px;
        width: 20 px;
        padding - right: 20 px;
    }
    .nav - side - menu li: hover {
        border - left: 3 px solid# d19b3d;
        background - color: #4f5b69;
    -webkit-transition: all 1s ease;
    -moz-transition: all 1s ease;
    -o-transition: all 1s ease;
    -ms-transition: all 1s ease;
    transition: all 1s ease;
}
@media (max-width: 767px) {
    .nav-side-menu {
        position: relative;
        width: 100%;
        margin-bottom: 10px;
    }
    .nav-side-menu .toggle-btn {
        display: block;
        cursor: pointer;
        position: absolute;
        right: 10px;
        top: 10px;
        z-index: 10 !important;
        padding: 3px;
        background-color: # ffffff;
        color: #000;
        width: 40px;
        text-align: center;
    }
    .brand {
        text-align: left !important;
        font-size: 22px;
        padding-left: 20px;
        line-height: 50px !important;
    }
}
@media (min-width: 767px) {
    .nav-side-menu .menu-list .menu-content {
        display: block;
    }
}
body {
    margin: 0px;
    padding: 0px;
}

    </style>
</head>

<body>

<div class="colorscale">
    <div class="btn-group-vertical" data-toggle="buttons" data-target=".map">



        <label id="btnGreen" class="btn btn-1 active" a href = "https://www.w3schools.com/bootstrap/bootstrap_buttons.asp">
				<input id="greenCB" type="checkbox" autocomplete="off" checked>
				<span class="glyphicon glyphicon-ok"></span>
			</label>

        <label id="btnBlue" class="btn btn-2 active">
				<input id="blueCB" type="checkbox" autocomplete="off" checked>
				<span class="glyphicon glyphicon-ok"></span>
			</label>

        <label id="btnViolet" class="btn btn-3 active">
				<input id="violetCB" type="checkbox" autocomplete="off" checked>
				<span class="glyphicon glyphicon-ok"></span>
			</label>

        <label id="btnWhite" class="btn btn-4 active">
				<input id="whiteCB" type="checkbox" autocomplete="off" checked>
				<span class="glyphicon glyphicon-ok"></span>
			</label>

        <label id="btnOrange" class="btn btn-5 active">
				<input id="orangeCB" type="checkbox" autocomplete="off" checked>
				<span class="glyphicon glyphicon-ok"></span>
			</label>

        <label id="btnRed" class="btn btn-6 active">
				<input id="redCB" type="checkbox" autocomplete="off" checked>
				<span class="glyphicon glyphicon-ok"></span>
			</label>



    </div>
</div>

    <div id="map"></div>

    <!--<script type="text/javascript" src="geojson.min.js"></script>-->

    <script>

	var Nodes = new L.LayerGroup();
        var Amenities = new L.LayerGroup();
        var Roads = new L.LayerGroup();
        var Buildings = new L.LayerGroup();


	var GreenLayer = new L.LayerGroup();
        var VioletLayer = new L.LayerGroup();
        var BlueLayer = new L.LayerGroup();
        var WhiteLayer = new L.LayerGroup();
	var OrangeLayer = new L.LayerGroup();
        var RedLayer = new L.LayerGroup();
	var BusStops = new L.LayerGroup();
	var MetroStations = new L.LayerGroup();
	




        // initialize the map
        var map = L.map('map', {
            center: [25.3548,51.1839],
            zoom: 10,
            layers: [Amenities, Nodes, BusStops, MetroStations, GreenLayer, VioletLayer, BlueLayer, WhiteLayer, OrangeLayer, RedLayer]
        });


        L.tileLayer('https://api.mapbox.com/styles/v1/n-alathba/cj2fzxjgl00bl2rqno6mtb9wg/tiles/256/{z}/{x}/{y}?access_token=pk.eyJ1Ijoibi1hbGF0aGJhIiwiYSI6ImNqMmZ6bTQ2cDAwNDIyeW8wY2hidjFxdjUifQ.TyQ2WNEMtCO3Q84PYXlAEA', {
            attribution: 'Tiles by <a href="http://mapc.org">MAPC</a>, Data by <a href="http://mass.gov/mgis">MassGIS</a>',
            maxZoom: 17,
            minZoom: 1,
        }).addTo(map);

    var disable = {
        "fillOpacity": 100,
        "fillcolor": "#808080",
        "color": "#808080",

    };

    var enable = {
        "fillOpacity": 100,
        "fillcolor": "#000000",
        "color": "#000000",

    };

    var enable1 = {
        "fillOpacity": 100,
        "fillcolor": "#fee5d9",
        "color": "#fee5d9",

    };
    var enable2 = {
        "fillOpacity": 100,
        "fillcolor": "#fcbba1",
        "color": "#fcbba1",

    };
    var enable3 = {
        "fillOpacity": 100,
        "fillcolor": "#fc9272",
        "color": "#fc9272",

    };
    var enable4 = {
        "fillOpacity": 100,
        "fillcolor": "#fb6a4a",
        "color": "#fb6a4a",

    };
    var enable5 = {
        "fillOpacity": 100,
        "fillcolor": "#de2d26",
        "color": "#de2d26",

    };
    var enable6 = {
        "fillOpacity": 100,
        "fillcolor": "#8B0000",
        "color": "#8B0000",

    };

    var enable7 = {
        "fillOpacity": 100,
        "fillcolor": "#000000",
        "color": "#000000",

    };

    var enable8 = {
        "fillOpacity": 100,
        "fillcolor": "#0000FF",
        "color": "#0000FF",

    };

    var enable9 = {
        "fillOpacity": 100,
        "fillcolor": "#FF0000",
        "color": "#FF0000",

    };







        $("#btnGreen").click(function(event) {
                    map.addLayer(GreenLayer);
                    if ($('#greenCB').is(':checked')) {map.removeLayer(GreenLayer);}
                });

        $("#btnBlue").click(function(event) {
                    map.addLayer(BlueLayer);
                    if ($('#blueCB').is(':checked')) {map.removeLayer(BlueLayer);}
                });

        $("#btnViolet").click(function(event) {
                    map.addLayer(VioletLayer);
                    if ($('#violetCB').is(':checked')) {map.removeLayer(VioletLayer);}
                });

        $("#btnWhite").click(function(event) {
                    map.addLayer(WhiteLayer);
                    if ($('#whiteCB').is(':checked')) {map.removeLayer(WhiteLayer);}
                });

        $("#btnOrange").click(function(event) {
                    map.addLayer(OrangeLayer);
                    if ($('#orangeCB').is(':checked')) {map.removeLayer(OrangeLayer);}
                });

        $("#btnRed").click(function(event) {
                    map.addLayer(RedLayer);
                    if ($('#redCB').is(':checked')) {map.removeLayer(RedLayer);}
                });


        function onEachFeature(feature, layer) {
            var popupContent = "<strong>Type:</strong> " + feature.geometry.type;
            popupContent += "<br><strong>Name: </strong>" + feature.properties.name + "</br>";
            popupContent += "<strong>Network Id: </strong>" + feature.properties.network_id + "</br>";
            popupContent += "<strong>Traffic Weight: </strong>" + feature.properties.weight + "</br>";
	    console.log("DEBUG:", feature.properties.degree_centrality)
	    popupContent += "<strong>Degree Centrality: </strong>" + feature.properties.degree + "</br>";
            popupContent += "<strong>Edges: </strong>" + feature.properties.edges + "</br>";
	    popupContent += "<strong>Type:  </strong>" + feature.properties.type;
            popupContent += "<br><button class='btn btn-danger' id="+feature.properties.network_id +" type='submit'>Disable</button> &emsp;";
            popupContent += "<button class='btn btn-info'input type='checkbox' autocomplete='off' id="+feature.properties.network_id*-1+" type='submit'>Enable</button></br>";            
	    var network_id = feature.properties.network_id	    
            layer.bindPopup(popupContent);
	

        $("body").on("click", "#"+feature.properties.network_id , function(e) {
		$id = feature.properties.id;	
		var network_id = feature.properties.network_id;
		var name = feature.properties.name;
                 layer.setStyle(disable);

		    $.ajax({
        		type: 'GET',
        		url: 'leaflet.php',
       			 data: {test: name, network_id: network_id},
			contentType: 'application/json; charset=utf-8',
        		success: function( data ) {
           		 //console.log( data );
        		} 
    		});
                 <?php

            	$connection = mysqli_connect('localhost', 'root', 'root', 'robsim');
		date_default_timezone_set("Asia/Qatar");
		$currenttime = date("h:i:sa");
		if(isset($_GET['network_id'])){
		$new = $_GET['network_id'];
		$new_val = $_GET['test'];	
            	$sql = mysqli_query($connection,"UPDATE `all_data` SET `Status` = 'Disabled' WHERE `Network_ID` = $new ;");
		$sql2 = mysqli_query($connection,"UPDATE `all_data` SET `Time` = $currenttime WHERE `Network_ID` = $new ;");
		}
            	?>

        });



        $("body").on("click", "#"+feature.properties.network_id*-1, function(e) {
		function enable(el) {
			if (feature.properties.weight == 0.2){
                 		layer.setStyle(enable1);}
			if (feature.properties.weight == 0.4){
                 		layer.setStyle(enable2);}
			if (feature.properties.weight == 0.5){
                 		layer.setStyle(enable3);}
			if (feature.properties.weight == 0.6){
                 		layer.setStyle(enable4);}
			if (feature.properties.weight == 0.8){
                 		layer.setStyle(enable5);}
			if (feature.properties.weight == 1.0){
                 		layer.setStyle(enable6);}
			if (feature.properties.category == 'Node'){
                 		layer.setStyle(enable7);}
			if (feature.properties.category == 'Bus'){
                 		layer.setStyle(enable8);}
			if (feature.properties.category == 'Metro'){
                 		layer.setStyle(enable9);}				    
					}enable(this);
        });

    }

        $(function() {

            var link = './assets/data/node.json'
            $.getJSON(link, function(nodes) {

                L.geoJSON(nodes, {

                    style: function(feature) {
			return {color: "#000000 "};
                        return feature.properties && feature.properties.style;
                    },

                    onEachFeature: onEachFeature,

                    pointToLayer: function(feature, latlng) {
                        return L.circleMarker(latlng, {
                            radius: 3,
                            fillcolor: "#8B0000",
                            weight: 0.05,
                            opacity: 2,
                            fillOpacity: 2
                        });
                    }
                }).addTo(Nodes);

            });



            var link = './assets/data/point.json'
            $.getJSON(link, function(point) {


                L.geoJSON(point, {

                    style: function(feature) {
                        return feature.properties && feature.properties.style;
                    },

                    onEachFeature: onEachFeature,

                    pointToLayer: function(feature, latlng) {
                        return L.marker(latlng);
                    }
                }).addTo(Amenities);

            });





            var link = './assets/data/line.json'
            $.getJSON(link, function(line) {

                L.geoJSON(line, {
                    style: function(feature) {
			if (feature.properties.weight == 0.2) {
                        return {color: "#fee5d9"}; }

			else {
			return {color: "none"};}


                        return feature.properties && feature.properties.style;
                    },

                    onEachFeature: onEachFeature,

                    pointToLayer: function(feature, latlng) {
                        return L.marker(latlng);
                    }
                    
                }).addTo(GreenLayer);

            });

            var link = './assets/data/line.json'
            $.getJSON(link, function(line) {


                L.geoJSON(line, {
                    style: function(feature) {
			if (feature.properties.weight == 0.4) {
                        return {color: "#fcbba1"}; }

			else {
			return {color: "none"};}


                        return feature.properties && feature.properties.style;
                    },

                    onEachFeature: onEachFeature,

                    pointToLayer: function(feature, latlng) {
                        return L.marker(latlng);
                    }
                    
                }).addTo(VioletLayer);

            });


            var link = './assets/data/line.json'
            $.getJSON(link, function(line) {


                L.geoJSON(line, {
                    style: function(feature) {
			if (feature.properties.weight == 0.5) {
                        return {color: "#fc9272"}; }

			else {
			return {color: "none"};}



                        return feature.properties && feature.properties.style;
                    },

                    onEachFeature: onEachFeature,

                    pointToLayer: function(feature, latlng) {
                        return L.marker(latlng);
                    }
                    
                }).addTo(BlueLayer);

            });


            var link = './assets/data/line.json'
            $.getJSON(link, function(line) {

                L.geoJSON(line, {
                    style: function(feature) {
			if (feature.properties.weight == 0.6) {
                        return {color: "#fb6a4a"}; }

			else {
			return {color: "none"};}


                        return feature.properties && feature.properties.style;
                    },

                    onEachFeature: onEachFeature,

                    pointToLayer: function(feature, latlng) {
                        return L.marker(latlng);
                    }
                    
                }).addTo(WhiteLayer);

            });


            var link = './assets/data/line.json'
            $.getJSON(link, function(line) {

                L.geoJSON(line, {
                    style: function(feature) {
			if (feature.properties.weight == 0.8) {
                        return {color: "#de2d26"}; }
			else {
			return{color: "none"};}

                        return feature.properties && feature.properties.style;
                    },

                    onEachFeature: onEachFeature,

                    pointToLayer: function(feature, latlng) {
                        return L.marker(latlng);
                    }
                    
                }).addTo(OrangeLayer);

            });


            var link = './assets/data/line.json'
            $.getJSON(link, function(line) {


                L.geoJSON(line, {
                    style: function(feature) {
			if (feature.properties.weight == 1.0) {
                        return {color: "#8B0000"}; }
			
			else {
			return {color: "none"};}

                        return feature.properties && feature.properties.style;
                    },

                    onEachFeature: onEachFeature,

                    pointToLayer: function(feature, latlng) {
                        return L.marker(latlng);
                    }
                    
                }).addTo(RedLayer);

            });

           var link = './assets/data/bus_stops.json'
            $.getJSON(link, function(bus_stops) {


                L.geoJSON(bus_stops, {

                    style: function(feature) {
			return {color: "#0000FF"};
                        return feature.properties && feature.properties.style;
                    },

                    onEachFeature: onEachFeature,

                    pointToLayer: function(feature, latlng) {
                        return L.circleMarker(latlng, {
                            radius: 3,
                            fillcolor: "#8B0000",
                            weight: 0.05,
                            opacity: 2,
                            fillOpacity: 2
                        });
                    }
                }).addTo(BusStops);

            });

           var link = './assets/data/metro_stations.json'
            $.getJSON(link, function(metro_stations) {


                L.geoJSON(metro_stations, {

                    style: function(feature) {
			return {color: "#FF0000"};
                        return feature.properties && feature.properties.style;
                    },

                    onEachFeature: onEachFeature,

                    pointToLayer: function(feature, latlng) {
                        return L.circleMarker(latlng, {
                            radius: 3,
                            fillcolor: "#8B0000",
                            weight: 0.05,
                            opacity: 2,
                            fillOpacity: 2
                        });
                    }
                }).addTo(MetroStations);

            });





            var overlays = {
                "Amenities": Amenities,
		"Nodes" : Nodes,
		"Bus Stops" : BusStops,
		"Metro Stations" : MetroStations
            };

            L.control.layers(overlays).addTo(map);


            L.control.layers(null, overlays, {
                position: 'topleft',
                collapsed: true
            }).addTo(map);
        });
</script>



</body>

</html>