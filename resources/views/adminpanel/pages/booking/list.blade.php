@extends('adminpanel.layouts.master')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>bookings</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}}">Home</a></li>
                        <li class="breadcrumb-item active">bookings List</li>
                    </ol>
                </div>
            </div>
            <a href="{{route('admin.booking.create')}}" class="btn btn-primary">+ New booking</a>
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
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Tour / Pacakge</th>
                                        <th>From Date</th>
                                        <th># Guest</th>
                                        <th># Child</th>
                                        <th>Total Amount</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($bookings as $booking)
                                    <tr>
                                        <td>{{$booking->id}}</td>
                                        <td>{{$booking->name}}</td>
                                        <td>{{$booking->email}}</td>
                                        <td>{{$booking->phone}}</td>
                                        <td>{{$booking->tour->name}}</td>
                                        <td>{{$booking->from_date}}</td>
                                        <td>{{$booking->no_of_guest}}</td>
                                        <td>{{$booking->no_of_child}}</td>
                                        <td>{{$booking->total_amount}}</td>
                                        <td>{{$booking->status}}</td>
                                        <td>
                                            <a href='{{route('admin.booking.edit', $booking->id)}}' class='btn btn-warning btn-sm'><i class='fas fa-pen'></i></a>
                                             <a href='{{route('admin.booking.destroy', $booking->id)}}' class='btn btn-danger btn-sm'><i class='fas fa-trash'></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Tour / Pacakge</th>
                                    <th>From Date</th>
                                    <th># Guest</th>
                                    <th># Child</th>
                                    <th>Total Amount</th>
                                    <th>Status</th>
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
