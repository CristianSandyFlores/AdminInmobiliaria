@extends('layouts.master')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Inicio
        <small>Panel de Control</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Panel de Control</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

            <!-- Main row -->
            <div class="row">
              <!-- right col (We are only adding the ID to make the widgets sortable)-->
              <section class="col-lg-12 connectedSortable">
      
                <!-- Map box -->
                <div class="box box-solid bg-light-blue-gradient">
                  <div class="box-header">
                    <!-- tools box -->
                    <div class="pull-right box-tools">
                      <button type="button" class="btn btn-primary btn-sm daterange pull-right" data-toggle="tooltip"
                              title="Date range">
                        <i class="fa fa-calendar"></i></button>
                      <button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse"
                              data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                        <i class="fa fa-minus"></i></button>
                    </div>
                    <!-- /. tools -->
      
                    <i class="fa fa-map-marker"></i>
      
                    <h3 class="box-title">
                      Plano de Lotes
                    </h3>
                  </div>
                  <div class="box-body">
                    <div id="world-map" style="height: 250px; width: 100%;"></div>
                  </div>
                  <!-- /.box-body-->
                  <div class="box-footer no-border">
                    <div class="row">
                    </div>
                    <!-- /.row -->
                  </div>
                </div>
                <!-- /.box -->
      
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
            <div class="widget-user-header bg-yellow" style="background: url('../dist/img/photo1.png') center center;">
              <h3 class="widget-user-username">Noelia Sánchez</h3>
              <h5 class="widget-user-desc">Agente Inmobiliario</h5>
            </div>
            <div class="widget-user-image">
              <img class="img-circle" src="{{ asset('frontend') }}/dist/img/user3-128x128.jpg" alt="User Avatar">
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