<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->
        {{-- <a class="navbar-brand pt-0" href="{{ route('ativos') }}">
            <img src="{{ asset('argon') }}/img/brand/genius.png" class="navbar-brand-img" alt="...">
        </a> --}}
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    {{-- <div class="col-6 collapse-brand">
                        <a href="{{ route('ativos') }}">
                            <img src="{{ asset('argon') }}/img/brand/genius.png">
                        </a>
                    </div> --}}
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="true" aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body pt-0 pb-0">
                    <div class="text-center">
                        <h5 class="h4">
                            {{-- {{Session::get('cliente')['fantasia']}} --}}
                        </h5>
                        <div class="h5 font-weight-300">
                            {{-- <i class="ni location_pin mr-2"></i>{{Session::get('cliente')['doc']}} --}}
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-3">
            <!-- Navigation -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="">
                        <i class="ni ni-atom text-orange"></i> {{ __('Grid') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">
                        <i class="ni ni-world text-info"></i> {{ __('Produtos') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">
                        <i class="ni ni-key-25 text-primary"></i> {{ __('Categorias') }}
                    </a>
                </li>
                <li class="nav-item">
                    <hr class="my-3">
                    <a class="nav-link" href="{{route('logout')}}">
                        <i class="ni ni-button-power"></i> Sair
                    </a>
                </li>
            </ul>
        </div>
</nav>
