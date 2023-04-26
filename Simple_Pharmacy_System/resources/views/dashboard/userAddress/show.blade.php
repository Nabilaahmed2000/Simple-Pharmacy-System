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
                        <h1>addresses</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">addresses</li>
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
                                <h1 class="card-title">User addresses Table</h1>
                                {{-- <h3 class="card-title">DataTable with default features</h3> --}}
                            </div>
                            <!-- /.card-header -->
                            <div id="example1_wrapper" class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>User ID</th>
                                            <th>Area ID</th>
                                            <th>Street Name</th>
                                            <th>Building Number</th>
                                            <th>Floor Number</th>
                                            <th>Flat Number</th>
                                            <th>Main</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @if ($addresses)
                                            @foreach ($addresses as $address)
                                                <tr>
                                                    <td>
                                                        @foreach ($users as $user)
                                                            @if ($user->id == $address['user_id'])
                                                                {{ $user->name }}
                                                            @endif
                                                        @endforeach
                                                    </td>
                                                    <td>
                                                        @foreach ($areas as $area)
                                                            @if ($area->id == $address['area_id'])
                                                                {{ $area->name }}
                                                            @endif
                                                        @endforeach
                                                    </td>
                                                    <td>{{ $address['street_name'] }}</td>
                                                    <td>{{ $address['building_number'] }}</td>
                                                    <td>{{ $address['floor_number'] }}</td>
                                                    <td>{{ $address['flat_number'] }}</td>
                                                    <td>{{ $address['is_main'] }}</td>
                                                    <td>
                                                        <a href="{{ route('userAddress.edit', $address['id']) }}"
                                                            class="btn btn-success">Edit</a>
                                                        <form action="{{ route('userAddress.destroy', $address['id']) }}"
                                                            method="POST" class="d-inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger">Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
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
