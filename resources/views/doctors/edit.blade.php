@extends('layouts.panel')

@section('content')
            <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Editar medico</h3>
                </div>
                <div class="col text-right">
                  <a href="{{ url('doctores') }}" class="btn btn-sm btn-default">
                  Cancelar
                  </a>
                </div>
              </div>
            </div>
            <div class="card-body">

            @if ($errors->any())
               
              <div class="alert alert-danger" role="alert">
              @foreach($errors->all() as $error)  
              <ul>
                <li>{{ $error }} </li>
              @endforeach
              </ul>
              </div>
            @endif

            <form action="{{ url('doctores/'.$doctor->id) }}" method="post">
            @csrf
            @method('PUT')
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name', $doctor->name) }}" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control" value="{{ old('email', $doctor->email) }}"> 
                </div>
                <div class="form-group">
                    <label for="cedula">Cedula</label>
                    <input type="text" name="cedula" class="form-control" value="{{ old('cedula', $doctor->cedula) }}"> 
                </div>
                <div class="form-group">
                    <label for="direccion">Direccion</label>
                    <input type="text" name="address" class="form-control" value="{{ old('address', $doctor->address) }}"> 
                </div>
                <div class="form-group">
                    <label for="telefono">Telefono</label>
                    <input type="text" name="phone" class="form-control" value="{{ old('phone', $doctor->phone) }}"> 
                </div>
                 <div class="form-group">
                    <label for="password">Contraseña <em>Ingrese un valor solo si desea cambiar la contrasena</em></label>
                    <input type="text" name="password" class="form-control" value=""> 
                </div>
                <button type="submit" class="btn btn-primary">
                Guardar
                </button>
            </form>
            
            </div>
          </div>
@endsection