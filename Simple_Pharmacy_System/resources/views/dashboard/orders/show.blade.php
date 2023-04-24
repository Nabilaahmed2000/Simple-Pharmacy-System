<!-- extand alyout.blade.php  -->
@extends('dashboard.layout.layout')

<!-- yeild body -->

<!-- /.card-body -->


@section('body')
    <div class="content-wrapper">
        <!-- /.content-header -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>order</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">order</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
        <!-- edit btn -->
            <div class="d-flex justify-content-end mr-3 mb-3">
                <a href="{{ route('dashboard.order.edit',1) }}" class="btn btn-info btn-lg">Edit</a>
            </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-solid">
                            <div class="card-body">
                                <div class="row">
                    
                                    <div class="col-12">
                                        <h3 class="my-3">user</h3>
                                        <p>id:1</p>
                                        <p>name:ahmed</p>
                                        <hr>
                                        <h3 class="my-3">Doctor</h3>
                                        <p>id:1</p>
                                        <p>name:DR/ahmed</p>
                                        <hr>
                                        <h4>Address</h4>
                                        <span> mansoura g3</span>
                                        <hr>
                                        <h4>status</h4>
                                        <span>pending</span>
                                        <hr>
                                        <h4>medicine</h4>
                                        <div id="example1_wrapper" class="card-body">
                                        <table id="example1" class="table table-bordered table-striped">
                                  
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>name</th>
                                                <th>quantity</th>
                                                <th>price</th>
                                                <th>action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>panadol</td>
                                                <td>2</td>
                                                <td>20</td>
                                                <td>
                                                    <a href="{{ route('dashboard.order.edit',1) }}" class="btn btn-info btn-sm">Edit</a>
                                                    <a href="{{ route('dashboard.order.destroy',1) }}" class="btn btn-danger btn-sm">Delete</a>
                                                </td>

                                            </tr>
                                        </tbody>
                                </table>
                            </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <!-- endsetcion -->
@endsection
