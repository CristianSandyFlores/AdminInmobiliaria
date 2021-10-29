@extends('layouts.master')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
        <div class="row">
            <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Registrar SVG</h3>
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
                  <label for="ciudad" class="col-sm-4 control-label">Ciudad</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="ciudad" placeholder="Introduzca la ciudad">
                  </div>
                </div>
                <br><br>
              <!-- /.form-group -->
              <div class="form-group">
                  <label for="localidad" class="col-sm-4 control-label">Localidad</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="localidad" placeholder="Introduzca la localidad">
                  </div>
                </div>
                <br><br>
                <div class="form-group">
                  <label for="svg" class="col-sm-4 control-label">SVG</label>

                  <div class="col-sm-8">
                    <input type="file" class="form-control" id="svg" placeholder="Subir SVG">
                  </div>
                </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->

            <div class="col-md-6">
            <div class="form-group">
                  <label for="provincia" class="col-sm-4 control-label">Provincia</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="provincia" placeholder="Introduzca la provincia">
                  </div>
                </div>
                <br><br>
              <!-- /.form-group -->
              <div class="form-group">
                  <label for="nombreUrbanizacion" class="col-sm-4 control-label">Nombre Urbanización</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="nombreUrbanizacion" placeholder="Introduzca el nombre de la urbanización">
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
                <a href="administrarSvg"><button type="button" class="btn btn-block btn-primary btn-xs col-sm-2" style="width:80px;height:30px;margin-right: 5px;">Guardar</button>
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