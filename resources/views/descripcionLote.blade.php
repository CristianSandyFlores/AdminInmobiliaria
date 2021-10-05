@extends('layouts.master')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <!-- Small boxes (Stat box) -->
            <!-- Main row -->
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
                  <li data-target="
                                    #carousel-example-generic" data-slide-to="3"
                                    class=""></li>
                </ol>
                <div class=" carousel-inner">
                                    <div class="item active">
                                        <img src="{{ asset('frontend') }}/dist/img/carousel/terreina.jpg"
                                            alt="First slide">

                                        <div class="carousel-caption">
                                            Primer Imagen
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img src="{{ asset('frontend') }}/dist/img/carousel/terain2a.jpg"
                                            alt="Second slide">

                                        <div class="carousel-caption">
                                            Segunda Imagen
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img src="{{ asset('frontend') }}/dist/img/carousel/terrain3a.jpg"
                                            alt="Third slide">

                                        <div class="carousel-caption">
                                            Tercera Imagen
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img src="{{ asset('frontend') }}/dist/img/carousel/terrain4a.jpg"
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
            <div class="col-lg-12 col-xs-12">
                    <!-- small box -->
                    <div class="small-box bg-yellow">

                        <a href="javascript:history.back()" class="small-box-footer">Volver <i class="fa fa-arrow-circle-left"></i></a>
                    </div>
                </div>

        </section>
        <!-- right col -->
    </div>
    <!-- /.row (main row) -->

    <!-- /.box-header -->
    <div class="box-body">
        <div class="row">
            <div class="col-md-4">
                <p class="text-center">
                    <strong>VINTO CHICO</strong>
                </p>
                <p>Far far away, behind the word mountains, far from the
                    countries Vokalia and Consonantia, there live the blind
                    texts. Separated they live in Bookmarksgrove right</p>

                <strong>CARACTERÍSTICAS</strong>

                <p>the coast of the Semantics, a large language ocean.
                    A small river named Duden flows by their place and supplies
                    it with the necessary regelialia. It is a paradisematic
                    country, in which roasted parts of sentences fly into
                    your mouth.</p>
            <div class="col-lg-12 col-xs-12">
                <a href="registroCotizacion">
                  <button type="button" class="btn btn-block btn-primary "
                        >Cotizar</button></a>
                <br><br>
                <hr>
                <a class="btn btn-block" href="registroCliente">
                    <h5>Registrar cliente para realizar las siguientes acciones<i class="fa fa-fw fa-plus-square"></i></h5>
                </a>
                <br>
                <a href="registroCotizacion">
                  <button type="button" class="btn btn-block btn-success "
                        >Reserva</button></a>
                <br><br>
                <a href="registroCotizacion">
                  <button type="button" class="btn btn-block btn-info "
                        >Venta</button></a>
            </div>
            </div>
            <div class="col-md-8">
                <p class="text-center">
                    <strong>Fotografía del Lote</strong>
                </p>

                <!-- Map box -->
                <div class="box box-solid bg-light-blue-gradient">
                    <div class="box-header">
                        <!-- tools box -->

                        <!-- /. tools -->

                        <i class="fa fa-map-marker"></i>

                        <h3 class="box-title">
                            Lote 4
                        </h3>
                    </div>
                    <div class=" map-responsive">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3807.664807986312!2d-66.17278587458274!3d-17.37985489235092!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93e375a30bc1e6df%3A0x1cd0dbdeab45d22!2sTuhogar365.com!5e0!3m2!1ses!2sbo!4v1633464344655!5m2!1ses!2sbo"
                            style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <!-- /.box-body-->
                    <div class="box-footer no-border">
                        <div class="row">
                        </div>
                        <!-- /.row -->
                    </div>
                </div>
                <!-- /.box -->
                <!-- /.chart-responsive -->
            </div>
            <!-- /.col -->
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.box-footer -->
    </section>
    </div>
@endsection
