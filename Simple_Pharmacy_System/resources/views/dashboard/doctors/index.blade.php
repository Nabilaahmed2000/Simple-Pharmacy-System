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
              <li class="breadcrumb-item active">Doctors</li>
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

                <div class="card">
                {{-- <div class="card-header">
                    <h3 class="card-title">DataTable with default features</h3>
                </div> --}}
                <!-- /.card-header -->
                <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>

                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>National Id</th>
                        <th>Pharmacy</th>
                        <th>Is Banned</th>
                        <th>Actions</th>
                    </tr>

                    </thead>
                    <tbody>
                    @foreach($doctors as $doctor)
                        <tr>
                        <td>{{$doctor->name}}</td>
                        <td>{{$doctor->email}}</td>
                         <td>{{$doctor->national_id}}</td>
                        <td>{{$doctor->pharmacy->name}}</td>
                        <td> @if($doctor->is_banned == 0)False @else True  @endif</td>
                        <td>
                            <a href="{{ route('doctors.show', $doctor['id']) }}" class="btn btn-primary">View</a>
                            <a href="{{ route('doctors.edit', $doctor['id']) }}" class="btn btn-success">Edit</a>
                            <form method="POST" action="{{ route('doctors.destroy', $doctor['id']) }}" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn  btn-danger " onClick="return confirm('Are you sure??')"
                                        title='Delete'>Delete</button>
                            </form>

                      </td>
                    </tr>
                    @endforeach
                    </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                </div>
                <!-- /.card -->
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

