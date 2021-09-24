@extends('layouts.master')

@section('content')
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
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
                  <img src="{{ asset('frontend') }}/dist/img/p/lotes.jpg" alt="First slide">

                    <div class="carousel-caption">
                      Primer Imagen
                    </div>
                  </div>
                  <div class="item">
                    <img src="{{ asset('frontend') }}/dist/img/p/lotes2.jpg" alt="Second slide">

                    <div class="carousel-caption">
                      Segunda Imagen
                    </div>
                  </div>
                  <div class="item">
                    <img src="{{ asset('frontend') }}/dist/img/p/lotes3.jpg" alt="Third slide">

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

            <h1>
      Lotes
        <small>Inmuebles Disponibles</small>
      </h1>
      <div class="row">
        <div class="col-lg-6 col-xs-6">
          <!-- small box -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
            <input type="text" size="20" name="q" class="form-control" placeholder="Introduzca la Búsqueda...">
            <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                    <i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        </div>
        <!-- ./col -->
        <div class="col-lg-5 ">
          <!-- small box -->
          <div class="margin">

              <div class="btn-group">
                <button type="button" class="btn btn-tumblr" style="width:250px;">Estado</button>
                <button type="button" class="btn btn-tumblr dropdown-toggle" data-toggle="dropdown">
                  <span class="caret"></span>
                  <span class="sr-only">Toggle Dropdown</span>
                </button>
                <ul class="dropdown-menu" style="width:250px;" role="menu">
                  <li><a href="#">Contado</a></li>
                  <li><a href="#">Cuotas</a></li>
                </ul>
              </div>
              <div class="btn-group">
                <button type="button" class="btn btn-tumblr" style="width:250px;">Zona</button>
                <button type="button" class="btn btn-tumblr dropdown-toggle" data-toggle="dropdown">
                  <span class="caret"></span>
                  <span class="sr-only">Toggle Dropdown</span>
                </button>
                <ul class="dropdown-menu" style="width:250px;" role="menu">
                  <li><a href="#">Norte</a></li>
                  <li><a href="#">Centro</a></li>
                  <li><a href="#">Sur</a></li>
                </ul>
              </div>
            </div>
        </div>
        <!-- ./col -->
      </div>

      <br />
      <div class="row">
      <div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-yellow" ">
              <h3 align="center"><b>Urbanización Valle del Sol</h3></b>
              <h5 align="center">
                  Zona Motecato - Vinto
              </h5>
              <h5 align="center">
                  Terrenos desde 300m2
              </h5>
            </div>
            <div class="box-footer">
              <div class="row">
                <!-- /.col -->
                <div class="col-sm-12">
                  <div class="description-block">
                  <a href="mostrarLote"><input type="image" src="{{ asset('frontend') }}/dist/img/p/boton.jpg" width="320" height="160" /></a>
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
            <div class="widget-user-header bg-yellow">
              <h3 align="center"><b>Urbanización Punta Cana</b></h3>
              <h5 align="center">
                  Zona Quillacollo
              </h5>
              <h5 align="center">
              Terrenos desde 300m2
              </h5>
            </div>
            <div class="box-footer">
              <div class="row">
                <!-- /.col -->
                <div class="col-sm-12">
                  <div class="description-block">
                  <input type="image" src="https://gacetinmadrid.com/wp-content/uploads/2019/01/P_015-1.jpg" width="320" height="160" />
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
            <div class="widget-user-header bg-yellow">
              <h3 align="center">Urbanización Urubó</h3>
              <h5 align="center">
                  Zona Sacaba
              </h5>
              <h5 align="center">
              Terrenos desde 250m2
              </h5>
            </div>
            <div class="box-footer">
              <div class="row">
                <!-- /.col -->
                <div class="col-sm-12">
                  <div class="description-block">
                  <input type="image" src="http://onuhabitat.org.mx/images/onu-habitat/blog/wb/grado-de-urbanizacion.jpg" width="320" height="160" />
                  </div>
                  <!-- /.description-block -->
                </div>
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.widget-user -->
        </div>

        <div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-yellow">
              <h3 align="center">Urbanización Cochabamba</h3>
              <h5 align="center">
                  Zona Sipe Sipe
              </h5>
              <h5 align="center">
              Terrenos desde 200m2
              </h5>
            </div>
            <div class="box-footer">
              <div class="row">
                <!-- /.col -->
                <div class="col-sm-12">
                  <div class="description-block">
                  <input type="image" src="https://cdn8.ultracasas.com/dyn/yastaimages/8bc7834719f510c0c88207ab7739ea15929371" width="320" height="160" />
                  </div>
                  <!-- /.description-block -->
                </div>
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.widget-user -->
        </div>

        <div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-yellow">
              <h3 align="center">Lote en Venta</h3>
              <h5 align="center">
                  Zona Tarata - Cochabamba
              </h5>
              <h5 align="center">
                  Superficie 300m2
              </h5>
            </div>
            <div class="box-footer">
              <div class="row">
                <!-- /.col -->
                <div class="col-sm-12">
                  <div class="description-block">
                  <input type="image" src="https://img10.naventcdn.com/avisos/11/00/59/06/28/14/720x532/223742149.jpg" width="320" height="160" />
                  </div>
                  <!-- /.description-block -->
                </div>
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.widget-user -->
        </div>

        <div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-yellow">
              <h3 align="center">Urbanización Estrella del Norte</h3>
              <h5 align="center">
                  Zona Cliza
              </h5>
              <h5 align="center">
              Terrenos desde 300m2
              </h5>
            </div>
            <div class="box-footer">
              <div class="row">
                <!-- /.col -->
                <div class="col-sm-12">
                  <div class="description-block">
                  <input type="image" src="https://creditierras.com.bo/wp-content/uploads/2020/08/ESTRELLA-DEL-NORTE.jpg" width="320" height="160" />
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
