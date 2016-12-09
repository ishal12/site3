@extends('layouts.main')

@section('title', '| Contact Us')

@section('class', 'profile')


@section('news')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="well well-sm">
                    <form class="form-horizontal" method="post">
                        <fieldset>
                            <legend class="text-center header2">Contact us</legend>
                            <div class="form-group">
                                <div class="col-md-10 col-md-offset-1">
                                    <input id="name" name="name" type="text" placeholder="Nama" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-10 col-md-offset-1">
                                    <input id="email" name="email" type="text" placeholder="Email Address" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-10 col-md-offset-1">
                                    <input id="phone" name="phone" type="text" placeholder="No HP" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-10 col-md-offset-1">
                                    <textarea class="form-control" id="message" name="message" placeholder="Masukan pesan disini." rows="7"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div>
                    <div class="panel panel-default">
                        <div class="text-center header2">Lokasi</div>
                        <div class="panel-body text-center">
                            <h4>Alamat</h4>
                            <div>
                            Jl Ngagel <br />
                            Surabaya, Jawa Timur<br />
                            60246<br />
                            mail@ubaya.ac.id<br /><br />
                                <div class="map">
                                    <iframe src="http://www.map-embed.com/mapsv3.php?w=600&h=600&q=UBAYA Tenggilis-ATM Mandiri, Kali Rungkut, Surabaya City, East Java, Indonesia, &z=14&t=" width="100%" height="335" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a class="google-map-code" href="https://www.google.com/maps?ll=-7.306675,112.764637&z=14&t=m&hl=en-GB&gl=US&mapclient=embed&q=UBAYA+Tenggilis-ATM+Mandiri,+Kali+Rungkut,+Surabaya+City,+East+Java,+Indonesia," id="get-map-data">UBAYA Ngagel </a></iframe>
                                </div>
                            </div>
                            <hr />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>

    <script type="text/javascript">
        jQuery(function ($) {
            function init_map1() {
                var myLocation = new google.maps.LatLng(38.885516, -77.09327200000001);
                var mapOptions = {
                    center: myLocation,
                    zoom: 16
                };
                var marker = new google.maps.Marker({
                    position: myLocation,
                    title: "Property Location"
                });
                var map = new google.maps.Map(document.getElementById("map1"),
                    mapOptions);
                marker.setMap(map);
            }
            init_map1();
        });
    </script>

@endsection



