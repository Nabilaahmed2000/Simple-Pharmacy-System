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
                    <h1>Add Pharmacy</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active"><a href="{{route('pharmacy.create')}}">Add Pharmacy </a></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <section class="content">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Add Pharmacy</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('pharmacy.store') }}" method="POST">
                                @csrf

                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Name" name="name">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-check"></i></span>
                                    </div>
                                </div>

                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Area" name="area_id">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-check"></i></span>
                                    </div>
                                </div>

                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Priority" name="priority">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-check"></i></span>
                                    </div>
                                </div>

                                <div class="input-group mb-3">
                                    <button type="submit" class="btn btn-info">Add Pharmacy</button>
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
