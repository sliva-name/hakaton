{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.css' rel='stylesheet' />--}}
{{--    <div id='map'></div>--}}
{{--    <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.js'></script>--}}
{{--    <script>--}}
{{--        mapboxgl.accessToken = 'pk.eyJ1IjoiYXhlbHdvcmxkIiwiYSI6ImNsMG4wdTV0cjE5eXIzam5zanp1eWZsYnIifQ.xWhUDKBBHilNzmwCJ_SmlQ';--}}
{{--        const map = new mapboxgl.Map({--}}
{{--            container: 'map', // container ID--}}
{{--            style: 'mapbox://styles/mapbox/streets-v11', // style URL--}}
{{--            center: [38.976, 45.0448], // starting position--}}
{{--            zoom: 15 // starting zoom--}}
{{--        });--}}
{{--        @foreach(json_decode($data, true) as $key => $json)--}}
{{--        let point{{ $key }} = new mapboxgl.Marker()--}}
{{--            .setLngLat([{{ $point2 }}, {{ $point1 }}])--}}
{{--            .addTo(map);--}}
{{--        @endforeach--}}

{{--        const marker1 = new mapboxgl.Marker()--}}
{{--            .setLngLat([38.938531, 45.070039])--}}
{{--            .addTo(map);--}}


{{--        // Create a default Marker, colored black, rotated 45 degrees.--}}
{{--        const marker2 = new mapboxgl.Marker({ color: 'black', rotation: 45 })--}}
{{--            .setLngLat([12.65147, 55.608166])--}}
{{--            .addTo(map);--}}
{{--        // Add geolocate control to the map.--}}
{{--        map.addControl(--}}
{{--            new mapboxgl.GeolocateControl({--}}
{{--                positionOptions: {--}}
{{--                    enableHighAccuracy: true--}}
{{--                },--}}
{{--// When active the map will receive updates to the device's location as it changes.--}}
{{--                trackUserLocation: true,--}}
{{--// Draw an arrow next to the location dot to indicate which direction the device is heading.--}}
{{--                showUserHeading: true--}}
{{--            })--}}
{{--        );--}}
{{--    </script>--}}
{{--@endsection--}}
