@extends('layouts.master')
{{-- @section('content') --}}
    
{{-- <div class="card">
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
</div> --}}
{{-- @endsection --}}

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
@section('content')

<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap.min.css') }}">

<div class="col-xs-12">  
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Table With Full Features</h3>
        </div>
        <!-- /.box-header -->
            <div class="box-body">
                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap">
                    <div class="row"><div class="col-sm-6">
                        <div class="dataTables_length" id="example1_length">
                            <label>Show &nbsp<select name="example1_length" aria-controls="example1" class="form-control input-sm">
                                <option value="10">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option></select> &nbsp entries
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div id="example1_filter" class="dataTables_filter">
                            <label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="example1"></label>
                        </div>
                    </div>
                </div>
                <div class="row"><div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                    <thead>
                        <tr role="row">
                            {{-- <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 182px;">Rendering engine</th> --}}
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" scope="col">No.</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" scope="col">Name</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" scope="col">Email</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" scope="col">Messages</th></tr>
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
                    <tfoot>
                        <tr>
                            <th rowspan="1" colspan="1">No.</th>
                            <th rowspan="1" colspan="1">Name</th>
                            <th rowspan="1" colspan="1">Email</th>
                            <th rowspan="1" colspan="1">Messages</th>
                        </tr>
                    </tfoot>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8">
                    <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                        <ul class="pagination">
                            <li class="paginate_button previous disabled" id="example1_previous">
                                <a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0">Previous</a>
                            </li>
                            <li class="paginate_button active">
                                <a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0">1</a>
                            </li>
                            <li class="paginate_button ">
                                <a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0">2</a>
                            </li>
                            <li class="paginate_button ">
                                <a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0">3</a>
                            </li>
                            <li class="paginate_button ">
                                <a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0">4</a>
                            </li><li class="paginate_button ">
                                <a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0">5</a>
                            </li>
                            <li class="paginate_button ">
                                <a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0">6</a>
                            </li>
                            <li class="paginate_button next" id="example1_next">
                                <a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0">Next</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
            <!-- /.box-body -->
    </div>
<!-- /.box -->
</div>
<script>
    $(function () {
        $('#example1').DataTable()
        $('#example2').DataTable({
        'paging'      : true,
        'lengthChange': false,
        'searching'   : false,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : false
        })
    })
</script>

<script src="{{ asset('js/dataTables.bootstrap.min.j.js') }}"></script>
<!-- SlimScroll -->
<script src="{{ asset('js//jquery.dataTables.min.js') }}"></script>
@endsection