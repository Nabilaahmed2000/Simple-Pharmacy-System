<!-- extand alyout.blade.php  -->
@extends('dashboard.layout.layout')
@section('body')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Pharmacy</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{route('pharmacy.index')}}">All Pharmacies</a></li>
                            <li class="breadcrumb-item active"><a href="{{route('pharmacy.show',$pharmacy->id)}}">Pharmacy Profile </a></li>                        
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
                        <div class="card card-widget widget-user">
                            <div class="widget-user-header bg-info">
                                <p class="widget-user-username mt-4">Pharmacy Profile</p>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-sm-3 border-right">
                                        <div class="description-block">
                                            <h5 class="description-header mb-3">ID</h5>
                                            <span class="description-text">{{$pharmacy->id}}</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-3 border-right">
                                        <div class="description-block">
                                            <h5 class="description-header mb-3">Name</h5>
                                            <span class="description-text">{{$pharmacy->name}}</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>

                                    <div class="col-sm-3 border-right">
                                        <div class="description-block">
                                            <h5 class="description-header mb-3">Area Name</h5>
                                            <span class="description-text">{{$pharmacy->area->name}}</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="description-block">
                                            <h5 class="description-header mb-3">Priority</h5>
                                            <span class="description-text">{{$pharmacy->priority}}</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                </div>
                                <!-- /.row -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- endsetcion -->
@endsection