@extends('admin_cuba4vacations.plantilla_admin')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Destino</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/Dashboard">Home</a></li>
              <li class="breadcrumb-item active">Destinos</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12 boton">
          <a href="/Crear_Destino" class="btn btn-primary">Crear</a>
        </div>
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Destinos</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Destino</th>
                  <th>Texto Promocion</th>
                  <th></th>
                </tr>
                </thead>
                <tbody>
                  @foreach($destinos as $destino)
                <tr>
                  <td>{{$destino->id}}</td>
                  <td>{{$destino->nombre_destino}}</td>
                  <td>{{$destino->descripcion}}</td>
                  <td>
                     <form method="POST" action="{{ url('/Destino/'.$destino->id)}}">
                        {!! csrf_field() !!}
                        {{method_field('DELETE')}}
                        <a href="{{ url('/Destino/'.$destino->id.'/edit')}}"class="btn btn-primary"><i class="fa fa-edit"></i></a>
                        <button type="submit" class="btn btn-danger"><i class="fa fa-times"></i></button>
                      </form>
                  </td>
                </tr>
                @endforeach
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