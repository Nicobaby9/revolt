@extends('layouts.master')

@section('header')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0 text-dark">About Company</h1>
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
@endsection

@section('content')
<div class="col-md-12">
    <div class="card">
    <div class="card-header p-2">
        <ul class="nav nav-pills">
            <li class="nav-item"><a class="nav-link active" href="#detail" data-toggle="tab">Detail</a></li>
            <li class="nav-item"><a class="nav-link " href="#edit" data-toggle="tab">Edit</a></li>
        </ul>
    </div>
    <div class="card-body">
        <div class="tab-content">
            <div class="active tab-pane active" id="detail">
                <form class="form-horizontal" method="POST">
                @csrf
                {{ method_field('PATCH') }}
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Name</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name" value="{{ auth()->user()->name }}" disabled>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" name="email" value="{{ auth()->user()->name }}" disabled>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-2 control-label">Password</label>

                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="password" value="{{ auth()->user()->password }}" disabled>
                    </div>
                </div>
                <div class="form-group">
                    <label for="role" class="col-sm-2 control-label">Role</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="role" name="role" value="{{ auth()->user()->name }}" disabled>
                    </div>
                </div>
                <div class="form-group">
                    <label for="description" class="col-sm-2 control-label">Description</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="description" name="description" value="{{ auth()->user()->name }}" disabled>
                    </div>
                </div>
                <div class="form-group">
                    <label for="instagram" class="col-sm-2 control-label">Instagram</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="instagram" name="instagram" value="{{ auth()->user()->name }}" disabled>
                    </div>
                </div>
                <div class="form-group">
                    <label for="facebook" class="col-sm-2 control-label">Facebook</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="facebook" name="facebook" value="{{ auth()->user()->name }}" disabled>
                    </div>
                </div>
                <div class="form-group">
                    <label for="github" class="col-sm-2 control-label">Github</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="github" name="github" value="{{ auth()->user()->name }}" disabled>
                    </div>
                </div>
                <div class="form-group">
                    <label for="no_handphone" class="col-sm-2 control-label">Handphone</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="no_hanphone" name="no_handphone" value="{{ auth()->user()->name }}" disabled>
                    </div>
                </div>
                <div class="form-group">
                    <label for="textarea" class="control-label col-sm-2">Textarea</label>

                    <div class="col-sm-10"> 
                        <textarea class="form-control" rows="3" cols="20" value="" disabled></textarea>
                    </div>
                </div>
                </form>
            </div>

            <div class="tab-pane" id="edit">
                <form class="form-horizontal" method="POST" action="{{ route('profile.update', auth()->user()->name) }}">
                    @csrf
                    {{ method_field('PATCH') }}
                    <input type="hidden" name="_method" value="PATCH">
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Name</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name" value="{{ auth()->user()->name }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" name="email" value="{{ auth()->user()->name }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-2 control-label">Password</label>

                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="password" value="{{ auth()->user()->name }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="role" class="col-sm-2 control-label">Role</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="role" name="role" value="{{ auth()->user()->name }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="description" class="col-sm-2 control-label">Description</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="description" name="description" value="{{ auth()->user()->name }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="instagram" class="col-sm-2 control-label">Instagram</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="instagram" name="instagram" value="{{ auth()->user()->name }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="facebook" class="col-sm-2 control-label">Facebook</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="facebook" name="facebook" value="{{ auth()->user()->name }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="github" class="col-sm-2 control-label">Github</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="github" name="github" value="{{ auth()->user()->name }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="no_handphone" class="col-sm-2 control-label">Handphone</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="no_hanphone" name="no_handphone" value="{{ auth()->user()->name }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="textarea" class="control-label col-sm-2">Textarea</label>

                    <div class="col-sm-10"> 
                        <textarea class="form-control" rows="3" cols="20" value="" disabled></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary" value="Post">Submit</button>
                    </div>
                </div>
                </form>
            </div>
            <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
        </div>
    </div>
    <!-- /.nav-tabs-custom -->
</div>
    
@endsection