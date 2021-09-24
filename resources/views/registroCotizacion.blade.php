@extends('layouts.master')

@section('content')
    <div class="content-wrapper">
        <section class="content">
        <div class="row">
                <!-- right col (We are only adding the ID to make the widgets sortable)-->
                <section class="col-lg-12 connectedSortable">

                    <div class="box-body">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"
                                    class=""></li>
                  <li data-target=" #carousel-example-generic"
                                    data-slide-to="2" class=""></li>
                </ol>
                <div class="
                                    carousel-inner">
                                    <div class="item active">
                                        <img src="{{ asset('frontend') }}/dist/img/carousel/lote1.jpg" alt="First slide">

                                        <div class="carousel-caption">
                                            Primer Imagen
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img src="{{ asset('frontend') }}/dist/img/carousel/green.jpg" alt="Second slide">

                                        <div class="carousel-caption">
                                            Segunda Imagen
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img src="{{ asset('frontend') }}/dist/img/carousel/arboles.jpg"
                                            alt="Third slide">

                                        <div class="carousel-caption">
                                            Tercera Imagen
                                        </div>
                                    </div>
                        </div>
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="fa fa-angle-left"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="fa fa-angle-right"></span>
                        </a>
                    </div>
            </div>

        </section>
        <!-- right col -->
    </div>
        </section>
    </div>
@endsection