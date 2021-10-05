@extends('layouts.master')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
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
                  <label for="cliente" class="col-sm-2 control-label">Cliente</label>

                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="cliente" placeholder="Cliente">
                  </div>
                </div>
                <br><br>
                <!-- /.form-group -->
              <div class="form-group">
                  <label for="comprobante" class="col-sm-2 control-label">Comprobante</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control" id="comprobante" placeholder="Comprob.">
                  </div>
                  <div>
                  <label for="ncomprobante" class="col-sm-2 control-label">N°Compr.</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control" id="ncomprobante" placeholder="N° Compr.">
                  </div>
                  </div>
                </div>
                <br><br>
                                <!-- /.form-group -->
              <div class="form-group">
                  <label for="inicial" class="col-sm-2 control-label">Inicial</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control" id="inicial" placeholder="Inicial">
                  </div>
                  <div>
                  <label for="ncuotas" class="col-sm-2 control-label">N°Cuotas</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control" id="ncuotas" placeholder="ncuotas">
                  </div>
                  </div>
                </div>
                <br><br>
              <!-- /.form-group -->
              <div class="form-group">
                  <label for="lote" class="col-sm-2 control-label">Lote</label>

                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="lote" placeholder="Lote">
                  </div>
                </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->

            <div class="col-md-6">
            <div class="form-group">
                  <label for="fechaVenta" class="col-sm-2 control-label">Fecha Venta</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="fechaVenta" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                  </div>
                </div>
                <br><br>
              <!-- /.form-group -->
              <div class="form-group">
                  <label for="metodoPago" class="col-sm-2 control-label">Método Pago</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="metodoPago" placeholder="Método Pago">
                  </div>
                </div>
                <br><br>
              <!-- /.form-group -->
              <div class="form-group">
                  <label for="fechaPago" class="col-sm-2 control-label">Fecha de Pago</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="fechaPago" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                  </div>
                </div>
                <br><br>
              <!-- /.form-group -->
              <div class="form-group">
                  <label for="precio" class="col-sm-2 control-label">Precio</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="precio" placeholder="Precio">
                  </div>
                </div>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <br><br>
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
                  <label class="col-sm-2 control-label">Total Venta: </label>
                  <label style="font-weight:normal">15297.63</label>
              </div>
              <button type="button" class="btn btn-block btn-primary btn-xs col-sm-2" style="width:80px;height:30px;margin-right: 5px;">Guardar</button>
              <a href="javascript:history.back()"><button type="button" class="btn btn-block btn-warning btn-xs" style="width:80px;height:30px;">Cancelar</button></a>
            </div>
      </div>
      <!-- /.box -->
          </div>
          <!-- /.box -->
        </section>
    </div>
@endsection