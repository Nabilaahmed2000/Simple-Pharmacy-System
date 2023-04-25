<!-- extand alyout.blade.php  -->
@extends('dashboard.layout.layout')

<!-- yeild body -->
@foreach ($drugs as $drug)
@php
        $id=$drug->id ;
        $name=$drug->name;
        $quantity=$drug->quantity;
        $price=$drug->price;
        $image=$drug->image;

@endphp
@endforeach
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

                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Update Medicine</h3>
                        </div>
                        <div class="card-body">
<<<<<<< HEAD
                            <form action="{{ route('dashboard.medicine.update' ,$id) }}" method="POST" enctype="multipart/form-data">
=======
                            {{--  $medicine['id'] --}}
                            <form action="{{ route('medicine.update' ,1) }}" method="POST">
>>>>>>> 39bf5f0004de4d2382b135b2cf2a87118574da6d
                                @csrf
                                @method('PUT')

                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Name" name="name" value="{{$name}}">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-check"></i></span>
                                    </div>
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                    </div>
                                    <input type="number" class="form-control" placeholder="Quantity" name="quantity" value="{{$quantity}}">
                                </div>

                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Type"
                                        name="type" value="medical">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-check"></i></span>
                                    </div>
                                </div>

                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Price" name="price" value="{{$price}}">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-check"></i></span>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="image" name="image">
                                        <label class="custom-file-label" for="image">Choose file</label>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <button type="submit" class="btn btn-info">Update Medicine</button>
                                </div>
<<<<<<< HEAD
                            </form>
=======
                            </form>
>>>>>>> 39bf5f0004de4d2382b135b2cf2a87118574da6d
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- endsetcion -->
@endsection
