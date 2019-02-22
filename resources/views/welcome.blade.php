@extends('layouts.app.extend')

@section('content')
    <div class="my-3 my-md-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form class="card">
                        <div class="card-body">
                            <h3 class="card-title">User Login</h3>

                            <form method="get">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="form-label">Users</label>
                                            <select name="users" class="form-control custom-select">
                                                <option value=""></option>
                                                @foreach($users as $key => $value)
                                                    <option value="{{ $key }}">{{ $value }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="form-label">Teams</label>
                                            <select name="teams" class="form-control custom-select">
                                                <option value=""></option>
                                                @foreach($teams as $key => $value)
                                                    <option value="{{ $key }}">{{ $value }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="form-label">After Date</label>
                                            <input type="text" name="after_date" class="form-control date-picker" autocomplete="off" maxlength="10">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="form-label">Before Date</label>
                                            <input type="text" name="before_date" class="form-control date-picker" autocomplete="off" maxlength="10">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <button type="submit" class="btn btn-primary">Apply Filter</button>
                                    </div>
                                </div>
                            </form>

                            <table class="table" id="task-list">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>User</th>
                                    <th>Team</th>
                                    <th>Login at</th>
                                    <th>Logout at</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($logins as $login)
                                    <tr>
                                        <td>{{ $login->id }}</td>
                                        <td>{{ $login->user->name }}</td>
                                        <td>{{ $login->user->team->name }}</td>
                                        <td>{{ $login->login_at }}</td>
                                        <td>{{ $login->logout_at }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center">No data found</td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer">
                            {{ $logins->render() }}
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $( function() {
            $( ".date-picker" ).datepicker();
        } );
    </script>
@endpush
@push('styles')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
@endpush
