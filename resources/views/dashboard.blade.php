@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')

    <div class="container-fluid mt--7">
        <div class="row mt-5">
            <div class="col-xl-12 mb-5 mb-xl-0">
              <div class="row">
                <div class="col-xl-3 col-md-6" style="padding-bottom: 3px;" >
                    <div class="card bg-gradient-default border-0">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <span class="h2 font-weight-bold mb-0 text-white">Programas</span>
                                </div>
                            </div>
                            <p class="mt-3 mb-0 text-sm">
                                <a href="{{ url('admin/programa')}}" class="text-nowrap text-white font-weight-600">Ingresar</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-gradient-danger border-0">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <span class="h2 font-weight-bold mb-0 text-white">Materias</span>
                                </div>
                            </div>
                            <p class="mt-3 mb-0 text-sm">
                                <a href="{{ url('admin/materia')}}" class="text-nowrap text-white font-weight-600">Ingresar</a>
                            </p>
                        </div>
                    </div>
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
