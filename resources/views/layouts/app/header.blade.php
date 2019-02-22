<div class="header py-4">
    <div class="container">
        <div class="d-flex">
            <a class="header-brand" href="{{ url('/') }}">
                <img src="{{ asset('assets/images/innoscripta-logo.png') }}" class="header-brand-img" alt="tabler logo">
            </a>
            @auth
            <div class="d-flex order-lg-2 ml-auto">
                <div class="dropdown">
                    <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
                        <span class="avatar" style="background-image: {{ asset('assets/images/500.svg') }}"></span>
                        <span class="ml-2 d-none d-lg-block">
                      <span class="text-default">{{ auth()->user()->name }}</span>
                    </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                        <button type="submit" class="dropdown-item" form="logout-form">
                            <i class="dropdown-icon fa fa-log-out"></i> Log out
                        </button>
                        <form method="post" id="logout-form" action="{{ url('logout') }}">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
            @endauth
            <a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse">
                <span class="header-toggler-icon"></span>
            </a>
        </div>
    </div>
</div>
