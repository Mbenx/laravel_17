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
                    <form role="form" action="/karyawan/update" method="post">
                        <div class="card-body">
                            <div class="form-group">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="_method" value="PUT">
                                <input type="hidden" name="id" value="{{$data->id}}">
                            </div>
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="nama" value="{{$data->nama}}"
                                class="form-control" placeholder="Nama">
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" name="alamat" value="{{$data->alamat}}"
                                class="form-control" placeholder="Alamat">
                            </div>
                            <div class="form-group">
                                <label>Jabatan</label>
                                <input type="text" name="jabatan" value="{{$data->jabatan}}"
                                class="form-control" placeholder="Jabatan">
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
