@extends('layouts.app')

@section('title', 'Data Penduduk')

@section('breadcrumb')
    @parent
    <div class="breadcrumb-item">Data Penduduk</div>
@endsection

@push('css')
    <style>
        th {
            color: #616468;
        }
    </style>
       <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
       integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
       crossorigin="" />

   <!-- bootstrap cdn  -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
       integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
       <style type="text/css">
        #map {
          width: 400px;
          height: 400px;
        }
      </style>
    </head>
@endpush

@section('content')


    <div class="section-body">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div id="map"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

{{--

    <div class="container">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8 jumbotron">
                <form action="#">
                    <div class="form-group row">
                        <input type="hidden" id="latitude" name="latitude"/>
                        <input type="hidden" id="longtitude" name=""/>
                        <div class="col-sm-1"></div>
                        <label class="form-control-label col-sm-4">Location</label>
                        <div class="col-sm-1">
                            <a class="btn btn-info" onclick="initModel()"><i class="fas fa-map-marker mr-2"></i>Choose Location</a>
                        </div>
                        <div class="col-sm-6">

                        </div>

                        <div class="form-group row">
                            <div class="col-sm-1">
                                <label for="address" class="form-control-label col-sm-4"></label>
                                <div class="col-sm-6">
                                    <textarea name="adress" id="address" cols="30" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>







    <div class="modal fade" tabindex="-1" role="dialog" id="lokasiWarga">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
               <div class="modal-header bg-info texgt-white">
                <h5 class="modal-title" id="address-label">Choose Location</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
               </div>
               <div class="modal-body">
                <div id="map"></div>
               </div>
               <div class="modal-footer">
                <button type="button" class="btn btn-info" data-dismiss="modal"><i class="fas fa-check"></i> Done</button>
               </div>
            </div>
        </div>
    </div> --}}
@endsection


@push('scripts')

<script>
    // var map, marker;
    // function initModal() {
    //     $("#location-modal").modal()
    //     var location = new google.maps.LatLng(0,0);
    //     var mapProperty = {
    //         center: location,
    //         zoom: 50,
    //         mapTypeId: google.com.mapTypeId.ROADMAP
    //     };

    //     map = new google.maps.Map(document.getElementById('map'), mapProperty);
    //     marker = new google.maps.Marker({
    //         map: map,
    //         draggable: true,
    //         animation: google.maps.Animation.DROP,
    //         position: location
    //     });

    // }



</script>

<script>
    var map = new GMaps({
      el: '#map',
      lat: -12.043333,
      lng: -77.028333
    });


    define(['async!http://maps.google.com/maps/api/js?v=3&sensor=false'], function() {});
    require.config({
  paths: {
    "googlemapsapi": "googlemapsapi",
  },
  shim: {
    gmaps: {
      deps: ["googlemapsapi"],
      exports: "GMaps"
    }
  }
});
  </script>

<script src="http://maps.google.com/maps/api/js"></script>
  <script src="{{ asset('/stisla/assets/js/gmaps.js')}}"></script>

@endpush
