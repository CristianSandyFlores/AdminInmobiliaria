@extends('layouts.master')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
                  <!-- /.row -->
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><strong>Lista de Cotizaciones</strong></h3>

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
                  <th>Cliente</th>
                  <th>CI/DNI</th>
                  <th>Método Pago</th>
                  <th>Fechas</th>
                  <th>Cuotas</th>
                  <th>Inicial</th>
                  <th>Saldo</th>
                  <th>Interés</th>
                  <th>Total Ventas</th>
                  <th>Opciones</th>
                </tr>
                <tr>
                  <td>1</td>
                  <td>Kevin Rodriguez</td>
                  <td>5809634</td>
                  <td>CRÉDITO</td>
                  <td>24-09-2021</td>
                  <td>30</td>
                  <td>20000</td>
                  <td>18000</td>
                  <td>2000</td>
                  <td>32000</td>
                  <td><button type="button" class="btn btn-block btn-success btn-xs">Imprimir</button></td>
                  <td><button type="button" class="btn btn-block btn-warning btn-xs">Editar</button></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Cristian Sandy</td>
                  <td>1860590</td>
                  <td>CRÉDITO</td>
                  <td>02-08-2021</td>
                  <td>30</td>
                  <td>20000</td>
                  <td>18000</td>
                  <td>2000</td>
                  <td>32000</td>
                  <td><button type="button" class="btn btn-block btn-success btn-xs">Imprimir</button></td>
                  <td><button type="button" class="btn btn-block btn-warning btn-xs">Editar</button></td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Alejandra Arancibia</td>
                  <td>6023699</td>
                  <td>CRÉDITO</td>
                  <td>30-07-2021</td>
                  <td>30</td>
                  <td>20000</td>
                  <td>18000</td>
                  <td>2000</td>
                  <td>32000</td>
                  <td><button type="button" class="btn btn-block btn-success btn-xs">Imprimir</button></td>
                  <td><button type="button" class="btn btn-block btn-warning btn-xs">Editar</button></td>
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          <td><button type="button" class="btn btn-block btn-primary btn-lg" style='width:210px; height:45px'>Crear Nueva Cotización</button></td>
        </div>
      </div>
        </section>
    </div>
@endsection