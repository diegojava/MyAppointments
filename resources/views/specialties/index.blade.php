@extends('layouts.panel')

@section('content')
            <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Especialidades</h3>
                </div>
                <div class="col text-right">
                  <a href="{{ url('especialidades/create') }}" class="btn btn-sm btn-success">
                  Nueva especialidad
                  </a>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Opciones</th>
                    
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">
                      Oftalmologia
                    </th>
                    <td>
                      -
                    </td>
                    <td>
                      <button type="button" class="btn btn-sm btn-primary">Editar</a>
                      <button type="button" class="btn btn-sm btn-danger">Eliminar</a>
                    </td>
                  </tr>

                </tbody>
              </table>
            </div>
          </div>
@endsection
