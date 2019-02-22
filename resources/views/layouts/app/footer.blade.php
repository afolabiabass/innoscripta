{{-- .page-main close --}}
</div>
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-6 col-md-3">
                        <ul class="list-unstyled mb-0">
                            <li><a href="{{ route('clients.index') }}">Clients</a></li>
                            <li><a href="{{ route('tasks.index') }}">Tasks</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-md-3">
                        <ul class="list-unstyled mb-0">
                            <li><a href="{{ route('teams.index') }}">Teams</a></li>
                            <li><a href="{{ route('users.index') }}">Users</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mt-4 mt-lg-0">
                Innoscripta Time Tracker
            </div>
        </div>
    </div>
</div>
<footer class="footer">
    <div class="container">
        <div class="row align-items-center flex-row">
            <div class="col-12 col-lg-auto mt-3 mt-lg-0 text-center">
                Copyright © 2018 <a href=".">{{ env('APP_NAME') }}</a>. Built by <a href="https://Innoscripta.com" target="_blank">Innoscripta.com</a> All rights reserved.
            </div>
        </div>
    </div>
</footer>
@include('layouts.common.scripts')
{{-- .page close --}}
</div>
</body>
</html>
