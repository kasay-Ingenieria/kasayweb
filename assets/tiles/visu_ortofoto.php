<!DOCTYPE html>
<html>
    <head>
    <title>ortofoto.png</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta http-equiv='imagetoolbar' content='no'/>
    <style type="text/css"> v\:* {behavior:url(#default#VML);}
        html, body { overflow: ; margin: 0; hidden; padding: 0; height: 100%; width: 100%; font-family: 'Lucida Grande',Geneva,Arial,Verdana,sans-serif; }
        body {background: #252525; }
        #map { height: 100%; }
        #mouse-position { display: none; }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@main/dist/en/v7.0.0/legacy/ol.css" type="text/css">
    <script src="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@main/dist/en/v7.0.0/legacy/ol.js"></script>
    <script src="https://unpkg.com/ol-layerswitcher@4.1.1"></script>
    <link rel="stylesheet" href="https://unpkg.com/ol-layerswitcher@4.1.1/src/ol-layerswitcher.css" />
</head>
<body>
    <div id="map" class="map"></div>
    <div id="mouse-position" class="hidden"></div>
    
    
    
    
    <script type="text/javascript">
        var mousePositionControl = new ol.control.MousePosition({
            className: 'custom-mouse-position',
            target: document.getElementById('mouse-position'),
            undefinedHTML: '&nbsp;'
        });
        var map = new ol.Map({
            controls: ol.control.defaults.defaults().extend([mousePositionControl]),
            target: 'map',

            layers: [
                new ol.layer.Group({
                    title: 'Overlay',
                    layers: [
                        new ol.layer.Tile({
                            title: 'Overlay',
                            // opacity: 0.7,
                            source: new ol.source.TileImage({
                                attributions: '',
                                tileGrid: new ol.tilegrid.TileGrid({
                                    extent: [0,-17282,6968,0],
                                    origin: [0,-17282],
                                    resolutions: [128,64,32,16,8,4,2,1],
                                    tileSize: [256, 256]
                                }),
                                tileUrlFunction: function(tileCoord) {
                                    return ('./{z}/{x}/{y}.png'
                                        .replace('{z}', String(tileCoord[0]))
                                        .replace('{x}', String(tileCoord[1]))
                                        .replace('{y}', String(- 1 - tileCoord[2])));
                                },
                            })
                        }),
                    ]
                }),
            ],
            view: new ol.View({
                center: [3484.000000, -8641.000000],
                resolution: 10.000000,
                rotation: 300,
            })
        });
    </script>
</body>
</html>