
@extends('layouts.master')
@section('header')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0 text-dark">Profile Page</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('profile.index') }}">Profile</a></li>
            <li class="breadcrumb-item active">Index</li>
        </ol>
        </div>
    </div>
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-3">

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Welcome,</h3>
                    <h5>{{ auth()->user()->name }}</h5>
                </div>
            </div>

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
            <div class="card-body box-profile">
                <div class="text-center">
                <img class="profile-user-img img-fluid img-circle" src="{{ asset('img/aerials.jpg') }}" alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">{{ auth()->user()->name }}</h3>

                <p class="text-muted text-center">{{ auth()->user()->description }}</p>

                <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                    <b>Email</b> <a class="float-right">{{ auth()->user()->email }}</a>
                </li>
                <li class="list-group-item">
                    <b>Role</b> <a class="float-right">{{ auth()->user()->role }}</a>
                </li>
                <li class="list-group-item">
                    <b>Facebook</b> <a class="float-right">{{ auth()->user()->facebook }}</a>
                </li>
                <li class="list-group-item">
                    <b>Phone</b> <a class="float-right">{{ auth()->user()->no_handphone }}</a>
                </li>
                </ul>
                <a class="btn btn-primary btn-block text-white"><b>{{ auth()->user()->role }} </b></a>
            </div>
            <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </div>
        <!-- /.col -->
        <div class="col-md-9">
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
                        <input type="text" class="form-control" id="name" name="name" value="{{ $profiles->name }}" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-sm-2 control-label">Email</label>

                        <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" name="email" value="{{ $profiles->email }}" disabled>
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
                        <input type="text" class="form-control" id="role" name="role" value="{{ $profiles->role }}" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="description" class="col-sm-2 control-label">Description</label>

                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="description" name="description" value="{{ $profiles->description }}" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="instagram" class="col-sm-2 control-label">Instagram</label>

                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="instagram" name="instagram" value="{{ $profiles->instagram }}" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="facebook" class="col-sm-2 control-label">Facebook</label>

                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="facebook" name="facebook" value="{{ $profiles->facebook }}" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="github" class="col-sm-2 control-label">Github</label>

                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="github" name="github" value="{{ $profiles->github }}" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="no_handphone" class="col-sm-2 control-label">Handphone</label>

                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="no_hanphone" name="no_handphone" value="{{ $profiles->no_handphone }}" disabled>
                        </div>
                    </div>
                    </form>
                </div>

                <div class="tab-pane" id="edit">
                    <form class="form-horizontal" method="POST" action="{{ route('profile.update', $profiles->id) }}">
                        @csrf
                        {{ method_field('PATCH') }}
                        <input type="hidden" name="_method" value="PATCH">
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Name</label>

                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name" value="{{ $profiles->name }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-sm-2 control-label">Email</label>

                        <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" name="email" value="{{ $profiles->email }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-sm-2 control-label">Password</label>

                        <div class="col-sm-10">
                        <input type="password" class="form-control" id="password" value="{{ $profiles->password }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="role" class="col-sm-2 control-label">Role</label>

                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="role" name="role" value="{{ $profiles->role }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="description" class="col-sm-2 control-label">Description</label>

                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="description" name="description" value="{{ $profiles->description }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="instagram" class="col-sm-2 control-label">Instagram</label>

                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="instagram" name="instagram" value="{{ $profiles->instagram }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="facebook" class="col-sm-2 control-label">Facebook</label>

                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="facebook" name="facebook" value="{{ $profiles->facebook }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="github" class="col-sm-2 control-label">Github</label>

                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="github" name="github" value="{{ $profiles->github }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="no_handphone" class="col-sm-2 control-label">Handphone</label>

                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="no_hanphone" name="no_handphone" value="{{ $profiles->no_handphone }}">
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
        <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
</section>    
@endsection