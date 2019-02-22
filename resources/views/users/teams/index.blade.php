@extends('layouts.app.extend')

@section('content')
    <div class="my-3 my-md-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form class="card">
                        <div class="card-body">
                            <h3 class="card-title">Teams</h3>

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
                                @forelse($entities as $team)
                                    <tr>
                                        <td>{{ $team->id }}</td>
                                        <td>{{ $team->name }}</td>
                                        <td>{{ $team->created_at }}</td>
                                        <td>
                                            <a href="{{ route('teams.edit', $team->id) }}" class="btn btn-icon btn-primary"><i class="fa fa-edit"></i></a>
                                            <button type="submit" form="delete-form-{{ $team->id }}" class="btn btn-icon btn-danger"><i class="fa fa-trash"></i></button>
                                            <form method="post" id="delete-form-{{ $team->id }}" action="{{ route('teams.destroy', $team->id) }}">
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
