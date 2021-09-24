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
                                <li data-target="#carousel-example-generic" data-slide-to="1"
                                    class=""></li>
                  <li data-target=" #carousel-example-generic"
                                    data-slide-to="2" class=""></li>
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
        <!-- right colzcsds -->
    </div>
    <!-- /.row (main row) -->
    <div class="page-header">
    
    <h1 >
        Lotes
        <small>Inmuebles Disponibles</small>
    </h1>
    </div>
    <!-- prueba  -->
    <div class="container">
    <form action="#" method="get" >
    <div class="row">
      <div class="panel panel-default">
        <div class="panel-body">
        <div class="col-md-4 " style="display: inline-block;">
                <div class="input-group">
                    <input type="text" size="20" name="q" class="form-control color-select" placeholder="Introduzca la Búsqueda...">
                    <span class="input-group-btn">
                        <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
        </div>
        <div class="col-md-4 " style="display: inline-block;">
            <div class="dropdown ">
                <button class="btn  color-select btn-block " type="button" data-toggle="dropdown">Estado
                    <span class="caret"></span></button>
                <ul class="dropdown-menu  btn-block">
                    <li><a href="#">Contado</a></li>
                    <li><a href="#">Cuotas</a></li>
                   
                </ul>
            </div>
        </div>

        <div class="col-md-4 " style="display: inline-block;">
          <div class="dropdown ">
              <button class="btn color-select btn-block  " type="button" data-toggle="dropdown">Zona
                  <span class="caret"></span></button>
              <ul class="dropdown-menu  btn-block">
                  <li><a href="#">Este</a></li>
                  <li><a href="#">Sur</a></li>
                  <li><a href="#">Oeste</a></li>
                  <li><a href="#">Norte</a></li>

              </ul>
          </div>
      </div>
    </div>
  </div>
    </div>
  </form>
