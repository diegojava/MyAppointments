@extends('layouts.panel')

@section('content')
            <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Medicos</h3>{{ $counts }}
                </div>
                <div class="col text-right">
                  <a href="{{ url('doctores/create') }}" class="btn btn-sm btn-success">
                  Nuevo medico
                  </a>
                </div>
              </div>
            </div>

            @if(session('notification'))  
              <div class="card-body">
                <div class="alert alert-success" role="alert">
                  {!! session('notification') !!}
                </div>
              </div>
            @endif

            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Email</th>
                    <th scope="col">Cedula</th>
                    <th scope="col">Opciones</th>
                    
                  </tr>
                </thead>
                <tbody>
                @foreach ($doctors as $doctor)
                  <tr>
                    <th scope="row">
                      {{ $doctor->name }}
                    </th>
                    <td>
                    {{ $doctor->email }}
                    </td>
                    <td>
                    {{ $doctor->cedula }}
                    </td>
                    <td>
                      
                      <form action="{{ url('doctores/'.$doctor->id) }}" method="POST">
                      <a href="{{ url('doctores/'.$doctor->id.'/edit') }}" class="btn btn-sm btn-primary">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                      </form>
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
            </div>
          </div>
@endsection