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
            <h1>Doctors</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"> Edit Doctor</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
        <div class="row">
            <div class="col-12">

<div class="card card-info">
    <div class="card-header">
      <h3 class="card-title">Edit Doctor</h3>
    </div>
    <div class="card-body">
        <form action="{{route('doctors.update',$doctor['id'])}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
      <div class="input-group mb-3">
            <input type="text" class="form-control  @error('name') is-invalid @enderror" placeholder="Name" name="name" value="{{$doctor->name}}">
            <div class="input-group-append">
              <span class="input-group-text"><i class="fas fa-check"></i></span>
            </div>
          </div>

            @error('name')
            <small class="text-danger my-2">{{ $message }}</small>
            @enderror

      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="fas fa-envelope"></i></span>
        </div>
        <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{$doctor->email}}">
      </div>

            @error('email')
            <small class="text-danger my-2">{{ $message }}</small>
            @enderror

      <div class="input-group mb-3">
        <input type="text" class="form-control @error('national_id') is-invalid @enderror" placeholder="National Id" name="national_id" value="{{$doctor->national_id}}">
        <div class="input-group-append">
          <span class="input-group-text"><i class="fas fa-check"></i></span>
        </div>
      </div>

            @error('national_id')
            <small class="text-danger my-2">{{ $message }}</small>
            @enderror

      <div class="input-group mb-3">
        <input type="file" class="form-control @error('image') is-invalid @enderror" placeholder="Image" name="image">
        <div class="input-group-append">
          <span class="input-group-text"><i class="fas fa-check"></i></span>
        </div>
      </div>

            @error('image')
            <small class="text-danger my-2">{{ $message }}</small>
            @enderror

      <div class="input-group mb-3">
        <input type="text" class="form-control  @error('password') is-invalid @enderror" placeholder="password" name="password" value="{{$doctor->password}}">
        <div class="input-group-append">
          <span class="input-group-text"><i class="fas fa-check"></i></span>
        </div>
      </div>

            @error('password')
            <small class="text-danger my-2">{{ $message }}</small>
            @enderror

            <div class="input-group mb-3">
                <select class="form-control  @error('pharmacy_id') is-invalid @enderror" name="pharmacy_id">

                    @foreach ($pharmacies as $pharmacy)
                            @if($pharmacy->id == $doctor->pharmacy_id) selected @endif value="{{ $doctor->pharmacy_id }}">{{ $pharmacy->name }}</option>
                        <option value="{{$pharmacy->id}}">{{ $pharmacy->name }}</option>
                    @endforeach
                </select>
            </div>
            @error('pharmacy_id')
            <small class="text-danger my-2">{{ $message }}</small>
            @enderror
      <div class="input-group mb-3">
        <button type="submit" class="btn btn-info">Update Doctor</button>
      </div>
        </form>
    </div>
    <!-- /.card-body -->
  </div>

</div>
<!-- /.col -->
</div>
<!-- /.row -->
</div>
<!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->



<!-- endsetcion -->
@endsection