</div>
    <!-- Fin prueba -->

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
            <!-- /.widget-user -->
        </div>
        <!-- /.col -->
        <div class="col-md-4">
            <div class="box box-widget ">
                <!-- Widget: user widget style 1 -->
                <div class='card'>
                    <div class='card-img-top'>
                        <img alt='' class='img-fluid img-responsive'
                            src='https://img10.naventcdn.com/avisos/11/00/59/06/28/14/720x532/223742149.jpg'>
                    </div>
                    <div class='card-block'>

                        <h4 class='card-title'>LA MORALEJA</h4>
                        <p class='card-text'>
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            Zapopan
                        </p>
                        <a class='btn color view-more ' href='#'>
                            Ver más
                        </a>
                        <hr />
                        <div class="row prices-homes">
                            <div class="col-sm-6 col-md-6 col-lg-6 prices">
                                <span>Casa desde</span>
                                <h4>$692,000</h4>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6 prices">
                                <span>Casa desde</span>
                                <h4>$692,000</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.widget-user -->
        </div>

        <div class="col-md-4">
            <div class="box box-widget ">
                <!-- Widget: user widget style 1 -->
                <div class='card mt-3'>
                    <div class='card-img-top'>
                        <img alt='' class='img-fluid img-responsive'
                            src='https://s1.eestatic.com/2021/04/29/invertia/empresas/inmobiliario/577453905_183658190_1024x576.jpg'>
                    </div>
                    <div class='card-block'>

                        <h4 class='card-title'>LA MORALEJA</h4>
                        <p class='card-text'>
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            Zona Montecato - Vinto
                        </p>
                        <a class='btn color view-more' href='mostrarLote'>
                            Ver más
                        </a>
                        <hr />
                        <div class="row prices-homes">
                            <div class="col-sm-6 col-md-6 col-lg-6 ">
                                <span>Casa desde</span>
                                <h4>$692,000</h4>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6 prices">
                                <span>Terrenos desde</span>
                                <h4>300m2</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.widget-user -->
        </div>
        <!-- /.col -->

        <div class="col-md-4">
            <!-- Widget: user widget style 1 -->
            <div class="box box-widget ">
                <div class='card'>
                    <div class='card-img-top'>
                        <img alt='' class='img-fluid img-responsive'
                            src='https://cdn8.ultracasas.com/dyn/yastaimages/8bc7834719f510c0c88207ab7739ea15929371'>
                    </div>
                    <div class='card-block'>

                        <h4 class='card-title'>LA MORALEJA</h4>
                        <p class='card-text'>
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            Zapopan
                        </p>
                        <a class='btn color view-more' href='mostrarLote'>
                            Ver más
                        </a>
                        <hr />
                        <div class="row prices-homes">
                            <div class="col-sm-6 col-md-6 col-lg-6 prices">
                                <span>Casa desde</span>
                                <h4>$692,000</h4>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6 prices">
                                <span>Casa desde</span>
                                <h4>$692,000</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.widget-user -->
        </div>
        <!-- /.col -->
        <div class="col-md-4">
            <div class="box box-widget ">
                <!-- Widget: user widget style 1 -->
                <div class='card'>
                    <div class='card-img-top'>
                        <img alt='' class='img-fluid img-responsive'
                            src='https://img10.naventcdn.com/avisos/11/00/59/06/28/14/720x532/223742149.jpg'>
                    </div>
                    <div class='card-block'>

                        <h4 class='card-title'>LA MORALEJA</h4>
                        <p class='card-text'>
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            Zapopan
                        </p>
                        <a class='btn color view-more ' href='#'>
                            Ver más
                        </a>
                        <hr />
                        <div class="row prices-homes">
                            <div class="col-sm-6 col-md-6 col-lg-6 prices">
                                <span>Casa desde</span>
                                <h4>$692,000</h4>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6 prices">
                                <span>Casa desde</span>
                                <h4>$692,000</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.widget-user -->
        </div>
        <div class="col-md-4">
            <div class="box box-widget ">
                <!-- Widget: user widget style 1 -->
                <div class='card mt-3'>
                    <div class='card-img-top'>
                        <img alt='' class='img-fluid img-responsive'
                            src='https://s1.eestatic.com/2021/04/29/invertia/empresas/inmobiliario/577453905_183658190_1024x576.jpg'>
                    </div>
                    <div class='card-block'>

                        <h4 class='card-title'>LA MORALEJA</h4>
                        <p class='card-text'>
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            Zona Montecato - Vinto
                        </p>
                        <a class='btn color view-more' href='mostrarLote'>
                            Ver más
                        </a>
                        <hr />
                        <div class="row prices-homes">
                            <div class="col-sm-6 col-md-6 col-lg-6 ">
                                <span>Casa desde</span>
                                <h4>$692,000</h4>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6 prices">
                                <span>Terrenos desde</span>
                                <h4>300m2</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.widget-user -->
        </div>
        <!-- /.col -->

        <div class="col-md-4">
            <!-- Widget: user widget style 1 -->
            <div class="box box-widget ">
                <div class='card'>
                    <div class='card-img-top'>
                        <img alt='' class='img-fluid img-responsive'
                            src='https://cdn8.ultracasas.com/dyn/yastaimages/8bc7834719f510c0c88207ab7739ea15929371'>
                    </div>
                    <div class='card-block'>

                        <h4 class='card-title'>LA MORALEJA</h4>
                        <p class='card-text'>
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            Zapopan
                        </p>
                        <a class='btn color view-more' href='mostrarLote'>
                            Ver más
                        </a>
                        <hr />
                        <div class="row prices-homes">
                            <div class="col-sm-6 col-md-6 col-lg-6 prices">
                                <span>Casa desde</span>
                                <h4>$692,000</h4>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6 prices">
                                <span>Casa desde</span>
                                <h4>$692,000</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.widget-user -->
        </div>
        <!-- /.col -->
        <div class="col-md-4">
            <div class="box box-widget ">
                <!-- Widget: user widget style 1 -->
                <div class='card'>
                    <div class='card-img-top'>
                        <img alt='' class='img-fluid img-responsive'
                            src='https://img10.naventcdn.com/avisos/11/00/59/06/28/14/720x532/223742149.jpg'>
                    </div>
                    <div class='card-block'>

                        <h4 class='card-title'>LA MORALEJA</h4>
                        <p class='card-text'>
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            Zapopan
                        </p>
                        <a class='btn color view-more ' href='#'>
                            Ver más
                        </a>
                        <hr />
                        <div class="row prices-homes">
                            <div class="col-sm-6 col-md-6 col-lg-6 prices">
                                <span>Casa desde</span>
                                <h4>$692,000</h4>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6 prices">
                                <span>Casa desde</span>
                                <h4>$692,000</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.widget-user -->
        </div>
        <div class="col-md-4">
            <div class="box box-widget ">
                <!-- Widget: user widget style 1 -->
                <div class='card mt-3'>
                    <div class='card-img-top'>
                        <img alt='' class='img-fluid img-responsive'
                            src='https://s1.eestatic.com/2021/04/29/invertia/empresas/inmobiliario/577453905_183658190_1024x576.jpg'>
                    </div>
                    <div class='card-block'>

                        <h4 class='card-title'>LA MORALEJA</h4>
                        <p class='card-text'>
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            Zona Montecato - Vinto
                        </p>
                        <a class='btn color view-more' href='mostrarLote'>
                            Ver más
                        </a>
                        <hr />
                        <div class="row prices-homes">
                            <div class="col-sm-6 col-md-6 col-lg-6 ">
                                <span>Casa desde</span>
                                <h4>$692,000</h4>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6 prices">
                                <span>Terrenos desde</span>
                                <h4>300m2</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.widget-user -->
        </div>
        <!-- /.col -->

        <div class="col-md-4">
            <!-- Widget: user widget style 1 -->
            <div class="box box-widget ">
                <div class='card'>
                    <div class='card-img-top'>
                        <img alt='' class='img-fluid img-responsive'
                            src='https://cdn8.ultracasas.com/dyn/yastaimages/8bc7834719f510c0c88207ab7739ea15929371'>
                    </div>
                    <div class='card-block'>

                        <h4 class='card-title'>LA MORALEJA</h4>
                        <p class='card-text'>
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            Zapopan
                        </p>
                        <a class='btn color view-more' href='mostrarLote'>
                            Ver más
                        </a>
                        <hr />
                        <div class="row prices-homes">
                            <div class="col-sm-6 col-md-6 col-lg-6 prices">
                                <span>Casa desde</span>
                                <h4>$692,000</h4>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6 prices">
                                <span>Casa desde</span>
                                <h4>$692,000</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.widget-user -->
        </div>
        <!-- /.col -->
        <div class="col-md-4">
            <div class="box box-widget ">
                <!-- Widget: user widget style 1 -->
                <div class='card'>
                    <div class='card-img-top'>
                        <img alt='' class='img-fluid img-responsive'
                            src='https://img10.naventcdn.com/avisos/11/00/59/06/28/14/720x532/223742149.jpg'>
                    </div>
                    <div class='card-block'>

                        <h4 class='card-title'>LA MORALEJA</h4>
                        <p class='card-text'>
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            Zapopan
                        </p>
                        <a class='btn color view-more ' href='#'>
                            Ver más
                        </a>
                        <hr />
                        <div class="row prices-homes">
                            <div class="col-sm-6 col-md-6 col-lg-6 prices">
                                <span>Casa desde</span>
                                <h4>$692,000</h4>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6 prices">
                                <span>Casa desde</span>
                                <h4>$692,000</h4>
                            </div>
                        </div>
                    </div>
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
