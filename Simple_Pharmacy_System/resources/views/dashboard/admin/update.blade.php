<!-- extand alyout.blade.php  -->
@extends('dashboard.layout.layout')

@foreach ($admin as $data)
    @php
        $id = $data->id;
        $email = $data->email;
        $password = $data->password;
    @endphp
@endforeach

@section('body')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Admin</h1>
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
                            <li class="breadcrumb-item active"> Edit Admin</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">

                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Edit Admin</h3>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('admin.update', $id) }}" method="post">
                                    @csrf
                                    @method('PUT')

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                        </div>
                                        <input type="email" class="form-control" placeholder="Email"
                                            value="{{ $email }}" name="email">
                                    </div>

                                    <div class="input-group mb-3">
                                        <input type="password" class="form-control" placeholder="password"
                                            value="{{ $password }}" name="password">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fas fa-check"></i></span>
                                        </div>
                                    </div>

                                    <div class="input-group mb-3">
                                        <input type="password" class="form-control" placeholder="password"
                                            value="{{ $password }}" name="password_confirmation">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fas fa-check"></i></span>
                                        </div>
                                    </div>
                                    <div class="input-group mb-3">
                                        <button type="submit" class="btn btn-info">Update Admin</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card-body -->
                        </div>

                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->



    <!-- endsetcion -->
@endsection
