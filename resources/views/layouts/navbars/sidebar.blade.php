<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->
        <a class="navbar-brand pt-0" href="{{ route('home') }}">
            <img src="{{ asset('argon') }}/img/brand/black.png" class="navbar-brand-img" alt="...">
        </a>
        <!-- User -->
        <ul class="nav align-items-center d-md-none">
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media align-items-center">
                        <span class="avatar avatar-sm rounded-circle">
                        <img alt="Image placeholder" src="{{ asset('argon') }}/img/theme/team-1-800x800.jpg">
                        </span>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                    <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0">{{ __('Bienvenido!') }}</h6>
                    </div>
                    <a href="{{ route('profile.edit') }}" class="dropdown-item">
                        <i class="ni ni-single-02"></i>
                        <span>{{ __('Mi perfil') }}</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="ni ni-user-run"></i>
                        <span>{{ __('Cerrar sesión') }}</span>
                    </a>
                </div>
            </li>
        </ul>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('argon') }}/img/brand/black.png">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Form -->
            <form class="mt-4 mb-3 d-md-none">
                <div class="input-group input-group-rounded input-group-merge">
                    <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="{{ __('Search') }}" aria-label="Search">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <span class="fa fa-search"></span>
                        </div>
                    </div>
                </div>
            </form>
            <!-- Navigation -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">
                        <i class="ni ni-tv-2 text-primary"></i> {{ __('Inicio') }}
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#navbar-examples" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                        <i class="ni ni-key-25 text-info"></i>
                        <span class="nav-link-text">{{ __('Administración') }}</span>
                    </a>

                    <div class="collapse" id="navbar-examples">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('profile.edit') }}">
                                    {{ __('Perfil del usuario') }}
                                </a>
                            </li>
                            @if (Auth::user()->rol_id == 1)
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.index') }}">
                                    {{ __('Gestión de usuarios') }}
                                </a>
                            </li>
                            @endif
                        </ul>
                    </div>
                </li>
            </ul>
            <!-- Divider -->
            <hr class="my-3">
            <!-- Heading -->
            <h6 class="navbar-heading text-muted">Documentación</h6>
            <!-- Navigation -->
            <ul class="navbar-nav mb-md-3">
              <li class="nav-item">
                  <a class="nav-link" href="#navbar-document"data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-document">
                      <i class="fa fa-file" aria-hidden="true"></i>
                      <span class="nav-link-text">{{ __('Aplicación') }}</span>
                  </a>

                  <div class="collapse" id="navbar-document">
                      <ul class="nav nav-sm flex-column">
                          <li class="nav-item">
                              <a class="nav-link" href="{{ url('admin/document/programas') }}">
                                  {{ __('Programas ') }}
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="{{ url('admin/document/materias') }}">
                                  {{ __('Materias') }}
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="{{ url('admin/document/grupo-materias') }}">
                                  {{ __('Grupo de materias') }}
                              </a>
                          </li>
                      </ul>
                  </div>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#navbar-dev"data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-dev">
                      <i class="fa fa-terminal" aria-hidden="true"></i>
                      <span class="nav-link-text">{{ __('Desarrollo') }}</span>
                  </a>

                  <div class="collapse" id="navbar-dev">
                      <ul class="nav nav-sm flex-column">
                          <li class="nav-item">
                              <a class="nav-link" href="{{ url('admin/document/dev') }}">
                                  {{ __('Implementación') }}
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="{{ url('admin/document/info') }}">
                                  {{ __('Acerca de ') }}
                              </a>
                          </li>
                      </ul>
                  </div>
              </li>
            </ul>
        </div>
    </div>
</nav>
