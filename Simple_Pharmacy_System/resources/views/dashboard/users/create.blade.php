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
                        <h1>Users</h1>
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
                                <h3 class="card-title">Add User</h3>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('POST')
                                    <div class="input-group mb-3">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fa-solid fa-id-card"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="National Id"
                                            name="national_id">
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Name" name="name">
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                        </div>
                                        <input type="email" class="form-control" placeholder="Email" name="email">
                                    </div>

                                    <div class="form-group">
                                        <div class="custom-control custom-radio pr-4 d-inline-block">
                                          <input class="custom-control-input" type="radio" id="customRadio1" value="male" name="gender">
                                          <label for="customRadio1" class="custom-control-label">Male</label>
                                        </div>
                                        <div class="custom-control custom-radio pl-4 d-inline-block">
                                          <input class="custom-control-input" type="radio" id="customRadio2" value="female" name="gender" checked>
                                          <label for="customRadio2" class="custom-control-label">Female</label>
                                        </div>
                                    </div>
                                    {{-- Date --}}
                                    <div class="form-group">
                                        <label>Date Of Birth</label>
                                        <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                            <div class="input-group-append" data-target="#reservationdate"
                                                data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                            </div>
                                            <input type="text" name="date_of_birth" class="form-control datetimepicker-input"
                                                data-target="#reservationdate" />

                                        </div>
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
                                        </div>
                                        <input type="phone" class="form-control" placeholder="Phone" name="phone">
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                                        </div>
                                        <input type="password" class="form-control" placeholder="Password" name="password">
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                                        </div>
                                        <input type="password" class="form-control" placeholder="Confirm Password"
                                            name="confPassword">
                                    </div>
                                    {{-- Image --}}
                                    <div class="input-group mb-3">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fa-solid fa-image"></i></span>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="image" name="image">
                                            <label class="custom-file-label" for="image">Choose file</label>
                                        </div>
                                    </div>
                                    <div class="input-group mb-3">
                                        <button type="submit" class="btn btn-info">Add User</button>
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
