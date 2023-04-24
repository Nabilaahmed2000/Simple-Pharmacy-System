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
                        <h1>Medicines</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Medicines</li>
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
                                <h1 class="card-title">All Medicines Table</h1>
                            </div>
                            <!-- /.card-header -->
                            <div id="example1_wrapper" class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Quantity</th>
                                            <th>Type</th>
                                            <th>Price</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($drugs as $drug)
                                        <tr>
                                            <td>{{$drug['name']}}</td>
                                            <td>{{$drug['quantity']}}</td>
                                            <td>medical</td>
                                            <td>{{$drug['price']}}</td>
                                            <td>
                                                <a href="{{route('dashboard.medicine.show',$drug['id'])}}" class="btn btn-primary">View</a>
                                                <a href="{{route('dashboard.medicine.edit',$drug['id'])}}" class="btn btn-success">Edit</a>
                                                <a href="{{route('dashboard.medicine.destroy',$drug['id'])}}" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
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
