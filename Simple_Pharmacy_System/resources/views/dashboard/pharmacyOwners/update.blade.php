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
            <h1>Pharmacy Owners</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"> Edit Pharmacy Owner</li>
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
      <h3 class="card-title">Edit Pharmacy Owner</h3>
    </div>
    <div class="card-body">
        <form action="{{route('pharmacyOwners.update',$doctor->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
      <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Name" name="name" value="{{$doctor->name}}">
            <div class="input-group-append">
              <span class="input-group-text"><i class="fas fa-check"></i></span>
            </div>
          </div>


      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="fas fa-envelope"></i></span>
        </div>
        <input type="email" class="form-control" placeholder="Email" name="email" value="{{$doctor->email}}">
      </div>

      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="National Id" name="nationalId" value="{{$doctor->national_id}}">
        <div class="input-group-append">
          <span class="input-group-text"><i class="fas fa-check"></i></span>
        </div>
      </div>

      <div class="input-group mb-3">
        <input type="file" class="form-control" placeholder="Image" name="image" value="{{$doctor->image}}">
        <div class="input-group-append">
          <span class="input-group-text"><i class="fas fa-check"></i></span>
        </div>
      </div>

      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="password" name="password">
        <div class="input-group-append">
          <span class="input-group-text"><i class="fas fa-check"></i></span>
        </div>
      </div>
      <div class="input-group mb-3">
        <select class="form-control" name="pharmacy_id">

            @foreach ($pharmacies as $pharmacy)
                <option value="{{$pharmacy->id}}">{{ $pharmacy->name }}</option>
            @endforeach
        </select>
   </div>
      <div class="input-group mb-3">
        <button type="submit" class="btn btn-info">Update Pharmacy Owner</button>
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


