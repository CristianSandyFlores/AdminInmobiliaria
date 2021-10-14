@extends('layouts.master')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
        <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><strong>Lista de SVGs</strong></h3>

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
                  <th>Nombre Urbanización</th>
                  <th>Cuidad</th>
                  <th>Provincia</th>
                  <th>Localidad</th>
                  <th>Editar</th>
                  <th>Eliminar</th>
                </tr>
                <tr>
                  <td>1</td>
                  <td>Valle del Sol</td>
                  <td>Cochabamba</td>
                  <td>Vinto</td>
                  <td>Motecato</td>
                  <td><button type="button" class="btn btn-block btn-success btn-xs">Editar</button></td>
                  <td><button type="button" class="btn btn-block btn-danger btn-xs">Eliminar</button></td>
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          <td><a href="registrarSvg"><button type="button" class="btn btn-block btn-primary btn-lg" style='width:210px; height:45px'>Nuevo Registro</button></a></td>
        </div>
      </div>
        </section>
    </div>        
@endsection