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
                        <th>Image</th>
                        <th>National Id</th>
                        <th>Is Banned</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Mariam</td>
                        <td>mariam@gmail.com</td>
                        <td><img src="#" /></td>
                        <td> 44444444444444444444</td>
                        <td> banned</td>
                        <td>
                            <a href="#" class="btn btn-primary">View</a>
                            <a href="#" class="btn btn-success">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>

                      </td>
                    </tr>
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

