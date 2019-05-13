@extends('admin_cuba4vacations.plantilla_admin')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Paquetes</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/Dashboard">Home</a></li>
              <li class="breadcrumb-item active">Paquetes</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12 boton">
          <a href="/Crear" class="btn btn-primary">Crear</a>
        </div>
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Hover Data Table</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Destino</th>
                  <th>Imagen</th>
                  <th>Nombre paquete</th>
                  <th>Precio</th>
                  <th>Cantidad Personas</th>
                  <th>Duracion</th>
                  <th>Traslado Aeropuerto</th>
                  <th>Traslado Extra</th>
                  <th>Hospedaje</th>
                  <th>Desayuno</th>
                  <th>Paladares</th>
                  <th>Asistencia Viaje</th>
                  <th>Cena Bienvenida</th>
                  <th>Tour</th>
                  <th>Show Nocturno</th>
                  <th></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>1</td>
                  <td></td>
                  <td>Habana</td>
                  <td>Cambio diferente</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                </tbody>
                <tfoot>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection