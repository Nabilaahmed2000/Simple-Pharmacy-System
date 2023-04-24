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
                        <h1>Orders</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Orders</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
        <!-- btn add -->
        <div class="d-flex justify-content-end mr-3 mb-3">
            <a href="{{ route('dashboard.order.create') }}" class="btn btn-primary">Add new order</a>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h1 class="card-title">All order Area Table</h1>
                            </div>
                            <!-- /.card-header -->
                            <div id="example1_wrapper" class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>User id</th>
                                            <th>User name</th>
                                            <th>Doctor id</th>
                                            <th>Doctor name</th>
                                            <th>Address</th>
                                            <th>status</th>
                                            <th>is insured</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Ahmed</td>
                                            <td>1</td>
                                            <td>Dr. Ahmed</td>
                                            <td>Mansoura g3</td>
                                            <td>pending</td>
                                            <td>true</td>
                                            <td>
                                                <a href="{{ route('dashboard.order.show' , 1) }}" class="btn btn-primary">View</a>
                                                <a href="{{ route('dashboard.order.edit' , 1) }}" class="btn btn-success">Edit</a>
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
