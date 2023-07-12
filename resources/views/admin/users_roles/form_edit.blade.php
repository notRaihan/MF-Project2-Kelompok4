@extends('admin.layouts.app')
@section('content')
    <!-- Basic Horizontal form layout section start -->
    <section id="basic-horizontal-layouts">
        <div class="row match-height justify-content-center">
            <div class="col-md-6 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Users Roles #{{ $user_roles->id }}</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-horizontal" action="{{ route('users_roles.update') }}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="name-horizontal">Name</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="name-horizontal"
                                                class="form-control @error('name') is-invalid @enderror" name="name"
                                                placeholder="Users Roles Name"
                                                value="{{ old('name', $user_roles->name) }}" />
                                            @error('name')
                                                <div class="alert alert-danger alert-dismissible show fade mt-2">
                                                    {{ $message }}
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                        aria-label="Close"></button>
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-sm-12 d-flex justify-content-end">
                                            <input type="hidden" name="idedit" value="{{ $user_roles->id }}">
                                            <a href="{{ route('users_roles') }}" class="btn btn-danger me-1 mb-1">Cancel</a>
                                            <button type="submit" class="btn btn-primary me-1 mb-1">
                                                Save
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
