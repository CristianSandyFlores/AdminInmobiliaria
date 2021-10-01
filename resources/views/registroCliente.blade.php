@extends('layouts.master')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
        <div class="row">
            <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Registrar Cliente</h3>
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
                  <label for="primerNombreCliente" class="col-sm-4 control-label">Primer Nombre</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="primerNombreCliente" placeholder="Introduzca su primer nombre">
                  </div>
                </div>
                <br><br>
              <!-- /.form-group -->
              <div class="form-group">
                  <label for="apellidoPaternoCliente" class="col-sm-4 control-label">Apellido Paterno</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="apellidoPaternoCliente" placeholder="Introduzca su apellido paterno">
                  </div>
                </div>
                <br><br>
              <!-- /.form-group -->
              <div class="form-group">
                  <label for="ciCliente" class="col-sm-4 control-label">C.I.</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="ciCliente" placeholder="Introduzca su c.i.">
                  </div>
                </div>
                <br><br>
                <div class="form-group">
                  <label for="telefonoCliente" class="col-sm-4 control-label">Teléfono</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="telefonoCliente" placeholder="Introduzca su teléfono">
                  </div>
                </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->

            <div class="col-md-6">
            <div class="form-group">
                  <label for="segundoNombreCliente" class="col-sm-4 control-label">Segundo Nombre</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="segundoNombreCliente" placeholder="Introduzca su segundo nombre">
                  </div>
                </div>
                <br><br>
              <!-- /.form-group -->
              <div class="form-group">
                  <label for="apellidoMaternoCliente" class="col-sm-4 control-label">Apellido Materno</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="apellidoMaternoCliente" placeholder="Introduzca su apellido materno">
                  </div>
                </div>
                <br><br>
              <!-- /.form-group -->
              <div class="form-group">
                  <label for="direccionCliente" class="col-sm-4 control-label">Dirección</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="direccionCliente" placeholder="Introduzca su direción">
                  </div>
                </div>
                <br><br>
                <div class="form-group">
                  <label for="correoCliente" class="col-sm-4 control-label">Correo Electrónico</label>

                  <div class="col-sm-8">
                    <input type="email" class="form-control" id="correoCliente" placeholder="Introduzca su correo electrónico">
                  </div>
                </div>
              <!-- /.form-group -->
            </div>
            <div class="col-md-6">
                <div class="form-group">
                <button type="button" class="btn btn-block btn-primary btn-xs col-sm-2" style="width:80px;height:30px;margin-right: 5px;">Guardar</button>
                <a href="lotes"><button type="button" class="btn btn-block btn-warning btn-xs" style="width:80px;height:30px;margin-right: 5px;">Cancelar</button></a>
                </div>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
              
      </div>
      <!-- /.box -->
          </div>
          <!-- /.box -->

        </section>

    </div>
@endsection