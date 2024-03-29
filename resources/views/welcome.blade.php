@extends('layouts.main')

@section('class', 'index')

@section('judul')
                    <div class="col-md-8 col-md-offset-2">
                        <div class="brand">
                            <h1>UBAYA</h1>
                            <h3>UNIVERSITAS SURABAYA.</h3>
                        </div>
                    </div>
@endsection

@section('carousel')
                    <div class="section" id="carousel">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">

                                    <!-- Carousel Card -->
                                    <div class="card card-raised card-carousel">
                                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                            <div class="carousel slide" data-ride="carousel">

                                                <!-- Indicators -->
                                                <ol class="carousel-indicators">
                                                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                                </ol>

                                                <!-- Wrapper for slides -->
                                                <div class="carousel-inner">
                                                    <div class="item active">
                                                        <img src="{{URL::asset('img/gb2.jpg')}}" alt="Awesome Image">
                                                        
                                                    </div>
                                                    <div class="item">
                                                        <img src="{{URL::asset('img/gb4.jpg')}}" alt="Awesome Image">
                                                        <div class="carousel-caption">
                                                            <h4><i class="material-icons">location_on</i> Kampus 1, Kali Rungkut</h4>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <img src="{{URL::asset('img/gb3.jpg')}}" alt="Awesome Image">
                                                        <div class="carousel-caption">
                                                            <h4><i class="material-icons">location_on</i> Kampus 2, Ngagel</h4>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Controls -->
                                                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                                    <i class="material-icons">keyboard_arrow_left</i>
                                                </a>
                                                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                                    <i class="material-icons">keyboard_arrow_right</i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Carousel Card -->

                                </div>
                            </div>
                        </div>
                    </div>
@endsection

@section('news')
                    <div class="row">
                        <div class="col-md-6">
                            @foreach($posts as $post)
                                @if($post->kategoriid == 1)
                                    <h2>{{ $post->judul}}</h2>
                                    @if($post->foto != '')
                                        <img src="{{asset('images/'.$post->foto)}}" alt="Raised Image" class="img-rounded img-responsive img-raised"/>
                                    @endif
                                    <p>{{ $post->isi }}</p>
                                    <p><a class="btn btn-default" href="{{url('admin/post', $post->id)}}" role="button">View details &raquo;</a></p>
                                @endif
                            @endforeach
                        </div>
                        <div class="col-md-6">
                            @foreach($events as $event)
                                @if($event->kategoriid == 2)
                                    <h2>{{ $event->judul}}</h2>
                                    @if($event->foto != '')
                                        <img src="{{asset('images/'.$event->foto)}}" alt="Raised Image" class="img-rounded img-responsive img-raised"/><br>
                                    @endif
                                    <p>{{ $event->isi }}</p>
                                    <p><a class="btn btn-default" href="{{url('admin/post', $event->id)}}" role="button">View details &raquo;</a></p>
                                @endif
                            @endforeach
                        </div>
                    </div>
@endsection

@section('script')
    <script type="text/javascript">
        $().ready(function(){
            // the body of this function is in assets/material-kit.js
            materialKit.initSliders();
            window_width = $(window).width();

            if (window_width >= 992){
                big_image = $('.wrapper > .header');

                $(window).on('scroll', materialKitDemo.checkScrollForParallax);
            }

        });
        $('.carousel').carousel({
          interval: 1000 * 10
        });
    </script>
@endsection
