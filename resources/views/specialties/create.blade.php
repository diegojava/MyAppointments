@extends('layouts.panel')

@section('content')
            <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Nueva especialidad</h3>
                </div>
                <div class="col text-right">
                  <a href="{{ url('especialidades') }}" class="btn btn-sm btn-default">
                  Cancelar
                  </a>
                </div>
              </div>
            </div>
            <div class="card-body">
            <form action="{{ url('especialidades') }}" method="post">
            @csrf
                <div class="form-group">
                    <label for="name">Nombre de la especialidad</label>
                    <input id="name" type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="description">Descripcion</label>
                    <input id="description" type="text" name="description" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">
                Guardar
                </button>
            </form>
            
            </div>
          </div>
@endsection
