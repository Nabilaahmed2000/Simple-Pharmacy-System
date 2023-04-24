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
        <!-- edit btn -->
            <div class="d-flex justify-content-end mr-3 mb-3">
                <a href="{{ route('dashboard.area.edit',1) }}" class="btn btn-info btn-lg">Edit</a>
            </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-solid">
                            <div class="card-body">
                                <div class="row">
                    
                                    <div class="col-12">
                                        <h3 class="my-3">Name</h3>
                                        <span>Pharmacy name</span>
                                        <hr>
                                        <h4>Address</h4>
                                        <span>Pharmacy address</span>
                                        <hr>
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
