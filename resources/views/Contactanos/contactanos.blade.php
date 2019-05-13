@extends('admin_cuba4vacations.plantilla_admin')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Seccion Contactos</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/Dashboard">Home</a></li>
              <li class="breadcrumb-item active">Contactos</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12 boton">
          <a href="/Contactanos" class="btn btn-primary">Envia Comentario</a>
        </div>
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Seccion Contactos</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Telefono</th>
                  <th>Comentario</th>
                  <th></th>
                </tr>
                </thead>
                <tbody>
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