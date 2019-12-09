@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')

    <div class="container-fluid mt--7">
        <div class="row">

        </div>
        <div class="row mt-5">
            <div class="col-xl-12 mb-5 mb-xl-0">
              <center>
              <div class="col-xl-6 order-xl-2">
                              <div class="card card-profile">
                                  <img src="{{ asset('argon/img/avatar/logo.png')}}" alt="Image placeholder" class="card-img-top">

                                  <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                                      <div class="d-flex justify-content-between">
                                          <a href="https://dsit.uniandes.edu.co/" class="btn btn-sm btn-info mr-4" target="_blank">Sitio web</a>
                                          <a href="https://uniandes.edu.co/" class="btn btn-sm btn-default float-right" target="_blank">Uniandes</a>
                                      </div>
                                  </div>
                                  <div class="card-body pt-0">
                                      <div class="text-center">
                                          <h5 class="h3">
                                              Desarrollado por la DSIT 2019
                                          </h5>
                                          <div class="h5 font-weight-300">
                                              <i class="ni location_pin mr-2"></i>Materia de primer semestre<br>versión 1.0.0
                                          </div>
                                          <div class="h5 mt-4">
                                              <i class="ni business_briefcase-24 mr-2"></i>Solución para los alumnos de primer semestre
                                          </div>
                                          <div>
                                              <i class="ni education_hat mr-2"></i>Universidad de los Andes
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                        </center>
            </div>
        </div>

        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
