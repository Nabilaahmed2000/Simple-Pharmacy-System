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
                    <h1>Pharmacies</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active"><a href="{{route('pharmacy.index')}}">Pharmacies</a></li>
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
                    <div class="card">
                        <div class="card-header">
                            <h1 class="card-title">All Pharmacies Table</h1>
                            {{-- <h3 class="card-title">DataTable with default features</h3> --}}
                        </div>
                        <!-- /.card-header -->
                        <div id="example1_wrapper" class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Area</th>
                                        <th>Priority</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>                                
                                    @foreach ($allPharmacies as $pharmacy)
                                    {{-- @if($pharmacy->doctor->name != null) --}}
                                        <tr>
                                            <td>{{$pharmacy['name']}}</td>
                                            <td>{{$pharmacy->area->name}}</td>
                                            <td>{{$pharmacy['priority']}}</td>
                                            <td>
                                                <a href="{{route('pharmacy.show',$pharmacy['id'])}}" class="btn btn-primary">View</a>
                                                <a href="{{route('pharmacy.edit',$pharmacy['id'])}}" class="btn btn-success">Edit</a>
                                                <form action="{{route('pharmacy.destroy',$pharmacy['id']) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    {{-- @else --}}
                                        {{-- <tr><p> sorry, u need to be there doctor in DB first to show current pharmacy </p></tr> --}}
                                    {{-- @endif --}}
                                    @endforeach

                                </tbody>

                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
    <!-- endsetcion -->
@endsection
