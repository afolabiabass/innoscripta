<div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3 ml-auto">
                <form class="input-icon my-3 my-lg-0">
                    <input type="search" class="form-control header-search" placeholder="Search&hellip;" tabindex="1">
                    <div class="input-icon-addon">
                        <i class="fa fa-search"></i>
                    </div>
                </form>
            </div>
            <div class="col-lg order-lg-first">
                <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
                    <li class="nav-item">
                        <a href="/" class="nav-link"><i class="fa fa-home"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('clients.index') }}" class="nav-link"><i class="fa fa-briefcase"></i> Clients</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('teams.index') }}" class="nav-link"><i class="fa fa-users"></i> Teams</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('users.index') }}" class="nav-link"><i class="fa fa-user"></i> Users</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('tasks.index') }}" class="nav-link"><i class="fa fa-list"></i> Tasks</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
