@extends('layouts.master')

@section('content')
    <div class="content-wrapper">
        <section class="content">
        <div class="row">
            <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Registrar Cotización</h3>
            </div>
            <!-- /.box-header -->
<!-- SELECT2 EXAMPLE -->
        <div class="box box-default">
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
            <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Cliente</label>

                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Cliente">
                  </div>
                </div>
                <br><br>
              <!-- /.form-group -->
              <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Fecha Pago</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                  </div>
                </div>
                <br><br>
              <!-- /.form-group -->
              <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Lote</label>

                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Lote">
                  </div>
                </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->

            <div class="col-md-6">
            <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Método Pago</label>

                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Método Pago">
                  </div>
                </div>
                <br><br>
              <!-- /.form-group -->
              <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">N° Cuotas</label>

                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="N° Cuotas">
                  </div>
                </div>
                <br><br>
              <!-- /.form-group -->
              <div class="form-group">
                  <label for="precio" class="col-sm-2 control-label">Precio</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control" id="precio" placeholder="Precio">
                  </div>
                  <div>
                  <label for="precioInicial" class="col-sm-2 control-label">Inicial</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control" id="precioInicial" placeholder="Inicial">
                  </div>
                  </div>
                </div>
                <br><br>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
        <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>Descripción</th>
                  <th>Precio</th>
                  <th>Acción</th>
                </tr>
                <tr>
                  <td>Lote 15 - Juan de la Rosa</td>
                  <td>15297.63</td>
                  <td><button type="button" class="btn btn-block btn-danger btn-xs">Eliminar</button></td>
                </tr>
              </table>
              <br>
              <div class="form-group">
                  <label class="col-sm-2 control-label">TEA: </label>
                  <label style="font-weight:normal">12.6825%</label>
                <div>
                  <label class="col-sm-2 control-label">Cuota Mensual:</label>
                  <label style="font-weight:normal">470.73</label>
                </div>
              <div>
                  <label class="col-sm-2 control-label">Total Inicial:</label>
                  <label style="font-weight:normal">4000.00</label>
              </div>
              <div>
                  <label class="col-sm-2 control-label">Total Venta:</label>
                  <label style="font-weight:normal">15297.63</label>
              </div>
              </div>
              <button type="button" class="btn btn-block btn-primary btn-xs col-sm-2" style="width:80px;height:30px;margin-right: 5px;">Guardar</button>
              <button type="button" class="btn btn-block btn-warning btn-xs" style="width:80px;height:30px;">Cancelar</button>
            </div>
      </div>
      <!-- /.box -->
          </div>
          <!-- /.box -->
        </section>
    </div>
@endsection