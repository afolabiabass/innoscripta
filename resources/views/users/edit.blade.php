@extends('layouts.app.extend')

@section('content')
    <div class="my-3 my-md-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="{{ route('users.update', $entity->id) }}" method="post" class="card">
                        @csrf @method('PUT')
                        <div class="card-body">
                            <h3 class="card-title">Edit Team</h3>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label class="form-label">Name</label>
                                        <input type="text" class="form-control" placeholder="Company" value="{{ $entity->name }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-primary">Update User</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
