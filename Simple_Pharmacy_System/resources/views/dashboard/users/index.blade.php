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
                        <div class="card">
                            <div class="card-header">
                                <h1 class="card-title">All Users Table</h1>
                                {{-- <h3 class="card-title">DataTable with default features</h3> --}}
                            </div>
                            <!-- /.card-header -->
                            <div id="example1_wrapper" class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>National Id</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>gender</th>
                                            <th>Date of Birth</th>
                                            <th>phone</th>
                                            <th>Address</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Habiba</td>
                                            <td>habiba@gmail.com</td>
                                            <td>F</td>
                                            <td>2000/11/05</td>
                                            <td>01234567890</td>
                                            <td>Xxx,ww,z</td>
                                            <td>
                                                <a href="#" class="btn btn-primary">View</a>
                                                <a href="#" class="btn btn-success">Edit</a>
                                                <a href="#" class="btn btn-danger">Delete</a>

                                          </td>
                                        </tr>
                                    </tbody>

                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <!-- endsetcion -->
@endsection
