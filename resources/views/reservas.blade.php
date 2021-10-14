@extends('layouts.master')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
        <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><strong>Lista de Reservas</strong></h3>

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
                  <th>Fecha</th>
                  <th>Total</th>
                  <th>Estado</th>
                  <th>Contrato</th>
                  <th>Editar</th>
                  <th>Anular</th>
                </tr>
                <tr>
                  <td>1</td>
                  <td>Caleb Yapura</td>
                  <td>21654654</td>
                  <td>CRÉDITO</td>
                  <td>02-06-2021</td>
                  <td>30000.00</td>
                  <td>ENTREGADO</td>
                  <td><button type="button" class="btn btn-block btn-info btn-xs">Contrato</button></td>
                  <td><button type="button" class="btn btn-block btn-success btn-xs">Editar</button></td>
                  <td><button type="button" class="btn btn-block btn-danger btn-xs">Anular</button></td>
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
        </section>
    </div>        
@endsection