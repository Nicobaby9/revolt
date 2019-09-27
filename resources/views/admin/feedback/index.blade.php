@extends('layouts.master')
@section('content')
    
<div class="card">
    <div class="card-header bg-dark">
        <h3>Data Feedback From User</h3>
    </div>
    <table class="card-table table table-dark">
        <thead>
        <tr>
            <th scope="col">No.</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Messages</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($feedbacks as $feedback)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $feedback->fullname }}</td>
                <td>{{ $feedback->email }}</td>
                <td>{{ $feedback->message }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@section('header')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0 text-dark">Feedback Page</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('feedback.index') }}">Feedback</a></li>
                <li class="breadcrumb-item active">Index</li>
            </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
@endsection