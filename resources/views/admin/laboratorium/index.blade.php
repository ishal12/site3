@extends('layouts.dashboard')

@section('activel', 'active')

@section('head', 'Table Laboratorium')

@section('content')
    <div class="col-md-12">
        <div class="card card-plain">
            <div class="card-header" data-background-color="purple">
                <div class="row">
                    <div class="col-lg-9">
                        <h4 class="title">Laboratorium</h4>
                        <p class="category">blablabla</p>
                    </div>
                    <div class="col-lg-3">
                        <a class="btn btn-success btn-lg" href="{{url('admin/laboratorium/create')}}" role="button">Tambah Laboratorium</a>
                    </div>
                </div>
            </div>
            <div class="card-content table-responsive">
                <table class="table table-hover">
                    <thead>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Ketua Lab</th>
                        <th><center>Edit</center></th>
                        <th><center>Delete</center></th>
                    </thead>
                    <tbody>
                        @foreach($laboratoriums as $laboratorium)
                            <tr>
                                <td>{{ $laboratorium->id }}</td>
                                <td>{{ $laboratorium->nama }}</td>
                                <td>{{ $laboratorium->users->name }}</td>
                                <td><center><a class="btn btn-info btn-lg" href="{{route('admin.laboratorium.edit', $laboratorium->id)}}" role="button"><i class="material-icons">create</i></i></a></center></td>
                                {!! Form::open(['url' => ['admin/laboratorium', $laboratorium->id], 'method' => 'DELETE']) !!}
                                    <td>
                                        <center>
                                    {!! Form::button('<i class="fa fa-trash" aria-hidden="true"></i>', ['class' => 'btn btn-danger btn-lg', 'role' => 'button', 'type' => 'submit']) !!}
                                        </center>
                                    </td>
                                {!! Form::close() !!}
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="text-center tim-row" id="pagination-row">
                    <ul class="pagination pagination-primary">
                        {!! $laboratoriums->links() !!}
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection