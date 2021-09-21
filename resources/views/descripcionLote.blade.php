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
                  <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                  <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                </ol>
                <div class="carousel-inner">
                  <div class="item active">
                    <img src="{{ asset('frontend') }}/dist/img/carousel/lote1.jpg" alt="First slide">

                    <div class="carousel-caption">
                      Primer Imagen
                    </div>
                  </div>
                  <div class="item">
                    <img src="https://cdn.pixabay.com/photo/2016/09/01/19/53/pocket-watch-1637396__480.jpg" alt="Second slide">

                    <div class="carousel-caption">
                      Segunda Imagen
                    </div>
                  </div>
                  <div class="item">
                    <img src="https://marketplace.canva.com/EAD5hV8u9XE/1/0/1600w/canva-amarillo-y-verde-multicolor-d%C3%ADa-de-la-tierra-banner-para-sitio-web-IK9zQe_4Tm8.jpg" alt="Third slide">

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
                   texts. Separated they live in Bookmarksgrove right at</p>

                   <strong>CARACTERÍSTICAS</strong>

                  <p>the coast of the Semantics, a large language ocean.
                   A small river named Duden flows by their place and supplies
                   it with the necessary regelialia. It is a paradisematic
                   country, in which roasted parts of sentences fly into
                   your mouth.</p>
                </div>
                <div class="col-md-8">
                  <p class="text-center">
                    <strong>Fotografía del Lote</strong>
                  </p>

                <!-- Map box -->
                  <div class="box box-solid bg-light-blue-gradient">
                  <div class="box-header">
                    <!-- tools box -->
                    <div class="pull-right box-tools">
                      <button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse"
                              data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                        <i class="fa fa-minus"></i></button>
                    </div>
                    <!-- /. tools -->
      
                    <i class="fa fa-map-marker"></i>
      
                    <h3 class="box-title">
                      Lote 5
                    </h3>
                  </div>
                  <div class="box-body">
                  <img class="img-responsive pad" src="https://www.semana.com/resizer/IEcOf8TJx4XxRszD1F26YO7lixw=/1200x675/filters:format(jpg):quality(50)//cloudfront-us-east-1.images.arcpublishing.com/semana/4KEOUCGM7FDRHGJVNJJWTAF464.jpeg" alt="Photo">
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