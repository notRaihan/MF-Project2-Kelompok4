@extends('admin.layouts.app')
@section('content')
    <section class="section">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="row" id="table-hover-row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Movies Schedule Table</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body py-1">
                            <a href="{{ route('movie_schedule.create') }}" class="btn btn-primary">Create</a>
                        </div>
                        <!-- table hover -->
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Movie Code</th>
                                        <th>Cinema Code</th>
                                        <th>Starts</th>
                                        <th>Ends</th>
                                        <th>Price</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($movies_schedule as $movie)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $movie->movie->code }}</td>
                                            <td>{{ $movie->cinema->code }}</td>
                                            <td>{{ $movie->starts }}</td>
                                            <td>{{ $movie->ends }}</td>
                                            <td>{{ $movie->price }}</td>
                                            <td>
                                                <a href="{{ route('movie_schedule.edit', $movie->id) }}"
                                                    class="btn btn-warning">Edit</a>
                                                <form action="{{ route('movie_schedule.destroy', $movie->id) }}"
                                                    method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger"
                                                        onclick="return confirm('Are you sure?')">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
