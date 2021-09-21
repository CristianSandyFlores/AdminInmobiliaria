@extends('layouts.master')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- <section class="content-header">
      <h1>
        Inicio
        <small>Panel de Control</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Panel de Control</li>
      </ol>
    </section> -->

    <!-- Main content -->
    <section class="content">

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
                    <img src="{{ asset('frontend') }}/dist/img/carousel/p1.jpg" alt="First slide">

                    <div class="carousel-caption">
                      Primer Imagen
                    </div>
                  </div>
                  <div class="item">
                    <img src="{{ asset('frontend') }}/dist/img/carousel/p2.jpg" alt="Second slide">

                    <div class="carousel-caption">
                      Segunda Imagen
                    </div>
                  </div>
                  <div class="item">
                    <img src="{{ asset('frontend') }}/dist/img/carousel/p3.jpg" alt="Third slide">

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
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>150</h3>

              <h3>Lotes</h3>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">Más info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>53</h3>

              <h3>Terrenos</h3>
            </div>
            <div class="icon">
              <i class="fa fa-bookmark-o"></i>
            </div>
            <a href="#" class="small-box-footer">Más info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>11</h3>

              <h3>Condominios</h3>
            </div>
            <div class="icon">
              <i class="fa fa-calendar"></i>
            </div>
            <a href="#" class="small-box-footer">Más info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->

      <h1 class="page-header">Contacte a su Agente Favorito</h1>

      <div class="row">
        <div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-yellow" style="background: url('../dist/img/agente1.jpeg') center center;">
              <h3 class="widget-user-username">Noelia Sánchez</h3>
              <h5 class="widget-user-desc">Agente Inmobiliario</h5>
            </div>
            <div class="widget-user-image">
              <img class="img-circle" src="{{ asset('frontend') }}/dist/img/agente.jpeg" alt="User Avatar">
            </div>
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-4 border-right">
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <a href="https://api.whatsapp.com/send?phone=59167374241" class="text-center">67374859</a>
                    <b class="description-text">Contacto WhatsApp</b>
                  </div>
                  <!-- /.description-block -->
                </div>
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
        <!-- /.col -->
        <div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-aqua-active">
              <h3 class="widget-user-username">Cristian Sandy</h3>
              <h5 class="widget-user-desc">Agente Inmobiliario</h5>
            </div>
            <div class="widget-user-image">
              <img class="img-circle" src="{{ asset('frontend') }}/dist/img/user1-128x128.jpg" alt="User Avatar">
            </div>
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-4 border-right">
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <a href="https://api.whatsapp.com/send?phone=59167374241" class="text-center">71896352</a>
                    <b class="description-text">Contacto WhatsApp</b>
                  </div>
                  <!-- /.description-block -->
                </div>
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
        <!-- /.col -->
        <div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-black" style="background: url('../dist/img/photo1.png') center center;">
              <h3 class="widget-user-username">Gustavo Lara</h3>
              <h5 class="widget-user-desc">Agente Inmobiliario</h5>
            </div>
            <div class="widget-user-image">
              <img class="img-circle" src="{{ asset('frontend') }}/dist/img/user8-128x128.jpg" alt="User Avatar">
            </div>
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-4 border-right">
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <a href="https://api.whatsapp.com/send?phone=59167374241" class="text-center">69410000</a>
                    <b class="description-text">Contacto WhatsApp</b>
                  </div>
                  <!-- /.description-block -->
                </div>
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
@endsection