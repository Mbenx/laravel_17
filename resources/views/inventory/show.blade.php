@extends('layouts.master')

@section('content-header')
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">{{$title}} -- {{$data->name}}</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">{{$title}} -- {{$data->name}}</li>
            </ol>
        </div><!-- /.col -->
        </div><!-- /.row -->
    </div>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{$title}} -- {{$data->name}}</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <table class="table table-striped">
                        <thead>
                            <tr>
                            <th style="width: 10px">#</th>
                            <th>Nama Karyawan</th>
                            <th>Keterangan</th>
                            <th>Tanggal Peminjaman</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data->employee as $d)
                                <tr>
                                <td>#</td>
                                <td>{{$d->name}}</td>
                                <td>{{$d->pivot->keterangan}}</td>
                                <td>{{$d->pivot->created_at}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                        </table>
                    </div>
                <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
@endsection
