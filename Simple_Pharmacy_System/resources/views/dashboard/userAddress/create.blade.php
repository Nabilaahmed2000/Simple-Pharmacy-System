<!-- extand alyout.blade.php  -->
@extends('dashboard.layout.layout')

<!-- yeild body -->
@section('body')
    <div class="content-wrapper">
        <!-- /.content-header -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>User Address</h1>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Users</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">

                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Add User Address</h3>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('userAddress.store') }}" method="POST">
                                    @csrf

                                    <div class="input-group mb-3">
                                        <select class="form-control  @error('user_id') is-invalid @enderror" name="user_id">
                                            @foreach ($users as $user)
                                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                                            @endforeach
                                        </select>
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                                        </div>
                                    </div>
                                    <div class="input-group mb-3">
                                        <select class="form-control  @error('area_id') is-invalid @enderror" name="area_id">
                                            @foreach ($areas as $area)
                                                <option value="{{ $area->id }}">{{ $area->name }}</option>
                                            @endforeach
                                        </select>
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fas fa-road"></i></span>
                                        </div>
                                    </div>

                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Street Name"
                                            name="street_name">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fas fa-road"></i></span>
                                        </div>
                                    </div>

                                    <div class="input-group mb-3">
                                        <input type="number" class="form-control" placeholder="Building Number"
                                            name="building_number">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fas fa-building"></i></span>
                                        </div>
                                    </div>

                                    <div class="input-group mb-3">
                                        <input type="number" class="form-control" placeholder="Floor Number"
                                            name="floor_number">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fas fa-building"></i></span>
                                        </div>
                                    </div>

                                    <div class="input-group mb-3">
                                        <input type="number" class="form-control" placeholder="Flat Number"
                                            name="flat_number">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fas fa-building"></i></span>
                                        </div>
                                    </div>

                                    <div class="input-group mb-3">
                                        <label>Use as Default</label>
                                    </div>
                                    <div class="input-group mb-3">
                                        <select class="form-control  @error('is_main') is-invalid @enderror" name="is_main">
                                            <option value="{{ 1 }}">Yes</option>
                                            <option value="{{ 0 }}" selected>No</option>
                                        </select>
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fas fa-check"></i></span>
                                        </div>
                                    </div>
                            </div>
                            <div class="input-group mb-3">
                                <button type="submit" class="btn btn-info">Add User Address</button>
                            </div>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
    </div>
    </section>
    <!-- endsetcion -->
@endsection
