@extends('layouts.app.extend')

@section('content')
    <div class="my-3 my-md-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="{{ route('clients.store') }}" method="post" class="card">
                        @csrf
                        <div class="card-body">
                            <h3 class="card-title">New Client</h3>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label class="form-label">Name</label>
                                        <input type="text" class="form-control" name="name">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-primary">Save Client</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
