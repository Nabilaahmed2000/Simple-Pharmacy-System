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
                        <h1>Pharmacy Area</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Pharmacy Area</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
        <!-- btn add -->
        <div class="d-flex justify-content-end mr-3 mb-3">
            <a href="{{ route('dashboard.area.create') }}" class="btn btn-primary">Add Pharmacy Area</a>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h1 class="card-title">All Pharmacy Area Table</h1>
                            </div>
                            <!-- /.card-header -->
                            <div id="example1_wrapper" class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Addres</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>main branch</td>
                                            <td>Mansoura g3</td>
                                            <td>
                                                <a href="{{ route('dashboard.area.show' , 1) }}" class="btn btn-primary">View</a>
                                                <a href="{{ route('dashboard.area.edit' , 1) }}" class="btn btn-success">Edit</a>
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
