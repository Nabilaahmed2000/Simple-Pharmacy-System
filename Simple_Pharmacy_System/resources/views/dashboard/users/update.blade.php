<!-- extand alyout.blade.php  -->
@extends('dashboard.layout.layout')

@foreach ($user as $data)
    @php
        $id = $data->id;
        $name = $data->name;
        $national_id = $data->national_id;
        $password = $data->password;
        $gender = $data->gender;
        $phone = $data->phone;
        $date_of_birth = $data->date_of_birth;
        $image = $data->image;
    @endphp
@endforeach

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
                                <h3 class="card-title">Update User</h3>
                            </div>
                            <div class="card-body">
                                {{-- $user['id'] --}}
                                <form action="{{ route('users.update', 1) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="input-group mb-3">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fa-solid fa-check"></i></span>
                                        </div>
                                        <input type="text" class="form-control" disabled placeholder="National Id"
                                            value="{{ $id }}" name="id">
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fa-solid fa-id-card"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="National Id"
                                            value="{{ $national_id }}" name="national_id">
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Name" value="{{ $name }}" name="name">
                                    </div>

                                    <div class="form-group">
                                        <div class="custom-control custom-radio pr-4 d-inline-block">
                                            <input class="custom-control-input" type="radio" id="customRadio1"
                                                value="male" @if($gender == "Male") checked @endif name="gender">
                                            <label for="customRadio1" class="custom-control-label">Male</label>
                                        </div>
                                        <div class="custom-control custom-radio pl-4 d-inline-block">
                                            <input class="custom-control-input" type="radio" id="customRadio2"
                                                value="female" @if($gender == "Female") checked @endif name="gender">
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
                                            <input type="text" value="{{ $date_of_birth }}" name="date_of_birth"
                                                class="form-control datetimepicker-input" data-target="#reservationdate" />
                                        </div>
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
                                        </div>
                                        <input type="phone" class="form-control" placeholder="Phone" value="{{ $phone }}" name="phone">
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                                        </div>
                                        <input type="password" class="form-control" placeholder="Password" value="{{ $password }}" name="password">
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                                        </div>
                                        <input type="password" class="form-control" placeholder="Confirm Password"
                                            value="{{ $password }}" name="confPassword">
                                    </div>
                                    {{-- Image --}}
                                    <div class="input-group mb-3">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fa-solid fa-image"></i></span>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="image" value="{{ $image }}" name="image">
                                            <label class="custom-file-label" for="image">{{ $image }}</label>
                                        </div>
                                    </div>
                                    <div class="input-group mb-3">
                                        <button type="submit" class="btn btn-info">Update Doctor</button>
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
