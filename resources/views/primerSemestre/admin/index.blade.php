@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')

    <div class="container-fluid mt--7">
        <div class="row">

        </div>
        <div class="row mt-5">
            <div class="col-xl-12 mb-5 mb-xl-0">
              @if(session()->has('message'))
               <div class="alert alert-success alert-dismissible">
                   <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                   {{session()->get('message')}}
               </div>
              @endif
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Programas</h3>
                            </div>
                            <div class="col text-right">
                              <a href="{{ url('admin/programa/create')}}" class="btn btn-sm btn-primary">Añadir programa</a>
                              <a href="{{ url('admin/materia')}}" class="btn btn-sm btn-info">Ver materias</a>
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
                                    <th scope="col">Créditos</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach ($programas as $programa)
                                <tr>
                                    <th scope="row">
                                        <a href="{{ route('programa.edit', $programa->id) }}" style="color: #525f7f;">{{$programa->nombre}}</a>
                                    </th>
                                    <td>
                                        {{$programa->codigo}}
                                    </td>
                                    <td>
                                        {{$programa->creditos}}
                                    </td>
                                    <td class="table-actions">
                                        <a href="{{ route('programa.edit', $programa->id) }}" class="table-action" data-toggle="tooltip" data-original-title="Editar programa">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('programa.destroy', $programa) }}" method="post" style="display: inline;">
                                            @csrf
                                            @method('delete')
                                            @if($programa->estado == 1)
                                              <a href="#" onclick="confirm('{{ __("¿Esta seguro que desea desactivar el programa?") }}') ? this.parentElement.submit() : ''">
                                              <i class="fa fa-power-off"></i>
                                              <input type="hidden" name="estado" value="0"></input>
                                            @else
                                              <a href="#" onclick="confirm('{{ __("¿Esta seguro que desea Activar el programa?") }}') ? this.parentElement.submit() : ''">
                                              <i class="fa fa-check-circle"></i>
                                              <input type="hidden" name="estado" value="1"></input>
                                            @endif
                                            </a>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer py-4">
                        <nav class="d-flex justify-content-end" aria-label="...">
                            {{ $programas->links() }}
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
