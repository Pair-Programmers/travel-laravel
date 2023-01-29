@extends('adminpanel.layouts.master')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tours</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}}">Home</a></li>
                        <li class="breadcrumb-item active">Tours List</li>
                    </ol>
                </div>
            </div>
            <a href="{{route('admin.tour.create')}}" class="btn btn-primary">+ New tour</a>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- /.card -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">DataTable with features</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Summary</th>
                                        <th>Price</th>
                                        <th>Duration</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tours as $tour)
                                    <tr>
                                        <td>{{$tour->id}}</td>
                                        <td>{{$tour->name}}</td>
                                        <td>{{$tour->summary}}</td>
                                        <td>{{$tour->price}}</td>
                                        <td>{{$tour->duration}}</td>
                                        <td>
                                            <a href='{{route('admin.tour.edit', $tour->id)}}' class='btn btn-warning btn-sm'><i class='fas fa-pen'></i></a>
                                             <a href='{{route('admin.tour.destroy', $tour->id)}}' class='btn btn-danger btn-sm'><i class='fas fa-trash'></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Summary</th>
                                    <th>Price</th>
                                    <th>Duration</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
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

@endsection
