@extends('layouts.master')

@section('content-header')
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">{{$title}}</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">{{$title}}</li>
            </ol>
        </div><!-- /.col -->
        </div><!-- /.row -->
    </div>
@endsection

@section('content')
<div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">{{$title}}</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" action="/inventory/update" method="post">
                        <div class="card-body">
                            <div class="form-group">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="_method" value="PUT">
                                <input type="hidden" name="inventory_id" value="{{$inventory->id}}">
                                <input type="hidden" name="archive_id" value="{{$archive->id}}">
                            </div>
                            <div class="form-group">
                                <label>Inventory Name</label>
                                <input type="text" name="inventory_name" value="{{$inventory->name}}"
                                class="form-control" placeholder="Inventory Name">
                            </div>
                            <div class="form-group">
                                <label>Inventory Number</label>
                                <input type="text" name="inventory_number" value="{{$inventory->inventory_number}}"
                                class="form-control" placeholder="Inventory Number">
                            </div>

                            <div class="form-group">
                                <label>Archive Name</label>
                                <input type="text" name="archive_name" value="{{$archive->name}}"
                                class="form-control" placeholder="Archive Name">
                            </div>
                            <div class="form-group">
                                <label>Archive Number</label>
                                <input type="text" name="archive_number" value="{{$archive->archive_number}}"
                                class="form-control" placeholder="Archive Number">
                            </div>

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>
@endsection
