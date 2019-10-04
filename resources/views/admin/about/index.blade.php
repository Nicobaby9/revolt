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
                {{--  COMPANY NAME / PROFILE  --}}
                <div class="form-group">
                    <label for="company_profile" class="col-sm-2 control-label">Company Profile</label>

                    <div class="col-sm-10">
                        <textarea class="form-control" rows="6" cols="20" id="company_profile" name="company_profile" disabled> {{ $about->company_profile }} </textarea>
                        {{--  <input type="textarea" class="form-control" id="company_profile" name="company_profile" value="" disabled>  --}}
                    </div>
                </div>
                {{--  AT OUR SERVICES CONTENT  --}}

                {{--  FIRST CONTENT  --}}
                <div class="form-group">
                    <label for="atOurServices_first_title" class="col-sm-3 control-label">First AtOurService Title</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="atOurServices_first_title" name="atOurServices_first_title" value="{{ $about->atOurServices_first_title }}" disabled>
                    </div>
                </div>
                <div class="form-group">
                    <label for="atOurServices_first_desc" class="col-sm-3 control-label">First AtOurService Desc</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="atOurServices_first_desc" name="atOurServices_first_desc" value="{{ $about->atOurServices_first_desc }}" disabled>
                    </div>
                </div>
                {{--  SECOND CONTENT  --}}
                <div class="form-group">
                    <label for="atOurServices_second_title" class="col-sm-3 control-label">Second AtOurService Title</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="atOurServices_second_title" name="atOurServices_second_title" value="{{ $about->atOurServices_second_title }}" disabled>
                    </div>
                </div>
                <div class="form-group">
                    <label for="atOurServices_second_desc" class="col-sm-3 control-label">Second AtOurService Desc</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="atOurServices_second_desc" name="atOurServices_second_desc" value="{{ $about->atOurServices_second_desc }}" disabled>
                    </div>
                </div>
                {{--  THIRD CONTENT  --}}
                <div class="form-group">
                    <label for="atOurServices_third_title" class="col-sm-3 control-label">Third AtOurService Title</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="atOurServices_third_title" name="atOurServices_third_title" value="{{ $about->atOurServices_third_title }}" disabled>
                    </div>
                </div>
                <div class="form-group">
                    <label for="atOurServices_third_desc" class="col-sm-3 control-label">Third AtOurService Desc</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="atOurServices_third_desc" name="atOurServices_third_desc" value="{{ $about->atOurServices_third_desc }}" disabled>
                    </div>
                </div>
                {{--  FOURTH CONTENT  --}}
                <div class="form-group">
                    <label for="atOurServices_fourth_title" class="col-sm-2 control-label">Fourth AtOurService Title</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="atOurServices_fourth_title" name="atOurServices_fourth_title" value="{{ $about->atOurServices_fourth_title }}" disabled>
                    </div>
                </div>
                <div class="form-group">
                    <label for="atOurServices_fourth_desc" class="col-sm-2 control-label">Fourth AtOurService Desc</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="atOurServices_fourth_desc" name="atOurServices_fourth_desc" value="{{ $about->atOurServices_fourth_desc }}" disabled>
                    </div>
                </div>
                {{--  WhatsApp Link API  --}}
                <div class="form-group">
                    <label for="contact_us_wa_link" class="col-sm-2 control-label">WhatsApp Link API</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="contact_us_wa_link" name="contact_us_wa_link" value="{{ $about->contact_us_wa_link }}" disabled>
                    </div>
                </div>
                {{--  Instagram Link API  --}}
                <div class="form-group">
                    <label for="contact_us_instagram_link" class="col-sm-2 control-label">Instagram Link API</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="contact_us_instagram_link" name="contact_us_instagram_link" value="{{ $about->contact_us_instagram_link }}" disabled>
                    </div>
                </div>
                {{--  <div class="form-group">
                    <label for="textarea" class="control-label col-sm-2">Textarea</label>

                    <div class="col-sm-10"> 
                        <textarea class="form-control" rows="3" cols="20" value="" disabled></textarea>
                    </div>
                </div>  --}}
                </form>
            </div>

            <div class="tab-pane" id="edit">
                <form class="form-horizontal" method="POST" action="{{ route('profile.update', auth()->user()->name) }}">
                    @csrf
                    {{ method_field('PATCH') }}
                    <input type="hidden" name="_method" value="PATCH">
                {{--  AT OUR SERVICES CONTENT  --}}

                {{--  COMPANY NAME / PROFILE  --}}
                <div class="form-group">
                    <label for="company_profile" class="col-sm-2 control-label">Company Profile</label>

                    <div class="col-sm-10">
                        <textarea class="form-control" rows="6" cols="20" id="company_profile" name="company_profile"> {{ $about->company_profile }} </textarea>
                    </div>
                </div>

                {{--  FIRST CONTENT  --}}
                <div class="form-group">
                    <label for="atOurServices_first_title" class="col-sm-3 control-label">First AtOurService Title</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="atOurServices_first_title" name="atOurServices_first_title" value="{{ $about->atOurServices_first_title }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="atOurServices_first_desc" class="col-sm-3 control-label">First AtOurService Desc</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="atOurServices_first_desc" name="atOurServices_first_desc" value="{{ $about->atOurServices_first_desc }}">
                    </div>
                </div>
                {{--  SECOND CONTENT  --}}
                <div class="form-group">
                    <label for="atOurServices_second_title" class="col-sm-3 control-label">Second AtOurService Title</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="atOurServices_second_title" name="atOurServices_second_title" value="{{ $about->atOurServices_second_title }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="atOurServices_second_desc" class="col-sm-3 control-label">Second AtOurService Desc</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="atOurServices_second_desc" name="atOurServices_second_desc" value="{{ $about->atOurServices_second_desc }}">
                    </div>
                </div>
                {{--  THIRD CONTENT  --}}
                <div class="form-group">
                    <label for="atOurServices_third_title" class="col-sm-3 control-label">Third AtOurService Title</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="atOurServices_third_title" name="atOurServices_third_title" value="{{ $about->atOurServices_third_title }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="atOurServices_third_desc" class="col-sm-3 control-label">Third AtOurService Desc</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="atOurServices_third_desc" name="atOurServices_third_desc" value="{{ $about->atOurServices_third_desc }}">
                    </div>
                </div>
                {{--  FOURTH CONTENT  --}}
                <div class="form-group">
                    <label for="atOurServices_fourth_title" class="col-sm-2 control-label">Fourth AtOurService Title</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="atOurServices_fourth_title" name="atOurServices_fourth_title" value="{{ $about->atOurServices_fourth_title }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="atOurServices_fourth_desc" class="col-sm-2 control-label">Fourth AtOurService Desc</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="atOurServices_fourth_desc" name="atOurServices_fourth_desc" value="{{ $about->atOurServices_fourth_desc }}">
                    </div>
                </div>
                {{--  WhatsApp Link API  --}}
                <div class="form-group">
                    <label for="contact_us_wa_link" class="col-sm-2 control-label">WhatsApp Link API</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="contact_us_wa_link" name="contact_us_wa_link" value="{{ $about->contact_us_wa_link }}">
                    </div>
                </div>
                {{--  Instagram Link API  --}}
                <div class="form-group">
                    <label for="contact_us_instagram_link" class="col-sm-2 control-label">Instagram Link API</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="contact_us_instagram_link" name="contact_us_instagram_link" value="{{ $about->contact_us_instagram_link }}">
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