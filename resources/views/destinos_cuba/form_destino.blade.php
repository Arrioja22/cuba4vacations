@extends('admin_cuba4vacations.plantilla_admin')
@section('content')
 <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Formulario</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Formulario</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6 offset-md-3">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Crear Destino</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{url('/crear-destino')}}" method="POST">
                
                {!! csrf_field() !!}
                <div class="card-body">
                  <div class="form-group">
                    <label for="destino">Nombre Destino</label>
                    <input type="text" class="form-control {{ $errors->has('destino') ? ' is-invalid' : '' }}" id="destino" placeholder="Nombre del destino" name="destino">
                    @if ($errors->has('destino'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('destino') }}</strong>
                            </span>
                          @endif
                  </div>
                  <div class="form-group">
                    <label for="descripcion">Texto Promocion</label>
                    <input type="text" class="form-control {{ $errors->has('descripcion') ? ' is-invalid' : '' }}" id="descripcion" placeholder="promocion..." name="descripcion">
                    @if ($errors->has('descripcion'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('descripcion') }}</strong>
                            </span>
                          @endif
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Agregar</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
     </div> 
    </section>
    <!-- /.content -->
@endsection