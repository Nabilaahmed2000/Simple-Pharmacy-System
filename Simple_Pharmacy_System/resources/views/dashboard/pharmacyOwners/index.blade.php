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
              <li class="breadcrumb-item active">Pharmacy Owners</li>
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
                        @foreach($pharmacyOwners as $pharmacyOwner)
                    <tr>
                        <td>{{$pharmacyOwner['name']}}</td>
                        <td>{{$pharmacyOwner['email']}}</td>
                        <td><img style="width: 70px;height:auto" src="{{asset ('images/pharmacyOwners/'.$pharmacyOwner->image) }}" alt="User image"></td>
                        <td> {{$pharmacyOwner['national_id']}}</td>
                        <td> @if($pharmacyOwner->is_banned == 0)False @else True  @endif</td>
                        <td>
                            <a href="{{route('pharmacyOwners.show',$pharmacyOwner['id'])}}" class="btn btn-primary">View</a>
                            <a href="{{route('pharmacyOwners.edit',$pharmacyOwner['id'])}}" class="btn btn-success">Edit</a>
                            <form method="POST" action="{{route('pharmacyOwners.destroy',$pharmacyOwner->id)}}"  style="display:inline">
                                {{ csrf_field() }} {{ method_field('DELETE') }}
                                <button type="submit" id='delete' class="btn btn-danger" onClick="return confirm('are you sure??')">Delete</button>
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

