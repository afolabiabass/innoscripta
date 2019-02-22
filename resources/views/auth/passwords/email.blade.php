@extends('layouts.auth.extend')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col col-login mx-auto">
                <div class="text-center mb-6">
                    <img src="./demo/brand/tabler.svg" class="h-6" alt="">
                </div>
                <form class="card" action="{{ url('password/email') }}" method="post">
                    <div class="card-body p-6">
                        <div class="card-title">Reset password</div>
                        <div class="form-group">
                            <label class="form-label">Email address</label>
                            <input type="email" class="form-control" placeholder="Enter email">
                        </div>
                        <div class="form-footer">
                            <button type="submit" class="btn btn-primary btn-block">Send email</button>
                        </div>
                    </div>
                </form>
                <div class="text-center text-muted">
                    Already have account? <a href="{{ route('login') }}">Sign in</a>
                </div>
            </div>
        </div>
    </div>
@endsection
