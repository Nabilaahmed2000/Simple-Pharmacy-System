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
                    <h1>Order</h1>
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

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Add new order</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('dashboard.order.store') }}" method="POST">
                                @csrf

                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="user id" name="userId">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-check"></i></span>
                                    </div>
                                </div>

                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Address" name="address">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-check"></i></span>
                                    </div>
                                </div>

                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="status" name="status">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-check"></i></span>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="is insured" name="isInsured">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-check"></i></span>
                                    </div>
                                </div>
                                <!-- medicines -->
                                <lable class="form-label">medicines</lable>
                                <div class="input-group mb-3">
                                    <textarea type="text" class="form-control" placeholder="medicine" name="medicine">
                                    </textarea>
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-check"></i></span>
                                    </div>
                                </div>

                                

    
                                <div class="input-group mb-3">
                                    <button type="submit" class="btn btn-info">Add new order</button>
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
