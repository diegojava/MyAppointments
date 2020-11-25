@extends('layouts.panel')

@section('content')
            <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Nuevo medico</h3>
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
              @foreach($errors->all() as $error)   
              <div class="alert alert-danger" role="alert">
              <ul>
                <li>{{ $error }} </li>
              @endforeach
              </ul>
              </div>
            @endif

            <form action="{{ url('doctores') }}" method="post">
            @csrf
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
                </div>
                <div class="form-group">
                    <label for="description">Email</label>
                    <input type="text" name="email" class="form-control" value="{{ old('email') }}"> 
                </div>
                <div class="form-group">
                    <label for="description">Cedula</label>
                    <input type="text" name="cedula" class="form-control" value="{{ old('cedula') }}"> 
                </div>
                <div class="form-group">
                    <label for="description">Direccion</label>
                    <input type="text" name="address" class="form-control" value="{{ old('address') }}"> 
                </div>
                <div class="form-group">
                    <label for="description">Telefono</label>
                    <input type="text" name="phone" class="form-control" value="{{ old('phone') }}"> 
                </div>
                <button type="submit" class="btn btn-primary">
                Guardar
                </button>
            </form>
            
            </div>
          </div>
@endsection