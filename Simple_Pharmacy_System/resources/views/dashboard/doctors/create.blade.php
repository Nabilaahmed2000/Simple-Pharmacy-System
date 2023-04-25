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
              <li class="breadcrumb-item active"> Add Doctor</li>
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
      <h3 class="card-title">Add Doctor</h3>
    </div>
    <div class="card-body">
        <form action="{{route('doctors.store')}}" method="post" enctype="multipart/form-data">
            @csrf
      <div class="input-group mb-3">
            <input type="text" class="form-control @error('name') is-invalid @enderror"  placeholder="Name" name="name"  >
            <div class="input-group-append">
              <span class="input-group-text"><i class="fas fa-check"></i></span>
            </div>
          </div>
          <div>
              @error('name')
              <small class="text-danger my-2">{{ $message }}</small>
              @enderror
          </div>


      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="fas fa-envelope"></i></span>
        </div>
        <input type="email" class="form-control  @error('email') is-invalid @enderror" placeholder="Email" name="email">
      </div>
            <div>
                @error('email')
                <small class="text-danger my-2">{{ $message }}</small>
                @enderror
            </div>


            <div class="input-group mb-3">
            <input type="password" class="form-control  @error('password') is-invalid @enderror" placeholder="password" name="password">
                <div class="input-group-append">
                    <span class="input-group-text"><i class="fas fa-check"></i></span>
                </div>
      </div>
            <div>
                @error('password')
                <small class="text-danger my-2">{{ $message }}</small>
                @enderror
            </div>


            <div class="input-group mb-3">
        <input type="text" class="form-control  @error('national_id') is-invalid @enderror" placeholder="National Id" name="national_id">
        <div class="input-group-append">
          <span class="input-group-text"><i class="fas fa-check"></i></span>
        </div>
      </div>
            <div>
                @error('national_id')
                <small class="text-danger my-2">{{ $message }}</small>
                @enderror
            </div>

      <div class="input-group mb-3">
        <input type="file" class="form-control  @error('name') is-invalid @enderror" placeholder="Image" name="image">
        <div class="input-group-append">
          <span class="input-group-text"><i class="fas fa-check"></i></span>
        </div>
      </div>

      <div class="input-group mb-3">
          <select class="form-control  @error('pharmacy_id') is-invalid @enderror" name="pharmacy_id">

              @foreach ($pharmacies as $pharmacy)
                  <option value="{{$pharmacy->id}}">{{ $pharmacy->name }}</option>
              @endforeach
          </select>
     </div>
      <div class="input-group mb-3">
        <button type="submit" class="btn btn-info">Add Doctor</button>
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


