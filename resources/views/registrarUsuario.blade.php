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
                  <label for="primerNombre" class="col-sm-4 control-label">Primer Nombre</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="primerNombre" placeholder="Introduzca su primer nombre">
                  </div>
                </div>
                <br><br>
              <!-- /.form-group -->
              <div class="form-group">
                  <label for="segundoNombre" class="col-sm-4 control-label">Segundo Nombre</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="segundoNombre" placeholder="Introduzca su segundo nombre">
                  </div>
                </div>
                <br><br>
              <!-- /.form-group -->
              <div class="form-group">
                  <label for="apellidoPaterno" class="col-sm-4 control-label">Apellido Paterno</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="apellidoPaterno" placeholder="Introduzca su apellido paterno">
                  </div>
                </div>
                <br><br>
                <div class="form-group">
                  <label for="apellidoMaterno" class="col-sm-4 control-label">Apellido Materno</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="apellidoMaterno" placeholder="Introduzca su apellido materno">
                  </div>
                </div>
                <br><br>
                <div class="form-group">
                  <label for="ci" class="col-sm-4 control-label">C.I.</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="ci" placeholder="Introduzca su c.i.">
                  </div>
                </div>
                <br><br>
                <div class="form-group">
                  <label for="telefono" class="col-sm-4 control-label">Teléfono</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="telefono" placeholder="Introduzca su teléfono">
                  </div>
                </div>
                <br><br>
                <div class="form-group">
                  <label for="direccion" class="col-sm-4 control-label">Dirección</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="direccion" placeholder="Introduzca su direción">
                  </div>
                </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
            
            <div class="col-md-6">
            <div class="form-group">
                  <label for="correo" class="col-sm-4 control-label">Correo Electrónico</label>
                  <div class="col-sm-8">
                    <input type="email" class="form-control" id="correo" placeholder="Introduzca su correo electrónico">
                  </div>
                </div>
                <br><br>
                <div class="form-group">
                  <label for="usuario" class="col-sm-4 control-label">Usuario</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="usuario" placeholder="Introduzca su usuario">
                  </div>
                </div>
                <br><br>
              <!-- /.form-group -->
              <div class="form-group">
                  <label for="contraseña" class="col-sm-4 control-label">Contraseña</label>

                  <div class="col-sm-8">
                    <input type="password" class="form-control" id="contraseña" placeholder="Introduzca su contraseña">
                  </div>
                </div>
                <br><br>
              <!-- /.form-group -->
              <div class="form-group">
                  <label for="repetirContraseña" class="col-sm-4 control-label">Repetir Contraseña</label>

                  <div class="col-sm-8">
                    <input type="password" class="form-control" id="repetirContraseña" placeholder="Repita su contraseña">
                  </div>
                </div>
                <br><br>
                <div class="form-group">
                  <label for="fotografia" class="col-sm-4 control-label">Fotografía</label>

                  <div class="col-sm-8">
                    <input type="file" class="form-control" id="fotografia" placeholder="Subir fotografía">
                  </div>
                </div>
                <br><br>
                <div class="form-group">
                  <label for="rol" class="col-sm-4 control-label">Rol</label>

                  <div class="col-sm-8">
                  <select class="form-control" id="rol">
                    <option>Agente</option>
                    <option>Cliente</option>
                    <option>Administrador</option>
                  </select>
                  </div>
                </div>
                <br><br>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
          </div>
          <br>
          <div class="col-md-6">
                <div class="form-group">
                <button type="button" class="btn btn-block btn-primary btn-xs col-sm-2" style="width:80px;height:30px;margin-right: 5px;">Guardar</button>
                <a href="javascript:history.back()"><button type="button" class="btn btn-block btn-warning btn-xs" style="width:80px;height:30px;margin-right: 5px;">Cancelar</button></a>
                </div>
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