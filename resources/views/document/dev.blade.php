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
                                <h3 class="mb-0">Implementación</h3>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                      <div class="row">
                        <div class="col">
                          <h3><a href="#instalación" style="color: #32325d;">Instalación</a></h3>
                          <h5>Requerimientos del servidor</h5>
                            <ul>
                              <li>PHP >= 7.3.9</li>
                              <li>Microsoft Drivers for PHP for SQL Server o (MySQL)</li>
                            </ul>
                          <h5>Instalación y configuración</h5>
                          <p>La documentación respectiva a la instalación se encuentra en su repositorio de Github.</p>
                          <p>
                            <a class="mr-4" href="https://github.com/UniandesDSIT/AyR-Materias-Primer-Semestre" aria-label="Homepage" data-ga-click="(Logged out) Header, go to homepage, icon:logo-wordmark">
                              <svg height="32" class="octicon octicon-mark-github text-white" viewBox="0 0 16 16" version="1.1" width="32" aria-hidden="true"><path fill-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z"></path></svg>
                            </a>
                            <a href="https://github.com/UniandesDSIT/AyR-Materias-Primer-Semestre" style="color: #3d1ee9;" >https://github.com/UniandesDSIT/AyR-Materias-Primer-Semestre</a></p>

                          <h3><a href="#arquitectura" style="color: #32325d;">Arquitectura</a></h3>
                          QA
                          <a href="{{ asset('arquitectura/diagrama_qa.png')}}" ><img src="{{ asset('arquitectura/diagrama_qa.png')}}"  style="width: 35%;"></a>
                          <a href="{{ asset('arquitectura/diagrama_prd.png')}}" ><img src="{{ asset('arquitectura/diagrama_prd.png')}}" style="width: 35%;"></a>
                          Prod

                        </div>
                      </div>
                    </div>
                    <div class="card-footer py-4">
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
