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
                        <h1>Medicine</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Medicine</li>
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
                        <div class="card card-solid">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <h3 class="d-inline-block d-sm-none">LOWA Men’s Renegade GTX Mid Hiking Boots Review
                                        </h3>
                                        <div class="col-12">
                                            <img src="{{ asset('adminAssets/img/prod-1.jpg') }}" class="product-image"
                                                alt="Product Image">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <h3 class="my-3">{{$drug->name}}</h3>
                                        <hr>
                                        <!-- <h4>{{$drug->type}}</h4> -->
                                        <hr>
                                        <h4>{{$drug->quantity}}</h4>
                                        {{-- Price --}}
                                        <div class="bg-gray py-2 px-3 mt-4">
                                            <h2 class="mb-0">
                                            {{$drug->price}}
                                            </h2>
                                            <h4 class="mt-0">
                                                <small>Ex Tax: $80.00 </small>
                                            </h4>
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
