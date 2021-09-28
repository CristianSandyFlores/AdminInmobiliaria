@extends('layouts.master')

@section('content')
    <div class="content-wrapper">

        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <!-- Main row -->
    <!-- /.row (main row) hola -->
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

    <!-- Lista de terrenos -->
    <br />
    <div class="row">
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
                            <div class="btn col-sm-4 col-md-4 col-lg-4 prices">
                                <span class=" color-venta">Disponible</span>
                                <h4>120</h4>
                            </div>
                            <div class="btn col-sm-4 col-md-4 col-lg-4 prices">
                                <span class="color-reservado">Reservado</span>
                                <h4>2</h4>
                            </div>
                            <div class=" btn   col-sm-4 col-md-4 col-lg-4 prices">
                              <span class="color-comprado">No Disponible</span>
                              <h4>50</h4>
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
                            <div class="btn col-sm-4 col-md-4 col-lg-4 prices">
                                <span class=" color-venta">Disponible</span>
                                <h4>120</h4>
                            </div>
                            <div class="btn col-sm-4 col-md-4 col-lg-4 prices">
                                <span class="color-reservado">Reservado</span>
                                <h4>2</h4>
                            </div>
                            <div class=" btn   col-sm-4 col-md-4 col-lg-4 prices">
                              <span class="color-comprado">No Disponible</span>
                              <h4>50</h4>
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
                        src='https://cdn8.ultracasas.com/dyn/yastaimages/8bc7834719f510c0c88207ab7739ea15929371'> 
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
                            <div class="btn col-sm-4 col-md-4 col-lg-4 prices">
                                <span class=" color-venta">Disponible</span>
                                <h4>120</h4>
                            </div>
                            <div class="btn col-sm-4 col-md-4 col-lg-4 prices">
                                <span class="color-reservado">Reservado</span>
                                <h4>2</h4>
                            </div>
                            <div class=" btn   col-sm-4 col-md-4 col-lg-4 prices">
                              <span class="color-comprado">No Disponible</span>
                              <h4>50</h4>
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
                            <div class="btn col-sm-4 col-md-4 col-lg-4 prices">
                                <span class=" color-venta">Disponible</span>
                                <h4>120</h4>
                            </div>
                            <div class="btn col-sm-4 col-md-4 col-lg-4 prices">
                                <span class="color-reservado">Reservado</span>
                                <h4>2</h4>
                            </div>
                            <div class=" btn   col-sm-4 col-md-4 col-lg-4 prices">
                              <span class="color-comprado">No Disponible</span>
                              <h4>50</h4>
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
                            <div class="btn col-sm-4 col-md-4 col-lg-4 prices">
                                <span class=" color-venta">Disponible</span>
                                <h4>120</h4>
                            </div>
                            <div class="btn col-sm-4 col-md-4 col-lg-4 prices">
                                <span class="color-reservado">Reservado</span>
                                <h4>2</h4>
                            </div>
                            <div class=" btn   col-sm-4 col-md-4 col-lg-4 prices">
                              <span class="color-comprado">No Disponible</span>
                              <h4>50</h4>
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
                        src='https://cdn8.ultracasas.com/dyn/yastaimages/8bc7834719f510c0c88207ab7739ea15929371'> 
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
                            <div class="btn col-sm-4 col-md-4 col-lg-4 prices">
                                <span class=" color-venta">Disponible</span>
                                <h4>120</h4>
                            </div>
                            <div class="btn col-sm-4 col-md-4 col-lg-4 prices">
                                <span class="color-reservado">Reservado</span>
                                <h4>2</h4>
                            </div>
                            <div class=" btn   col-sm-4 col-md-4 col-lg-4 prices">
                              <span class="color-comprado">No Disponible</span>
                              <h4>50</h4>
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
                            <div class="btn col-sm-4 col-md-4 col-lg-4 prices">
                                <span class=" color-venta">Disponible</span>
                                <h4>120</h4>
                            </div>
                            <div class="btn col-sm-4 col-md-4 col-lg-4 prices">
                                <span class="color-reservado">Reservado</span>
                                <h4>2</h4>
                            </div>
                            <div class=" btn   col-sm-4 col-md-4 col-lg-4 prices">
                              <span class="color-comprado">No Disponible</span>
                              <h4>50</h4>
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
                            <div class="btn col-sm-4 col-md-4 col-lg-4 prices">
                                <span class=" color-venta">Disponible</span>
                                <h4>120</h4>
                            </div>
                            <div class="btn col-sm-4 col-md-4 col-lg-4 prices">
                                <span class="color-reservado">Reservado</span>
                                <h4>2</h4>
                            </div>
                            <div class=" btn   col-sm-4 col-md-4 col-lg-4 prices">
                              <span class="color-comprado">No Disponible</span>
                              <h4>50</h4>
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
                        src='https://cdn8.ultracasas.com/dyn/yastaimages/8bc7834719f510c0c88207ab7739ea15929371'> 
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
                            <div class="btn col-sm-4 col-md-4 col-lg-4 prices">
                                <span class=" color-venta">Disponible</span>
                                <h4>120</h4>
                            </div>
                            <div class="btn col-sm-4 col-md-4 col-lg-4 prices">
                                <span class="color-reservado">Reservado</span>
                                <h4>2</h4>
                            </div>
                            <div class=" btn   col-sm-4 col-md-4 col-lg-4 prices">
                              <span class="color-comprado">No Disponible</span>
                              <h4>50</h4>
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
