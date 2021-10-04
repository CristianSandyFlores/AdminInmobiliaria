@extends('layouts.master')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
                    <!-- /.row -->

        <h1 class="page-header">Clientes Registrados</h1>
                    <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-4 ">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>40</h3>

                        <h3>Clientes</h3>
                    </div>
                    <div class="icon">
                        <i class="ion ion-ios-people-outline"></i>
                    </div>
                    <a href="lotes" class="small-box-footer">Más info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 ">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>25</h3>

                        <h3>Agentes</h3>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="#" class="small-box-footer">Más info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 ">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3>1</h3>

                        <h3>Administradores</h3>
                    </div>
                    <div class="icon">
                        <i class="fa fa-star-o"></i>
                    </div>
                    <a href="#" class="small-box-footer">Más info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->
        <br><br>
            <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><strong>Lista de Clientes</strong></h3>

              <div class="box-tools">
                <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Buscar">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>N°</th>
                  <th>Nombre Completo</th>
                  <th>CI/DNI</th>
                  <th>Teléfono</th>
                  <th>Dirección</th>
                  <th>Edición</th>
                </tr>
                <tr>
                  <td>1</td>
                  <td>Kevin Rodriguez</td>
                  <td>5000013</td>
                  <td>68965364</td>
                  <td>Calle Mexico esq. Lanza</td>
                  <td><button type="button" class="btn btn-block btn-warning btn-xs">Editar</button></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Cristian Sandy Flores</td>
                  <td>5806034</td>
                  <td>67374241</td>
                  <td>Melchor Perez y América</td>
                  <td><button type="button" class="btn btn-block btn-warning btn-xs">Editar</button></td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Aldo Paul Virreira</td>
                  <td>365200</td>
                  <td>71879632</td>
                  <td>Rene Gabriel Moreno esq. Juan de la Rosa</td>
                  <td><button type="button" class="btn btn-block btn-warning btn-xs">Editar</button></td>
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <a href="registroCliente"><button type="button" class="btn btn-block btn-primary col-sm-2" style="width:100px;height:40px;margin-right: 5px;">Crear Usuario</button></a>
          <!-- /.box -->
        </div>
        </section>
    </div>
@endsection