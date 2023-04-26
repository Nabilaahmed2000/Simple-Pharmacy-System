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
                        <h1>Users</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Users</li>
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
                                <h1 class="card-title">All Users Table</h1>
                                {{-- <h3 class="card-title">DataTable with default features</h3> --}}
                            </div>
                            <!-- /.card-header -->
                            <div id="example1_wrapper" class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>National Id</th>
                                            <th>Email</th>
                                            <th>gender</th>
                                            <th>Date of Birth</th>
                                            <th>phone</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @if ($users)
                                            @foreach ($users as $user)
                                                <tr>
                                                    <td>{{ $user['id'] }}</td>
                                                    <td>{{ $user['name'] }}</td>
                                                    <td>{{ $user['national_id'] }}</td>
                                                    <td>{{ $user['email'] }}</td>
                                                    <td>{{ $user['gender'] }}</td>
                                                    <td>{{ $user['date_of_birth'] }}</td>
                                                    <td>{{ $user['phone'] }}</td>
                                                    <td>
                                                        <a href="{{ route('users.show', $user['id']) }}"
                                                            class="btn btn-primary">View</a>
                                                        <a href="{{ route('users.edit', $user['id']) }}"
                                                            class="btn btn-success">Edit</a>
                                                        <form action="{{ route('users.destroy', $user['id']) }}"
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
