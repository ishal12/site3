@extends('layouts.dashboard')

@section('activeu', 'active')

@section('head', 'Table User')

@section('content')
    <div class="col-md-12">
        <div class="card card-plain">
            <div class="card-header" data-background-color="purple">
                <div class="row">
                    <div class="col-lg-9">
                        <h4 class="title">User</h4>
                        <p class="category">blablabla</p>
                    </div>
                    <div class="col-lg-3">
                        <a class="btn btn-success btn-lg" href="{{url('admin/user/create')}}" role="button">Tambah User</a>
                    </div>
                </div>
            </div>
            <div class="card-content table-responsive">
                <table class="table table-hover">
                    <thead>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Jabatan</th>
                        <th>Password</th>
                        <th><center>Edit</center></th>
                        <th><center>Delete</center></th>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->jabatans->nama }}</td>
                                <td>{{ $user->password }}</td>
                                <td><center><a class="btn btn-info btn-lg" href="{{route('admin.user.edit', $user->id)}}" role="button"><i class="material-icons">create</i></i></a></center></td>
                                {!! Form::open(['url' => ['admin/user', $user->id], 'method' => 'DELETE']) !!}
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
                        {!! $users->links() !!}
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection