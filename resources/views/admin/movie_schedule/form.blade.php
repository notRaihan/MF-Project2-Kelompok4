@extends('admin.layouts.app')
@section('content')
    <!-- Basic Horizontal form layout section start -->
    <section id="basic-horizontal-layouts">
        <div class="row match-height justify-content-center">
            <div class="col-md-6 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Create Movie Schedule</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-horizontal" action="{{ route('movie_schedule.store') }}" method="POST">
                                @csrf
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="name-horizontal">Movie Code</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <select name="movie_id" class="form-select">
                                                @foreach ($movies as $movie)
                                                    <option value="{{ $movie->id }}">{{ $movie->code }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="name-horizontal">Cinema Code</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <select name="cinema_id" class="form-select">
                                                @foreach ($cinemas as $cinema)
                                                    <option value="{{ $cinema->id }}">{{ $cinema->code }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="name-horizontal">Starts</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="datetime-local" id="name-horizontal"
                                                class="form-control  @error('starts') is-invalid @enderror" name="starts"
                                                placeholder="type.." value="{{ old('starts') }}" />
                                            @error('starts')
                                                <div class="alert alert-danger alert-dismissible show fade mt-2">
                                                    {{ $message }}
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                        aria-label="Close"></button>
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label for="name-horizontal">Ends</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="datetime-local" id="name-horizontal"
                                                class="form-control  @error('ends') is-invalid @enderror" name="ends"
                                                placeholder="type.." {{ old('ends') }} />
                                            @error('ends')
                                                <div class="alert alert-danger alert-dismissible show fade mt-2">
                                                    {{ $message }}
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                        aria-label="Close"></button>
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label for="name-horizontal">Price</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="number" id="name-horizontal"
                                                class="form-control  @error('price') is-invalid @enderror" name="price"
                                                placeholder="type.." {{ old('price') }} />
                                            @error('price')
                                                <div class="alert alert-danger alert-dismissible show fade mt-2">
                                                    {{ $message }}
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                        aria-label="Close"></button>
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-sm-12 d-flex justify-content-end">
                                            <a href="{{ route('movie_schedule') }}"
                                                class="btn btn-danger me-1 mb-1">Cancel</a>
                                            <button type="submit" class="btn btn-primary me-1 mb-1">
                                                Create
                                            </button>
                                            <button type="reset" class="btn btn-light-secondary me-1 mb-1">
                                                Reset
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- // Basic Horizontal form layout section end -->
@endsection
