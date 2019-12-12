@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')

    <div class="container-fluid mt--7">
        <div class="row">
        </div>
        <div class="row mt-5">
            <div class="col-xl-12 mb-5 mb-xl-0">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Materias</h3>
                            </div>
                            <div class="col text-right">
                              <a href="{{ url('admin/materia/create') }}" class="btn btn-sm btn-primary">Añadir Materia</a>
                            </div>

                            <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#exampleModal">
                              Editar Materia
                            </button>

                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Buscar materia a editar</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                    <form action="{{ url('admin/buscar/materias/')}}" method="post">
                                        @csrf
                                    <div class="modal-body">
                                          <div class="form-group">
                                            <label for="codigo">Código completo</label>
                                            <input type="text" class="form-control" id="codigo" name="codigo" aria-describedby="codigo" placeholder="Ingrese el código sin guiones">
                                            <small id="codigo" class="form-text text-muted">Ejemplo: SPUB4109</small>
                                          </div>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                      <button type="submit" class="btn btn-primary">Buscar</button>
                                    </div>
                                  </form>
                                </div>
                              </div>
                            </div>

                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Código</th>
                                    <th scope="col">Programa</th>
                                    <th scope="col">Periodo</th>
                                    <th scope="col">Creditos</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach ($materias as $materia)
                                <tr>
                                    <th scope="row">
                                        <a href="{{ url('admin/materia/'.$materia->id) }}" style="color: #525f7f;">{{$materia->nombre}}</a>
                                    </th>
                                    <td>
                                        {{$materia->codigocompleto}}
                                    </td>
                                    <td>
                                        {{$materia->programa}}
                                    </td>
                                    <td>
                                        {{$materia->periodo}}
                                    </td>
                                    <td>
                                        {{$materia->creditos}}
                                    </td>
                                    <td class="table-actions">
                                        <a href="{{ url('admin/materia/'.$materia->id.'/edit') }}" class="table-action" data-toggle="tooltip" data-original-title="Editar materia">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer py-4">
                        <nav class="d-flex justify-content-end" aria-label="...">
                            {{ $materias->links() }}
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
