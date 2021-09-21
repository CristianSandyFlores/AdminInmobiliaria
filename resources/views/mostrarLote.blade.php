@extends('layouts.master')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
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

            <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Urbanización Valle del Sol</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-8">
                  <p class="text-center">
                    <strong>Distribución de lotes</strong>
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
                  <!-- /.chart-responsive -->
                </div>
                <!-- /.col -->
                <div class="col-md-4">
                  <p class="text-center">
                    <strong>LOTE 5</strong>
                  </p>
                  <p>Far far away, behind the word mountains, far from the
                   countries Vokalia and Consonantia, there live the blind
                   texts. Separated they live in Bookmarksgrove right at</p>

                  <p>the coast of the Semantics, a large language ocean.
                   A small river named Duden flows by their place and supplies
                   it with the necessary regelialia. It is a paradisematic
                   country, in which roasted parts of sentences fly into
                   your mouth.</p>
                   <td>
                    <a href="descripcionLote"><button type="button" class="btn btn-block btn-warning">Ver más</button></a>
                  </td>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      </section>

    </div>
@endsection