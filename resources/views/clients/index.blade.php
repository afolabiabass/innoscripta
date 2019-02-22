@extends('layouts.app.extend')

@section('content')
    <div class="my-3 my-md-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form class="card">
                        <div class="card-body">
                            <h3 class="card-title">Clients</h3>

                            <table class="table" id="task-list">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>created at</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                    @forelse($entities as $client)
                                        <tr>
                                            <td>{{ $client->id }}</td>
                                            <td>{{ $client->name }}</td>
                                            <td>{{ $client->created_at }}</td>
                                            <td>
                                                <a href="{{ route('clients.edit', $client->id) }}" class="btn btn-icon btn-primary"><i class="fa fa-edit"></i></a>
                                                <button type="submit" form="delete-form-{{ $client->id }}" class="btn btn-icon btn-danger"><i class="fa fa-trash"></i></button>
                                                <form method="post" id="delete-form-{{ $client->id }}" action="{{ route('clients.destroy', $client->id) }}">
                                                    @csrf @method('DELETE')
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4">No data found</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer">
                            {{ $entities->render() }}
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
