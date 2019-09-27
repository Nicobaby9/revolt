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

                <p class="text-muted text-center">Software Engineer</p>

                <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                    <b>Email</b> <a class="float-right">{{ auth()->user()->email }}</a>
                </li>
                <li class="list-group-item">
                    <b>Following</b> <a class="float-right">543</a>
                </li>
                <li class="list-group-item">
                    <b>Friends</b> <a class="float-right">13,287</a>
                </li>
                </ul>

                <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
            </div>
            <!-- /.card-body -->
            </div>
            <!-- /.card -->

            
            <!-- /.card -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
            <div class="card">
            <div class="card-header p-2">
                <ul class="nav nav-pills">
                <li class="nav-item"><a class="nav-link active" href="#settings" data-toggle="tab">Settings</a></li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content">

                <div class="active tab-pane" id="settings">
                    <form class="form-horizontal">
                    <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Name</label>

                        <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputName" placeholder="Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                        <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputName2" class="col-sm-2 control-label">Name</label>

                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputName2" placeholder="Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputSkills" class="col-sm-2 control-label">Skills</label>

                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                        </div>
                    </div>
                    {{--  <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                        <div class="checkbox">
                            <label>
                            <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                            </label>
                        </div>
                        </div>
                    </div>  --}}
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                    </form>
                </div>
                <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
            </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
</section>    
@endsection